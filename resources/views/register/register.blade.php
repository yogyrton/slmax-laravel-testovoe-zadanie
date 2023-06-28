@extends('layouts.app')

@section('title', 'Регистрация')

@section('content')
    <div class="form" style="color: red">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">

                <div class="form-group mt-2">
                    <label for="inputEmail3" class="col-sm-2 control-label">Имя</label>
                    <div class="col-sm-10">

                        <label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Логин" name="name">
                        </label>

                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>
                </div>

                <div class="form-group mt-2">
                    <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">

                        <label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
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
                    <label for="inputPassword3" class="col-sm-2 control-label">Подтвердите пароль</label>
                    <div class="col-sm-10">

                        <label>
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Пароль"
                                   name="password_confirmation">
                        </label>

                        @error('password_confirmation')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>
                </div>

                <div class="form-group mt-2">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary btn-sm ">Зарегистрироваться</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
@endsection
