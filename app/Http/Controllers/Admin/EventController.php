<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use function Ramsey\Uuid\v1;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Session;
use App\Http\Requests\EventStoreRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventStoreRequest $events)
    {
        Event::create($events->validated());
        Session::flash('success', 'Reservation Created successfully.');
        return redirect()->route('admin.events.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       return view('admin.events.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventStoreRequest $request, Event $event)
    {
        $event->update($request->validated());

        return redirect()->route('admin.events.index')->with('success', 'Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        Session::flash('danger', 'Reservation Deleted successfully.');
        return to_route('admin.events.index');
    }
}
