<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function eventParticipantsTable(){
        return view('community/pages/event-part-table');
    }
}
