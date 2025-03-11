<!DOCTYPE html>
<html style="font-size: 16px" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="utf-8" />
        <meta name="keywords" content="We are a&nbsp;Web Design Agency, About Studio, 01, About Our Studio, 02, ​Custom Solutions, What Clients Say, 03, ​The Process For Success, Top web designing services, ​Looking to collaborate?
    Get in touch to find out how we can help." />
        <meta name="description" content="" />
        <title>Home</title>
        <link rel="stylesheet" href="{{ asset('template/nicepage.css') }}" media="screen" />
        <link rel="stylesheet" href="{{ asset('template/index.css') }}" media="screen" />
        <script class="u-script" type="text/javascript" src="{{ asset('js/template/jquery.js') }}" defer></script>
        <script class="u-script" type="text/javascript" src="{{ asset('js/template/nicepage.js') }}" defer></script>
        <meta name="generator" content="Nicepage 7.5.2, nicepage.com" />
        <meta name="referrer" content="origin" />

        <script type="application/ld+json">
            {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "logo": "{{ asset('images/default-logo.png') }}"
        }
        </script>
        <meta name="theme-color" content="#478ac9" />
        <meta property="og:title" content="Home" />
        <meta property="og:type" content="website" />
        <meta data-intl-tel-input-cdn-path="intlTelInput/" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link id="u-theme-google-font" rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" />
        <link id="u-page-google-font" rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Roboto+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Oswald:200,300,400,500,600,700|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" />

        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body class="u-body u-xl-mode">
        <!-- Preload Screen -->
        @include('components.preloader')

        <!-- Header -->
        @include("components.layoutPart.header")

        <!-- Main Content -->
        <main>
            {{ $slot }}
        </main>

        <!-- Footer -->
        @include("components.layoutPart.footer")

        @livewireScripts
    </body>
    {{-- <body class="u-body u-xl-mode">
        <!-- Header -->
        @include("components.layoutPart.header")

        <!-- Main Content -->
        <main>
            {{ $slot }}
        </main>

        <!-- Footer -->
        @include("components.layoutPart.footer")

        @livewireScripts
    </body> --}}
</html>
