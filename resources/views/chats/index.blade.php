@extends('layouts.app')

@section('title', 'Чаты')

@section('content')

    <a href="{{ route('chats.create') }}">Добавить чат</a>

    <hr>

    @if($chats->count() > 0)

        <table class="table table-striped projects">

            <thead>
            <tr>

                <th style="width: 3%">
                    ID
                </th>

                <th style="width: 10%">
                    Название чата
                </th>

                <th style="width: 10%">
                    Действия
                </th>

            </tr>
            </thead>

            <tbody>
            @foreach($chats as $chat)
                <tr>

                    <td>
                        {{ $chat->id }}
                    </td>

                    <td>
                        <a href="{{ route('chats.show', $chat->id) }}">{{ $chat->title }}</a>

                    </td>

                    <td class="project-actions text-right">

                        <form action="{{ route('chats.destroy', $chat->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm delete-tag">Удалить</button>
                        </form>

                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>

    @else

        Чатов еще нет

    @endif

@endsection
