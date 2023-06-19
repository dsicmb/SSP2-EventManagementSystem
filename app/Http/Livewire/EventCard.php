<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EventCard extends Component
{
    public $event;

    public function mount($event)
    {
        $this->event = $event;
    }
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.event-card');
    }
}
