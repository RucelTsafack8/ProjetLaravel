<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="Projet_laravel\resources\sass\app.scss">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="container">
        <div class="relative">
           <h1 class="text-info text-uppercase">Initiation Laravel</h1>
           <h4 class="text-center text-uppercase"> il est a present <?= date('h:i:s A')?>.</h4>
           <h4  class="text-center text-capitalize"> il est a present {{date('h:i:s A')}}....et il fait du beau temps ici au pays</h4>
        </div>
    </body>
</html>
