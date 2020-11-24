<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class EventController extends Controller
{
    public function event()
    {
        $events = Event::all();
        return view('frontend.event.event',compact('events'));
    }

   public function detail($id)
    {

        $event = Event::find($id);

        return view('frontend.event.detail',compact('event'));

    }
}
