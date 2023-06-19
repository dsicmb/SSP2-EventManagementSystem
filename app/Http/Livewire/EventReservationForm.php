<?php

namespace App\Http\Livewire;

use App\Models\Reservation;
use Livewire\Component;
use App\Models\Event;

class EventReservationForm extends Component
{

    public $event;

    public $user;

    public Reservation $reservation;

    protected $rules = [
        'reservation.first_name' => 'required|string',
        'reservation.last_name' => 'required|string',
        'reservation.email' => 'required|email',
        'reservation.phone' => 'required|string',
        'reservation.address' => 'required|string',
        'reservation.country' => 'required|string',
        'reservation.city' => 'required|string',
        'reservation.state' => 'required|string',
        'reservation.zip_code' => 'required|string',
        'reservation.card_number' => 'required|string',
    ];

    public function mount($event)
    {
        $this->event = $event;
        $this->user = auth()->user();
        $this->reservation = new Reservation();
    }

    public function createReservation()
    {

        $this->validate();

        $this->reservation->user_id = $this->user->id;

        $this->reservation->event_id = $this->event->id;

        $this->reservation->save();

        $this->emit('reservationCreated');

        $this->event->increment('subscription_count');

        // show a success message
        session()->flash('message', 'Your Reservation was created successfully!');

        // get the current active user
        $user = auth()->user();

        // notify the user
        $user->notify((new \App\Notifications\ReservationComplete($this->reservation)));

        // redirect the user to the event page
        return redirect()->route('event.show', $this->event->id);
    }

    public function render()
    {
        return view('livewire.event-reservation-form');
    }
}