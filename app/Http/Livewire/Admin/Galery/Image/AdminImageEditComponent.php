<?php

namespace App\Http\Livewire\Admin\Galery\Image;

use Livewire\Component;
use App\Models\GaleryCategory;
use App\Models\Image;
use App\Models\Galery;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use File;
class AdminImageEditComponent extends Component
{
    public $name;
    public $image;
    public $newimage;
    public $slug;
    public $blog_id;
    public $category_id;

    use WithFileUploads;

    public function mount ($blog_id) {
           
        $category = Image::where('id' , $blog_id)->first();

        $this->name = $category->name;
        $this->image = $category->image;
        $this->slug = $category->slug;
        $this->category_id = $category->category_id;
        $this->blog_id = $category->id;





    }
    public function deleteGalery($id)

    {
        $galery = Galery::find($id);
        File::Delete('storage/galery/'.$galery->image);
        $galery->delete();
       session()->flash('message-2' , 'Galery Başarıyla Slindi!');
    
    
        

    }
    
    public function generateSlug(){


        $this->slug = Str::slug($this->name, '-');
    }
     public function updateCategory() {


            $category = Image::find($this->blog_id);
            $category->name = $this->name;
            $category->category_id = $this->category_id;
            $category->slug = $this->slug;
            if ($this->newimage){
                $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
                $this->newimage->storeAs('public/galery/kapak', $imageName);
                $category->image = $imageName; 
        
        
            }
            $category->save();
          
            session()->flash('message' , 'Galeri Güncellendi');


     }
    public function render()

    {



        $galery = Image::where('slug', $this->slug)->first();
        $category = GaleryCategory::all();
        return view('livewire.admin.galery.image.admin-image-edit-component' ,  ['category' => $category , 'galery' => $galery])->layout('layouts.admin');
    }
}
