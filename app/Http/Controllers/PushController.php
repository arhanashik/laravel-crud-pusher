<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\PushSubmitted;
use App\Push;

class PushController extends Controller
{
    public function index()
    {
        $pushes = Push::all();

        return view('pusher.receiver', compact('pushes'));
    }

    public function sender() {
        return view('pusher.sender');
    }

    public function sendPush(Request $request) {
        $request->validate([
            'content' => 'required'
        ]);
        
        $content = $request->content;

        $push = new Push();
        $push->data = $content;
        $push->save();

        event(new PushSubmitted($content));
    }
}
