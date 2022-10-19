<?php

namespace App\Http\Livewire\Admin\Aducation\Social\Category;

use Livewire\Component;
use App\Models\SocialCategory;

class AdminSocialCategoryComponent extends Component
{
    public function render()
    {
        $category = SocialCategory::paginate(10);
        return view('livewire.admin.aducation.social.category.admin-social-category-component', ['category' => $category])->layout('layouts.admin');
    }
}
