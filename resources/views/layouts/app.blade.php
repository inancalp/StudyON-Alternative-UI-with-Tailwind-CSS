<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Flowbite -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    </head>
    <body>

        <div class="max-w-8xl m-auto">
            <div class="flex flex-col space-y-2 min-h-screen">
                {{-- Navigation Bar --}}
                @include('layouts.navigation')
                <main
                    class="grow-[1] flex flex-col items-center justify-center py-4 space-y-4 border border-black shadow-xl"
                    style="background-image:
                    linear-gradient(rgba(245, 245, 245, 0.9), rgba(245, 245, 245, 0.9)),
                    url(/images/logo2.svg);
                    background-position: 52% 0;
                    background-attachment: fixed;" >
                        {{-- Page Content --}}
                        {{ $slot }}
                </main>
                @include('layouts.footer')
            </div>
        </div>
    </body>
</html>
