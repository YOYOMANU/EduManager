<!DOCTYPE html>
<html lang="fr" data-theme="forest" class="scroll-smooth scroll-pt-20">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/lucide@latest" defer></script>

    <style>
        .menu a,
        .menu summary {
            transition-duration: 75ms;
        }
    </style>
</head>

<body class="min-h-screen bg-base-200">

    <header class="sticky top-0 z-30 border-b border-base-300 bg-base-100/80 backdrop-blur">
        <nav class="navbar mx-auto max-w-7xl px-4">

            {{-- Gauche : menu mobile + marque --}}
            <div class="navbar-start gap-1">
                <div class="dropdown lg:hidden">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-square" aria-label="Menu">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h8" />
                        </svg>
                    </div>

                    <ul tabindex="0"
                        class="menu dropdown-content z-10 mt-3 w-60 rounded-box border border-base-300 bg-base-100 p-2 shadow-lg">
                        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'bg-primary text-primary-content font-semibold hover:bg-primary' : '' }}">Accueil</a></li>
                        <li><a href="{{ route("etudiants.index") }}">Étudiants</a></li>
                        <li><a href="#">Enseignants</a></li>

                        <li class="menu-title mt-2">Découvrir</li>
                        <li><a href="#fonctionnalites">Fonctionnalités</a></li>
                        <li><a href="#profils">Profils</a></li>
                        <li><a href="#faq">FAQ</a></li>

                        <li class="mt-2 border-t border-base-300 pt-2">
                            <a href="#">Demander une démo</a>
                        </li>
                    </ul>
                </div>

                <a href="{{ route('home') }}" class="flex items-center gap-2 px-1">
                    <img src="{{ asset('logo.png') }}" alt="logo" class="h-9 w-9 rounded-full" />
                    <span class="text-xl font-bold tracking-tight text-primary">
                        {{ config('app.name') }}
                    </span>
                </a>
            </div>

            {{-- Centre : menu desktop --}}
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal items-center gap-1 px-1">
                    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'bg-primary text-primary-content font-semibold hover:bg-primary' : '' }}">Accueil</a></li>
                    <li><a href="{{ route("etudiants.index") }}" class="{{ request()->routeIs('etudiants.*') ? 'bg-primary text-primary-content font-semibold hover:bg-primary' : '' }}"">Étudiants</a></li>
                    <li><a href="#">Enseignants</a></li>

                    <li>
                        <details>
                            <summary>Découvrir</summary>
                            <ul class="w-48 rounded-box border border-base-300 bg-base-100 p-2 shadow-lg">
                                <li><a href="{{ route('home') }}#fonctionnalites">Fonctionnalités</a></li>
                                <li><a href="{{ route('home') }}#profils">Profils</a></li>
                                <li><a href="{{ route('home') }}#faq">FAQ</a></li>
                            </ul>
                        </details>
                    </li>
                </ul>
            </div>

            {{-- Droite : actions --}}
            <div class="navbar-end gap-2">
                <a href="#" class="btn btn-ghost hidden md:inline-flex">
                    Demander une démo
                </a>
                <a href="#" class="btn btn-primary">
                    <i data-lucide="log-in" class="h-4 w-4"></i>
                    Se connecter
                </a>
            </div>

        </nav>
    </header>

    <main class="container mx-auto px-4 py-6">
        @if (session('success'))
            <div role="alert" class="alert alert-success mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        @yield('content')
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            lucide.createIcons();
        });
    </script>
</body>

</html>