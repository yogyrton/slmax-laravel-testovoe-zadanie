<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Http\Requests\StoreChatRequest;
use App\Models\Message;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chats = Chat::query()
            ->with(['user', 'messages'])
            ->get();

        return view('chats.index',compact('chats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('chats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreChatRequest $request)
    {
        $data = $request->validated();

        Chat::query()->create([
            'title' => $data['title'],
            'user_id' => auth()->id()
        ]);

        return to_route('chats.index')->with('success', 'Чат успешно добавлен');
    }

    /**
     * Display the specified resource.
     */
    public function show(Chat $chat)
    {
        $messages = Message::query()->with('user')->where('chat_id', $chat->id)->get();

        return view('chats.show', compact('messages', 'chat'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chat $chat)
    {
        $chat->delete();

        return to_route('chats.index')->with('success', 'Чат успешно удален');
    }
}
