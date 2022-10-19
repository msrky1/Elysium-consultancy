<?php

namespace App\Http\Livewire\Admin\Accept;

use Livewire\Component;
use App\Models\Approved;
use App\Models\Lock;
class AcceptedComponent extends Component
{
    public function render()
    { 
        $lock = Lock::all();
        $approw = Approved::paginate(10);
        return view('livewire.admin.accept.accepted-component' , ['approved' => $approw ,'lock' =>  $lock])->layout('layouts.admin');
    }
}
