<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Human;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use File;


class HumanController extends Controller
{
    
    use WithFileUploads;



    public function addCv(Request $request) {
 
        $validated = $request->validate([
            'cv' => 'required|max:1024',
         
            'name' => 'required|max:50|min:2',
            'description' => 'required|max:255|min:5',

            

           
          
        ]);

        $human = new Human();

        $human->name = $request->name;
        $human->email = $request->email;
        $human->number = $request->number;
        $human->description = $request->description;
        $human->area = $request->area;
        $human->branch = $request->branch;
        
       

           
        $request->file('cv')->store('public/cv');
        $filename =    $request->cv->hashName();
        $human->cv = $filename;
        $human->save();

        return  redirect()->back()->with('success' , 'Başvuru İşleminiz Başarıyla Gerçekleşmiştir!');




    }
}
