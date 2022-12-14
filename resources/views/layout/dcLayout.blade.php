<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Comic</title>
</head>


<body>
    @include('parts.header')

    <main>
        @yield('myContent')   
    </main>
    
    @include('parts.footer')
</body>
</html>