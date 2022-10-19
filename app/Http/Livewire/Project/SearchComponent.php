<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Approved;
use Barryvdh\DomPDF\Facade\Pdf;


class SearchComponent extends Component
{
    public $query;
    public $approved;



    public function mount(){


        $this->query = '';
        $this->approved = [];
    }



    public function updatedQuery(){


         $this->approved = Approved::where('tc' , 'like' , '%' . $this->query . '%')
         
         ->get()

         ->toArray();

    }
    // public function search(Request $request){
    //     // Get the search value from the request
    //     $search = $request->input('search');
    
    //     // Search in the title and body columns from the posts table
    //     $posts = Blog::query()
    //         ->where('title', 'LIKE', "%{$search}%")
    //         ->orWhere('description', 'LIKE', "%{$search}%")
    //         ->get();
    
    //     // Return the search view with the resluts compacted
       
    // }
    public function pdfReturn () {

      

  }
    
    public function render()
    {
        return view('livewire.project.search-component')->layout('layouts.base');
    }
}
