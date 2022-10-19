<?php

namespace App\Http\Livewire\Admin\Aducation\Social;

use Livewire\Component;
use App\Models\Social;
use App\Models\SocialCategory;
use File;

class AdminSocialComponent extends Component
{
    public function deleteBlog($id)

    {
        $social = Social::find($id);    
        File::Delete('storage/social/'.$social->image);
        $social->delete();
        session()->flash('message' , 'Etkinlik  Başarıyla Slindi!');
    
    
        

    }
    
    public function render()
    {
        $category = SocialCategory::all();
        $social = Social::orderBy('id' , 'DESC')->simplePaginate(5);
        return view('livewire.admin.aducation.social.admin-social-component' , ['social' => $social , 'category' => $category])->layout('layouts.admin');
    }
}
