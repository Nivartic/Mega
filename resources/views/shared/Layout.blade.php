<!DOCTYPE html>
<html lang="es" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MEGA Drivers | Reclutamiento de Motorizados Independientes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .mega-arrow {
            width: 30px;
            height: 30px;
            position: relative;
            display: inline-block;
            vertical-align: middle;
            margin-right: 8px;
        }

        .mega-arrow::before,
        .mega-arrow::after {
            content: '';
            position: absolute;
            background-color: #00BFFF;
            /* Celeste */
            width: 2px;
            height: 15px;
        }

        .mega-arrow::before {
            transform: rotate(45deg);
            left: 5px;
            top: 7px;
        }

        .mega-arrow::after {
            transform: rotate(-45deg);
            left: 5px;
            top: 15px;
        }

        .section-fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .section-fade-in.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
    @yield('styles')
</head>

<body class="bg-gray-900 text-white">

    <header class="bg-black/80 backdrop-blur-lg fixed top-0 left-0 right-0 z-50 border-b border-gray-700">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <a href="{{ route('inicio') }}" class="text-2xl font-bold text-white flex items-center">
                    <span class="mega-arrow"></span> MEGA Drivers
                </a>
                <nav class="hidden md:flex space-x-8">
                    <a href="{{ route('inicio') }}#beneficios"
                        class="text-gray-300 hover:text-white transition-colors">Beneficios</a>
                    <a href="{{ route('inicio') }}#registro"
                        class="text-gray-300 hover:text-white transition-colors">Registro</a>
                    <a href="{{ route('login') }}" class="text-gray-300 hover:text-white transition-colors">Iniciar
                        Sesión</a>
                    <a href="{{ route('inicio') }}#faq" class="text-gray-300 hover:text-white transition-colors">FAQ</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="pt-16">
        @yield('content')
    </main>

    @yield('scripts')
</body>

</html>