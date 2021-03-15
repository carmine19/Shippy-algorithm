<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <!-- CSS only -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">

        <p>Try to create a PHP algorithm
            that finds the lowest price, given
            two different airport's code in
            tab 1, assuming at most 1
            stopovers.</p>


        <table class="table">
            <thead>
            <tr>

                <th scope="col">Airport Code</th>
                <th scope="col">Stopover</th>
                <th scope="col">Price</th>

            </tr>
            </thead>
            <tbody>
            @foreach($sql as $ele)
                <tr>
                    <td>{{$ele->codice}}</td>
                    <td>{{$ele->scalo}}</td>
                    <td>{{$ele->prezzo}}€</td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>
</div>
</body>
</html>
