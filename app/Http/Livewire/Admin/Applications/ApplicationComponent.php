<?php

namespace App\Http\Livewire\Admin\Applications;

use Livewire\Component;
use App\Models\Application;
use App\Models\Approved;
use  Illuminate\Support\Facades\DB;
use App\Models\Lock;
class ApplicationComponent extends Component
{
    public $name; 
    public $email;
    public $tc;
    
 

    public function tableReset() {
    
        DB::table('approveds')->truncate();
        DB::table('applications')->truncate();
        // DB::table('classrooms')->truncate();



  }
  

    public function render()
    {

        $lock = Lock::all();
        $app = Application::all();
        return view('livewire.admin.applications.application-component', ['app' => $app,'lock' =>  $lock])->layout('layouts.admin');
    }
}
