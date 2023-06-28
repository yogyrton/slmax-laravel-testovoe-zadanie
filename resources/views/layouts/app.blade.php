<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('title')</title> <style>
        #chatAndMessage {
            width: 100%;
            height: 50%;
            overflow-y: auto;
            border: 1px solid #dbdbdd;
            background: #ffffff;

        }

        .messageInChat {
            overflow: hidden;
            margin-bottom: 10px;
            border-radius: 5px;
            padding: 5px;
        }

        .messageClient {
            max-width: 286px;
            background: #00a6e8;
            color: white;
            left: 10px;
            width: 80%;
            float: left;
            padding: 5px;
        }

        .messageManager {
            max-width: 286px;
            background: #dedede;
            color: black;
            right: 10px;
            width: 80%;
            float: right;
            padding: 5px;
        }
    </style>
</head>

<body>
<div class="container">

    @include('layouts.header')

    @if (session('error'))
        <div class="alert alert-danger">
            <li>{{ session('error') }}</li>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            <li>{{ session('success') }}</li>
        </div>
    @endif

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">@yield('title')</h1>
            </div>
        </div>
    </section>

    @yield('content')
    @include('layouts.js')

</div>
</body>

</html>
