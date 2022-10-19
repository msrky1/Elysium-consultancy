<?php

namespace App\Http\Livewire\Admin\Video;

use Livewire\Component;
use App\Models\Video;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads; 

class VideoAddComponent extends Component
{ 
    
    public $title;
    public $slug;
    public $url;
    public $image;
    public $category_id;
    
    use WithFileUploads;
    
 public function generateSlug(){

     $this->slug  = Str::slug($this->title ,'-');

}


    public function categoryAdd() {
            
        
        $category = new Video();
        $category->title = $this->title;
        $category->slug = $this->slug;
        $category->url = $this->url;
     

        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('public/video/kapak', $imageName);
        $category->image = $imageName; 
        $category->save();
   

        session()->flash('message' , 'Video Eklendi');
               
    }
    public function render()
    {

        $video = Video::orderBy('id' , 'DESC')->simplePaginate(15);
        return view('livewire.admin.video.video-add-component' , ['video' => $video])->layout('layouts.admin');
    }
}
