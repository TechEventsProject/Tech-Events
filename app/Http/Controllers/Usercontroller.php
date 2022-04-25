<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class Usercontroller extends Controller
{
    //-----------SUBSCRIPTION------------

    public function subscribe($id) 
    {
        $user=User::find(Auth::id());
        $event=Event::find($id);

        $user->event()->attach($event);

        return redirect()->route('show', ['id' => $event->id ]);
    }

    public function unsubscribe($id) 
    {
        $user=User::find(Auth::id());
        $event=Event::find($id);

        $user->event()->detach($event);

        return redirect()->route('home');
    }

    //----------MY EVENTS----------

    public function my_events() 
    {
        $myEventUser = [];

        if(Auth::user()){

            $user = Auth::user();
            $myEventUser = $user->event;
            
        }

        return view ('my_events', compact ('myEventUser'));
    }
}
