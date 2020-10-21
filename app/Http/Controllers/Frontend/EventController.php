<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function event()
    {
        $events = Event::all();
        return view('frontend.event.event',compact('events'));
    }
}
