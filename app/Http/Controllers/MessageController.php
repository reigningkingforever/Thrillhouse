<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        return view('messages.index');
      }
      public function store(Request $request){
        $request->validate([
          'message' => 'required|max:255',
        ]);
        // $message = new Message;
        // $message->message = $request->message;
        $message = $request->message;
        return response()->json(['message'=>$message, 'date'=>now()->format('M d'), 'time'=>now()->format("h:i A")], 200);
      }
}
