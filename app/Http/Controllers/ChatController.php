<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;    

class ChatController extends Controller
{
    public function index()
    {
        $chats = Chat::all();
        return response()->json($chats);
    }

    public function store(Request $request)
    {
        //validation
        $request->validate([
            'sender' => 'required',
            'message' => 'required',
            'imageUrl' => 'required'
        ]);

        //import to database
        $chats = Chat::create([
            'sender' => $request->sender,
            'message' => $request->message,
            'imageUrl' => $request->required,
        ]);

        //return response
        return response()->json($message);
    }

    public function update(Request $request, Chat $chat)
    {
        //validation
        $request->validate([
            'sender' => 'required',
            'message' => 'required',
            'imageUrl' => 'required'
        ]);

        //import to database
        $chat->update([
            'sender' => $request->sender,
            'message' => $request->message,
            'imageUrl' => $request->imageUrl,
        ]);

        //return response
        return response()->json($chat);
    }

    public function destroy(Chat $chat)
    {
        $chat->delete();
        return response()->json($chat);
    }
}
