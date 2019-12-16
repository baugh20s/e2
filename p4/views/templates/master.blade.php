<!doctype html>
<html lang='en'>
<head>

    <title>@yield('title', $app->config('app.name'))</title>

    <meta charset='utf-8'>

    <link rel='shortcut icon' href='/favicon.ico'>

    <!-- Bootstrap -->
    <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <!-- css -->
    <link href='/css/app.css' rel='stylesheet'>

    @yield('head')

</head>
<body>
        <header>
            <h1><a href='/' id='logo'>
            {{ $app->config('app.name') }}: Rock, Paper, Scissors</a>
            </h1>
        </header>

        <main>
            <p><a href='/game-history'>view past games</a></p>
            @yield('content')
        </main>

        @yield('body')
</body>
</html>