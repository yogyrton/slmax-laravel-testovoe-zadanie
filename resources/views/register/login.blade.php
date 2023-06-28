@extends('layouts.app')

@section('title', 'Вход')

@section('content')
    <div class="form" style="color: red;">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">

                <div class="form-group mt-2">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">

                        <label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Логин" name="email">
                        </label>

                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>
                </div>

                <div class="form-group mt-2">
                    <label for="inputPassword3" class="col-sm-2 control-label">Пароль</label>
                    <div class="col-sm-10">

                        <label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Пароль" name="password">
                        </label>

                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group mt-2">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" value="1">Запомнить меня
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group mt-2">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary btn-sm">Войти</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
@endsection
