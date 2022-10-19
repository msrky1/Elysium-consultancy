<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Notification;
class AdminNotificationComponent extends Component
{

    

    public function deleteNotification($id)

    {
        $notification = Notification::find($id);    
       
        $notification->delete();
        session()->flash('message' , 'Bildirim Başarıyla Slindi!');
    
    
        

    }

    public function render()
    { 

        $notification = Notification::orderBy('id' , 'DESC')->paginate('10');
        return view('livewire.admin.admin-notification-component' , ['notification' => $notification])->layout('layouts.admin');
    }
}
