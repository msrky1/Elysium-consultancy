<?php

namespace App\Http\Livewire\Admin\Notification;

use Livewire\Component;
use App\Models\Notification;
use Carbon\Carbon;

class NotificationComponent extends Component
{ 
      

    public function render()
    {
        Carbon::setLocale('tr');

        $notification = Notification::orderBy('id' , 'DESC')->paginate('6');
        return view('livewire.admin.notification.notification-component' , ['notification' => $notification]);
    }
}
