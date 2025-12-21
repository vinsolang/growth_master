<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Font Family --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/logo.png') }}">
    <title>@yield('title')</title>
    <style>
        body {
            @font-face {
                font-family: "Sofia Pro";
                src: url("/fonts/sofia-pro.woff2") format("woff2"),
                    url("/fonts/sofia-pro.woff") format("woff");
                font-weight: 400;
                font-style: normal;
            }
        }
    </style>
</head>

<body class="font-sofia">
    <main style="box-sizing: border-box;" class=" mx-auto overflow-hidden">
        @yield('content')
    </main>
</body>

</html>
