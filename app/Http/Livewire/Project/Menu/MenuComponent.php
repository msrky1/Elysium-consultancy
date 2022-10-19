<?php

namespace App\Http\Livewire\Project\Menu;

use Livewire\Component;
use App\Models\Lock;

class MenuComponent extends Component
{
    public function render()
    {

        $lock = Lock::all();
        return view('livewire.project.menu.menu-component' , ['lock' => $lock] );
    }
}
