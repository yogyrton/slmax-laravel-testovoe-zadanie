@extends('layouts.app')

@section('title', 'Главная')

@section('content')

    @guest()
        <h3>Чтобы стали доступны сообщения</h3>
        <a href="{{ route('register') }}">Зарегистрируйся</a>
        или
        <a href="{{ route('login')}}">Войди</a>

    @endguest

    @auth()
        <h3>Перейдите к </h3><a href="{{ route('chats.index') }}">Сообщениям</a>
    @endauth

@endsection
