<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Eventitem;

class SiteController extends Controller
{
    public function index($name,$id)
    {
        $event = Event::find($id);
       
        return view('event', ['event' => $event]);
    }

    public function eventitem($name,$id,$event_id)
    {
        $event = Event::find($event_id);
        $eventitem = Eventitem::find($id);
       
        return view('eventitem', ['eventitem' => $eventitem, 'event' => $event]);
    }
}
