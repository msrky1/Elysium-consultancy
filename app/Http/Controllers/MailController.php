<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\MailNotify;
use App\Models\Human;

class MailController extends Controller
{
    public function index(Request $request) {


        $data = [
    
            'subject' => 'Gelen Mail' ,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'description' => $request->description,
        ];
         
        $humans = new Human();

        $humans->name = $request->name;
        $humans->email = $request->email;
        $humans->number = $request->phone;
        $humans->description = $request->description;

        $humans->save();

     try {
         
        Mail::to('msrky1@gmail.com')->send(new MailNotify($data));
        return redirect('/thankyou');
    
     }catch (Exeption $th) {
    
        return response()->json(['Sorry upss!']);
    
        
     }
       }

      
}
