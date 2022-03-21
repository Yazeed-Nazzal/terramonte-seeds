<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('Admin.Events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'       => 'required',
            'editor2' => 'required',
            'image_event' => 'required',
            'status'      => 'required',
            'events_date'  => 'required'
        ]);

        $event = Event::create([
            'title' => $data['title'],
            'description' => $data['editor2'],
            'status' => $data['status'],
            'events_date' => $data['events_date']
        ]);

        $event->addMedia($request->image_event)->toMediaCollection('event');

        return redirect()->route('events.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('Admin.Events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $data = $request->validate([
            'title'       => 'required',
            'editor1' => 'required',
            'status'      => 'required',
            'events_date'  => 'required'
        ]);

        $event->update([
            'title' => $data['title'],
            'description' => $data['editor1'],
            'status' => $data['status'],
            'events_date' => $data['events_date']
        ]);

        if ($request->hasFile('image_event')) {
            $event->clearMediaCollection('event');
            $event->addMedia($request->image_event)->toMediaCollection('event');
        }

        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index');
    }
}
