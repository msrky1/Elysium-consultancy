<?php

namespace App\Http\Livewire\Admin\Video;

use Livewire\Component;
use App\Models\Video;
use File;

class VideoComponent extends Component
{
    public function deleteBlog($id)

    {

        
        $blog = Video::find($id);    
        File::Delete('storage/video/kapak/'.$blog->image);
        $blog->delete();
        session()->flash('message' , 'Video  Başarıyla Slindi!');
    
    
        

    }
    public function render()
    {
        $video = Video::orderBy('id' , 'DESC')->simplePaginate(15);
        return view('livewire.admin.video.video-component' , ['video' => $video])->layout('layouts.admin');
    }
}
