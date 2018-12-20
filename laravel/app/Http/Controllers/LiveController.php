<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveController extends Controller
{
    public function test() {
        $livedate = new \App\Live();
        $livedate->date = '19/01/2018';
        $livedate->location = 'Melkweg';
        $livedate->city = 'Amsterdam';
        $livedate->country = 'Nederland';
        $livedate->ticket = 'ticketlink';

        $livedate->save();

        return('Ok bewaard');
    }
}
