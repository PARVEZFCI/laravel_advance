<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Event;
use App\Events\OrderPlaced;


class EventController extends Controller
{
     public function index()
    {
        $user_id = 1;
        Event::dispatch(new OrderPlaced($user_id));

        // dd("Check inbox");
    }
}
