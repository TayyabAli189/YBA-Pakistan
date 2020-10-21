<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Event;
class EventController extends Controller
{
    private $event;
    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    public function index()
    {
        $events = $this->event->getAllEvents();
        return view('backend.event.index',compact('events'));
    }


    public function create()
    {
        return view('backend.event.add_event');  //
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $this->event->addEvent($data);
        return redirect()->route('listing.event'); //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $event = Event::find($id);
        return view('backend.event.edit_event',compact('event'));
    }


    public function update(Request $request, $id)
    {
        $data = $request->all();
        $this->event->updateEvent($data,$id);
        return redirect()->route('listing.event');
    }

    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect()->route('listing.event');
    }
}
