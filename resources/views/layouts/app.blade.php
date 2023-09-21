<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    @vite('resources/css/app.css')
</head>

<body class="bg-[#F2F6FC]">
    <div class="flex space-x-2">
        {{-- sidebar --}}
        @include('layouts._partials.sidebar')
        <div class="w-full">
            @include('layouts._partials.header')
            <div class="w-full mt-5">
                @include('layouts._partials.alert')
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
