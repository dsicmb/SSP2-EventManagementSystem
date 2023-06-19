<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{

    public function __invoke()
    {
        $currentDate = Carbon::now()->toDateString();

        $futureEvents = \App\Models\Event::where('date', '>', $currentDate)
            ->orderBy('view_count', 'desc')
            ->paginate(4);

        $pastEvents = \App\Models\Event::where('date', '<=', $currentDate)
            ->orderBy('view_count', 'desc')
            ->paginate(4);

        return view('home', [
            'futureEvents' => $futureEvents,
            'pastEvents' => $pastEvents
        ]);
    }

    public function pastEvents()
    {

        $currentDate = Carbon::now()->toDateString();

        $pastEvents = \App\Models\Event::where('date', '<=', $currentDate)
            ->orderBy('view_count', 'desc')
            ->paginate(4);

        return view('past-events', [
            'pastEvents' => $pastEvents
        ]);
    }
}