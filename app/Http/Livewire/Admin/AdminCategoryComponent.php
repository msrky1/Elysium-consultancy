<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
class AdminCategoryComponent extends Component
{
    public function render()
    {

        $category = Category::paginate(10);
        return view('livewire.admin.admin-category-component' , ['category' => $category])->layout('layouts.admin');
    }
}
