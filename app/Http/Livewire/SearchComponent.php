<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Approved;
use Barryvdh\DomPDF\Facade\Pdf;

class SearchComponent extends Component
{
    public $query;
    public $approved;
    public $tc;





    public function mount(){


        $this->query = '';
        $this->approved = [];
    }

    
    public function updatedQuery(){

        $validate = [

            'tc' => 'required|max:11',


        ];
        
         $this->approved = Approved::where('tc' , 'like' , '%' . $this->query . '%')
         
         ->get()

         ->toArray();

    }

    public function pdfGenerate() {

          
        return redirect()->back();
        
         
        //  $pdf = PDF::loadView('pdf.user', compact('item'));
        //  return $pdf->stream('user.pdf');

      
                       


    }

   
 
    public function render()
    {
        return view('livewire.search-component')->layout('layouts.base');
    }
}
