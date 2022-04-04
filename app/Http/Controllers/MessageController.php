<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class MessageController extends Controller
{
    public function index($question_id = null){
      $question = $question_id ? Question::find($question_id) : Question::find(1);
      //$new_question = Question::create(['order'=>6,'name'=> 'packages','description'=> 'Pick a package','field_type'=> 'loop','options'=> ['age'=> 'agent','apr'=> 'april'],'validation'=> array('required','multiple')]);
      return view('messages.index',compact('question'));
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
