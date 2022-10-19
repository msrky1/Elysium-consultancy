<?php

namespace App\Http\Livewire\Admin\About;

use Livewire\Component;
use App\Models\About;
use App\Models\Notification;
class AboutEditComponent extends Component
{

    public $title;
    public $title_one;
    public $description;

    public $about_id;

    public function mount($about_id) 

    {
       
        $about = About::where('id' , $about_id)->first();

        $this->title = $about->title;
        $this->title_one = $about->title_one;
        $this->description = $about->description;
        $this->about_id = $about->id;
        



    }



    public function updateAbout()
    {
            $about = About::find($this->about_id);
            $about->title = $this->title;
            $about->title_one = $this->title_one;
            $about->description = $this->description;
            $about->save();

            $notification = new Notification();

            $notification->name = $this->title;
            $notification->notification = ' Blog Sayfasına Yeni Bir Blog Yazısı Başarıyla Eklendi!';
            $notification->color = 'warning';
            $notification->save();

            session()->flash('message' ,'Güncelleme Başarılı');
    }


    public function render()
    {


        return view('livewire.admin.about.about-edit-component')->layout('layouts.admin');
    }
}
