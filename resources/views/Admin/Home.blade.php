<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<style>


    .button {
        text-decoration: none;
        float: left;
        padding: 12px;
        margin: 15px;
        color: white;
        width: 100px;
        background-color: green;


    }

    button:hover {
        width: 100px;
    }



    button{
        text-decoration: none;
    }

</style>
<h1> Welcome</h1>


<form method="get" action={{url("/regestration")}}>
    @csrf
<button class="button" > Regestration</button>
</form>
    <form method="get" action={{url("/admin/login")}}>
        @csrf
        <button class="button" > Login</button>

</form>
</body>

</html>
