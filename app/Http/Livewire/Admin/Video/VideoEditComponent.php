<?php

namespace App\Http\Livewire\Admin\Video;

use Livewire\Component;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use App\Models\Video;
use File;

class VideoEditComponent extends Component
{
    public $title;
    public $image;
    public $newimage;
    public $slug;
    public $blog_id;


    use WithFileUploads;

    public function mount ($blog_id) {
           
        $category = Video::where('id' , $blog_id)->first();

        $this->title = $category->title;
        $this->url = $category->url;
        $this->image = $category->image;
        $this->slug = $category->slug;
      
        $this->blog_id = $category->id;





    }
   
    
    public function generateSlug(){


        $this->slug = Str::slug($this->title, '-');
    }
     public function updateCategory() {


            $category = Video::find($this->blog_id);
            $category->title = $this->title;
            $category->url = $this->url;
            $category->slug = $this->slug;
            if ($this->newimage){
                $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
                $this->newimage->storeAs('public/video/kapak', $imageName);
                $category->image = $imageName; 
        
        
            }
            $category->save();
          
            session()->flash('message' , 'Video Güncellendi');


     }
    public function render()

    {



        $video = Video::where('slug', $this->slug)->first();
       
        return view('livewire.admin.video.video-edit-component' , ['video' => $video])->layout('layouts.admin');
    }
}
