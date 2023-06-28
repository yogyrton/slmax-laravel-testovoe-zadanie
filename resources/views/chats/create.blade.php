@extends('layouts.app')

@section('title', 'Добавить чат')

@section('content')

    <a href="{{ route('chats.index') }}">Назад</a>

    <hr>

    <form action="{{ route('chats.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Название чата</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
        </div>

        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection
