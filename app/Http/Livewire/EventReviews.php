<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;

class EventReviews extends Component
{

    public $event;

    // refresh the component when reviewCreated event is fired
    protected $listeners = [
        'reviewCreated' => '$refresh'
    ];

    public function mount($event)
    {
        $this->event = $event;
    }

    public function render()
    {
        return view('livewire.event-reviews', [
            'reviews' => $this->event->reviews()->latest()->get()
        ]);
    }
}