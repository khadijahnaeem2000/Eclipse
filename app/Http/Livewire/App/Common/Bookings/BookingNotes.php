<?php

namespace App\Http\Livewire\App\Common\Bookings;

use Livewire\Component;
use App\Models\Tenant\Booking;

class BookingNotes extends Component
{
    public $booking_id;
    public $booking;
    protected $rules = [
        'booking.provider_notes' => 'required|string',
        'booking.customer_notes' => 'required|string',
        'booking.private_notes' => 'required|string',
    ];
    public function mount($booking_id)
    {
        $this->booking_id = $booking_id;
        $this->booking = Booking::find($booking_id);
    }

    public function render()
    {
        return view('livewire.app.common.bookings.booking-notes');
    }

    public function updateNotes()
    {
        $this->validate();
        $this->booking->save();
        $this->dispatchBrowserEvent('notesUpdated', ['message' => 'Notes updated successfully']);
            
    }
}

