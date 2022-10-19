<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Approved;
use Barryvdh\DomPDF\Facade\Pdf;

class BasvuruController extends Controller
{ 

    public function addApprow(Request $request) {

    
      $class = new Approved();
      $class->name = $request->name;
      $class->email = $request->email;
     
      $class->tc = $request->tc;
      $class->hour = $request->hour;
         
   
      $class->save();
    
      $application = Application::find($class->id);    
      $application->delete();
    
      return  redirect()->back()->with('message' , 'Başvurunuz Başarıyla Onaylandı!');
    }

 

    public function table() {


         return view('pdf.user');

       


    }

    public function addApp(Request $request) {

        if($request->has('tc')){
            $request->validate([
                'tc' => 'required|max:11', 
                'tc' => 'required|min:11', 
                'tc' => 'required|unique:applications'
               
            ]);
        }

        $class = new Application();
        $class->name = $request->name;
        $class->email = $request->email;
      
        $class->tc = $request->tc;
        $class->classroom = $request->classroom;
        $class->classroom_id = $request->classroom_id;
        $class->hour = $request->hour;
        $class->save();

        return  redirect()->route('thankyou')->with('message' , 'Başvurunuz Başarıyla Yapıldı!');
    }


    public function pdfGenerate($name) {


        
        $posts = Approved::where('name' , $name)->first() ?? abort(403,'Kayboldun Sanırım');
        $data['approved'] = $posts;
        $pdf = PDF::loadView('pdf.user', $data);
        return $pdf->stream('Başvuru Belgesi.pdf');
       

    }
}
