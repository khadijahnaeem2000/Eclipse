<?php

namespace App\Http\Livewire\App\Common\Bookings;

use Livewire\Component;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\User;
use Livewire\WithPagination;

class Assignedproviders extends Component
{
    use WithPagination;
    public $booking_id;
    public $limit;

    protected $assignedProviders;

    public function mount($booking_id)
    {
        $this->booking_id = $booking_id;
        $this->loadAssignedProviders();
    }

    public function render()
    {
        return view('livewire.app.common.bookings.assignedproviders', ['assignedProviders' => $this->assignedProviders]);
    }

    private function loadAssignedProviders()
    {
        $this->assignedProviders = BookingProvider::where('booking_id', $this->booking_id)
            ->join('users', 'booking_providers.provider_id', '=', 'users.id')
            ->paginate(5);
    }
}


