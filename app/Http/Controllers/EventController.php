<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
        public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
        {
            $events = Event::orderby('view_count', 'desc')->get();
            return view('event.index');
        }

        public function show(Event $event): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
        {
            $event->increment('view_count');
            return view('event.show',[
                'event' => $event
            ]);
        }

        public function reservation(Event $event): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
        {
            return view('event.reservation',[
                'event' => $event
            ]);
        }
}
