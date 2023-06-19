<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateEventReview extends Component
{
    public $event;

    public $rating = 3;

    public $title ;

    public $comment;

    // create validations
    protected $rules = [
        'rating' => 'required|integer|min:1|max:5',
        'title' => 'required|min:05',
        'comment' => 'required|min:20'
    ];

    public function mount($event)
    {
        $this->event = $event;
    }

    public function save()
    {
        $this->validate();

        $this->event->reviews()->create([
            'user_id' => auth()->id(),
            'rating' => $this->rating,
            'title' => $this->title,
            'comment' => $this->comment
        ]);

        $this->emit('reviewCreated');

        $this->reset(['rating', 'title', 'comment']);
    }

    public function render()
    {
        return view('livewire.create-event-review');
    }
}
