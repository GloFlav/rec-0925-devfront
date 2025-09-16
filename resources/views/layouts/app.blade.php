<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Test Front')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<body class="bg-gray-50 font-sans">
    <nav class="bg-white">
        <div class="container mx-auto px-15 md:px-30 py-3 md:py-0">
            <img src="{{ asset('images/centre-national.png') }}" alt="logo"
                class="h-[78px] w-[312px] object-contain" />
        </div>
        <div class="shadow-[0_3px_14px_rgba(0,0,0,0.16)] opacity-100 py-8">
            <div class="container mx-auto px-15 md:px-30">
                <p class="text-[#36578a] text-xl font-bold">
                    Test psychotechnique pour permis de conduire à Montgeron
                </p>
            </div>
        </div>
    </nav>

    @yield('content')
</body>

</html>