<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test app</title>
    <script src="https://cdn.tailwindcss.com"></script>

    @livewireStyles
</head>
<body>





@livewireScripts
</body>

<div class="container m-4">
    <h1>{{ $post->title }}</h1>

    <livewire:comments :model="$post" />
</div>

</html>
