@extends('layouts.app')

@section('title', 'Добавить чат')

@section('content')

    <a href="{{ route('chats.index') }}">Назад</a>

    <hr>

    <div id="chatAndMessage">

        @foreach($messages as $message)

            @if($message->user->id === auth()->id())
                <div class="messageInChat">
                    <div class="messageClient">{{ $message->message }} <br> Я <br> {{ $message->time }}</div>
                </div>
                <hr>
            @else
                <div class="messageInChat">

                    <div class="messageManager">{{ $message->message }} <br> {{ $message->user->name }} <br> {{ $message->time }}</div>
                </div>
                <hr>
            @endif

        @endforeach

    </div>

    <hr>

    <form action="{{ route('messages.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Текст сообщения</label>
            <input type="text" name="message" class="form-control @error('message') is-invalid @enderror" value="{{ old('message') }}">
            <input type="hidden" name="chat_id" value="{{ $chat->id }}">
        </div>

        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" id="addMessage" class="btn btn-primary">Отправить</button>
    </form>
@endsection
