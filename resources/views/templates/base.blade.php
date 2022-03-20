<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dragons Roost</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="bg-drdarkbrown text-drwhite h-screen overflow-y-hidden flex flex-col">
    @include('templates.navbar.main')
    <div class="h-full p-2 overflow-y-scroll">
        @yield('content')
    </div>
</body>
</html>