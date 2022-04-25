<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Event::orderBy('id', 'desc')->simplePaginate(4);
        return view('home', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $newEvent = request()->except(['_token', 'highlighted']);
        $newEvent['highlighted'] = $request-> boolean('highlighted');
        Event::create($newEvent);
        return redirect()->route('home'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        $users = count($event->user()->get());

        return view('show', compact(['event', 'users']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $event = Event::find($id);
        $user = User::find($id);
        return view('edit', compact(['event', 'user']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $changeEvent = request()->except(['_token', '_method']);
        $changeEvent['highlighted'] = $request->boolean('highlighted');
        
        Event::where('id', '=', $id)->update($changeEvent);
        //dd($changeEvent);
        
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Event::destroy($id);
        return redirect()->route('home');
    }
    
    // public function pastEvent()
    // {
    //     $events = Event::where('past_event', '=', 1);
    //     return view('past_event', compact('past_event'));
    // }

    public function highlighted()
    {
        $highlighted_events = [];
        $events = Event::all();

        foreach($events as $event){
            if($event->highlighted) {
                array_push($highlighted_events, $event);
            }
        }

        return view('highlighted', compact('highlighted_events'));
    }

    public function landing(){
        $events = Event::orderBy('id', 'desc')->simplePaginate(4);
        return view('landing', compact('events'));
    }
}

