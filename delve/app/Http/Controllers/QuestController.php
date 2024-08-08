<?php

namespace App\Http\Controllers;

use App\Models\Quest;
use App\Models\Timestamp;
use Illuminate\Http\Request;

class QuestController extends Controller
{
    public function index()
    {
        $quest = Quest::first();
        $scene = $quest->scene();
        $timestamp = Timestamp::first();

        return view("quest", compact("quest", 'scene', 'timestamp'));
    }
}
