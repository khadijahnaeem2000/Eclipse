<?php

namespace App\Http\Livewire\App\Common\Panels\BookingDetails;

use Livewire\Component;

class AssignProviders extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.panels.booking-details.assign-providers');
    }

    public function mount()
    {
       
       
    }
    function showForm()
    {     
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }

}
