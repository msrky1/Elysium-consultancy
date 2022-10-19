<?php

namespace App\Http\Livewire\Admin\Lock;

use Livewire\Component;
use App\Models\Lock;
class LockComponent extends Component
{

    public $lock;
    public $lock_id;
  

    public function mount($lock_id) {
        $lock = Lock::where('id', $lock_id)->first();

        $this->lock =  $lock->lock;

        $this->lock_id = $lock->id;

    }
    public function updateLock() {

        $lock = Lock::find($this->lock_id);      
        $lock->lock = $this->lock;
        $lock->save();
        session()->flash('message' , 'Durum Güncellendi!');
    }

    public function render()
    {
        
        return view('livewire.admin.lock.lock-component')->layout('layouts.admin');
    }
}
