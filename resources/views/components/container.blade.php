<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>safetyfy</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-wrap">
        <x-navbar></x-navbar>
        <div class="grow border-l-2 h-screen">
            {{ $slot }}
        </div>
    </div>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>

</html>
