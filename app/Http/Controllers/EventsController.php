<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{
    public function all()
    {
        return Event::all();
    }

    public function find($id, $a, $b)
    {
        return [$id, $a, $b];
    }
}

