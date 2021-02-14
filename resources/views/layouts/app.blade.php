<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles
        @livewireScripts
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">

        <div class="min-h-screen bg-gray-100">
            <!-- Page Content -->
            <main>
                <div class="md:flex flex-col md:flex-row md:min-h-screen  ">
                    @include('layouts.sidebar')
                    <section class="px-2  py-4 md:px-8  w-full">
                        {{ $slot }}
                    </section>
                    
                </div>
                
               
            </main>
        </div>

        @stack('modals')

        
    </body>
</html>
