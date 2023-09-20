<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body>

    @include('layouts\headercontent') 

    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                @yield('content')

                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>


        

