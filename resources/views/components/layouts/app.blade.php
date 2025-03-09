<div>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
        <script type="module" src="https://cdn.jsdelivr.net/npm/three/examples/jsm/loaders/GLTFLoader.js"></script>
        <style>
            canvas { width: 100%; height: 100vh; display: block; }
        </style>
        
        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body class="min-h-screen flex flex-col bg-gray-100 text-gray-900">

        <!-- Header -->
        @include("components.layoutPart.header")
    
        <!-- Main Content -->
        <main class="flex-grow container mx-auto p-6">
            {{ $slot }}
        </main>
    
        <!-- Footer -->
        @include("components.layoutPart.footer")

        @livewireScripts    
    </body>
    {{-- <body class="flex items-center">
        
        @include("components.layoutPart.header")
        <main class="bg-green-400 flex items-center">
            {{ $slot }}
        </main>
        @include("components.layoutPart.footer")
        
        @livewireScripts
    </body> --}}
    </html>
</div>