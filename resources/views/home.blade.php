<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Test app</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="./css/app.css">

        @livewireStyles
        <x-comments::styles />
    </head>
    <body>
        <div class="container m-4">
            <h1>{{ $post->title }}</h1>
            <livewire:comments :model="$post" />
        </div>

        @livewireScripts
        <x-comments::scripts />
        <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </body>
</html>
