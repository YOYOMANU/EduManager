@extends('base')

@section('title', 'Accueil')

@section('content')
    {{-- Hero --}}
    <section class="min-h-[calc(100vh-5rem)]">
        <div class="mx-auto grid max-w-7xl items-center gap-12 px-4 py-16 lg:grid-cols-2 lg:py-24">

            {{-- Texte --}}
            <div>
                <div class="badge badge-outline badge-primary mb-6">
                    Gestion académique
                </div>

                <h1 class="text-5xl font-bold leading-tight tracking-tight md:text-6xl lg:text-7xl">
                    Toute la vie académique,
                    <span class="text-primary">au même endroit.</span>
                </h1>

                <p class="mt-6 max-w-2xl text-lg leading-relaxed text-base-content/70">
                    Inscriptions, notes, emplois du temps, absences et documents :
                    centralisez la gestion de vos étudiants dans une plateforme
                    simple, rapide et sécurisée.
                </p>

                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="{{ url('/login') }}" class="btn btn-primary">
                        Se connecter
                    </a>

                    <a href="#fonctionnalites" class="btn btn-outline">
                        Découvrir les fonctionnalités
                    </a>
                </div>

                <div class="mt-8 flex flex-wrap gap-6 text-sm text-base-content/60">
                    <span>✓ Gestion centralisée</span>
                    <span>✓ Accès sécurisé</span>
                    <span>✓ Interface responsive</span>
                </div>
            </div>

            {{-- Relevé de notes --}}
            <div class="relative">
                <div class="card border border-base-300 bg-base-100 shadow-2xl lg:rotate-2">
                    <div class="card-body p-6 md:p-8">

                        <div class="flex items-center justify-between border-b border-primary pb-4">
                            <div>
                                <h2 class="text-2xl font-bold">
                                    Relevé de notes
                                </h2>

                                <p class="text-sm text-base-content/60">
                                    Koffi Amani · Génie Logiciel L3
                                </p>
                            </div>

                            <span class="badge badge-primary">
                                Semestre 5
                            </span>
                        </div>

                        <div class="mt-4 space-y-1">

                            <div class="flex justify-between border-b border-base-300 py-4">
                                <span>Algorithmique avancée</span>
                                <strong>15,50</strong>
                            </div>

                            <div class="flex justify-between border-b border-base-300 py-4">
                                <span>Bases de données</span>
                                <strong>14,00</strong>
                            </div>

                            <div class="flex justify-between border-b border-base-300 py-4">
                                <span>Réseaux et sécurité</span>
                                <strong>16,25</strong>
                            </div>

                        </div>

                        <div class="mt-5 flex items-center justify-between">
                            <span class="text-base-content/60">
                                Moyenne générale
                            </span>

                            <span class="text-4xl font-bold text-primary">
                                15,25
                            </span>
                        </div>

                    </div>
                </div>

                {{-- Décoration --}}
                <div class="absolute -bottom-6 -left-6 -z-10 h-24 w-24 rounded-full bg-primary/20 blur-2xl"></div>
                <div class="absolute -right-6 -top-6 -z-10 h-32 w-32 rounded-full bg-secondary/20 blur-2xl"></div>
            </div>

        </div>
    </section>


    {{-- Statistiques --}}
    <section class="border-y border-base-300 bg-base-100">
        <div class="mx-auto grid max-w-7xl grid-cols-2 lg:grid-cols-4">

            <div class="border-base-300 p-8 lg:border-r">
                <strong class="block text-4xl font-bold text-primary">
                    {{ $stats['etudiants'] ?? '2 500+' }}
                </strong>

                <span class="text-sm text-base-content/60">
                    Étudiants gérés
                </span>
            </div>

            <div class="border-base-300 p-8 lg:border-r">
                <strong class="block text-4xl font-bold text-primary">
                    {{ $stats['enseignants'] ?? '120' }}
                </strong>

                <span class="text-sm text-base-content/60">
                    Enseignants actifs
                </span>
            </div>

            <div class="border-base-300 p-8 lg:border-r">
                <strong class="block text-4xl font-bold text-primary">
                    {{ $stats['bulletins'] ?? '98 %' }}
                </strong>

                <span class="text-sm text-base-content/60">
                    Bulletins générés sans erreur
                </span>
            </div>

            <div class="p-8">
                <strong class="block text-4xl font-bold text-primary">
                    24/7
                </strong>

                <span class="text-sm text-base-content/60">
                    Accès à vos données
                </span>
            </div>

        </div>
    </section>


    {{-- Fonctionnalités --}}
    <section id="fonctionnalites" class="py-24">
        <div class="mx-auto grid max-w-7xl gap-12 px-4 lg:grid-cols-[0.8fr_1.5fr]">

            <div>
                <div class="badge badge-primary badge-outline mb-5">
                    Fonctionnalités
                </div>

                <h2 class="text-4xl font-bold leading-tight md:text-5xl">
                    Tout ce dont votre établissement a besoin.
                </h2>

                <p class="mt-6 max-w-lg text-lg text-base-content/60">
                    Six modules reliés entre eux pour en finir avec
                    les fichiers dispersés et simplifier votre quotidien.
                </p>
            </div>

            <div class="divide-y divide-base-300 border-y border-base-300">

                <div class="grid gap-3 py-6 md:grid-cols-[220px_1fr]">
                    <h3 class="text-xl font-bold">
                        Gestion des étudiants
                    </h3>

                    <p class="text-base-content/60">
                        Dossiers complets, inscriptions, réinscriptions
                        et historique académique.
                    </p>
                </div>

                <div class="grid gap-3 py-6 md:grid-cols-[220px_1fr]">
                    <h3 class="text-xl font-bold">
                        Notes et bulletins
                    </h3>

                    <p class="text-base-content/60">
                        Saisie des notes, calcul automatique des moyennes
                        et génération des bulletins.
                    </p>
                </div>

                <div class="grid gap-3 py-6 md:grid-cols-[220px_1fr]">
                    <h3 class="text-xl font-bold">
                        Emplois du temps
                    </h3>

                    <p class="text-base-content/60">
                        Planning par filière, classe et enseignant,
                        avec une meilleure visibilité sur les horaires.
                    </p>
                </div>

                <div class="grid gap-3 py-6 md:grid-cols-[220px_1fr]">
                    <h3 class="text-xl font-bold">
                        Suivi des présences
                    </h3>

                    <p class="text-base-content/60">
                        Appel numérique et suivi des absences justifiées
                        ou non justifiées.
                    </p>
                </div>

                <div class="grid gap-3 py-6 md:grid-cols-[220px_1fr]">
                    <h3 class="text-xl font-bold">
                        Documents
                    </h3>

                    <p class="text-base-content/60">
                        Certificats de scolarité, relevés de notes
                        et attestations accessibles rapidement.
                    </p>
                </div>

                <div class="grid gap-3 py-6 md:grid-cols-[220px_1fr]">
                    <h3 class="text-xl font-bold">
                        Communication
                    </h3>

                    <p class="text-base-content/60">
                        Annonces, notifications et informations ciblées
                        par classe ou par filière.
                    </p>
                </div>

            </div>

        </div>
    </section>


    {{-- Profils --}}
    <section id="profils" class="bg-base-100 py-24">
        <div class="mx-auto max-w-7xl px-4">

            <div class="max-w-2xl">
                <div class="badge badge-primary badge-outline mb-5">
                    Pour chaque utilisateur
                </div>

                <h2 class="text-4xl font-bold md:text-5xl">
                    Un espace pour chaque profil.
                </h2>
            </div>

            <div class="mt-12 grid gap-6 md:grid-cols-3">

                <div class="card border border-base-300 bg-base-200">
                    <div class="card-body">
                        {{-- Étudiant --}}
                        <div class="mb-4 text-primary">
                            <i data-lucide="graduation-cap" class="h-8 w-8"></i>
                        </div>

                        <h3 class="card-title text-2xl">
                            Étudiant
                        </h3>

                        <p class="text-base-content/60">
                            Consultez vos notes, votre emploi du temps,
                            vos absences et vos documents depuis un seul espace.
                        </p>
                    </div>
                </div>

                <div class="card border border-base-300 bg-base-200">
                    <div class="card-body">
                        {{-- Enseignant --}}
                        <div class="mb-4 text-primary">
                            <i data-lucide="book-open" class="h-8 w-8"></i>
                        </div>


                        <h3 class="card-title text-2xl">
                            Enseignant
                        </h3>

                        <p class="text-base-content/60">
                            Saisissez vos notes, faites l'appel et suivez
                            la progression de vos classes.
                        </p>
                    </div>
                </div>

                <div class="card border border-base-300 bg-base-200">
                    <div class="card-body">
                        {{-- Administration --}}
                        <div class="mb-4 text-primary">
                            <i data-lucide="building-2" class="h-8 w-8"></i>
                        </div>

                        <h3 class="card-title text-2xl">
                            Administration
                        </h3>

                        <p class="text-base-content/60">
                            Pilotez les étudiants, enseignants, filières,
                            statistiques et données académiques.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- Étapes --}}
    <section class="py-24">
        <div class="mx-auto max-w-7xl px-4">

            <div class="max-w-2xl">
                <div class="badge badge-primary badge-outline mb-5">
                    Mise en place
                </div>

                <h2 class="text-4xl font-bold md:text-5xl">
                    Opérationnel en quatre étapes.
                </h2>
            </div>

            <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-4">

                @foreach ([['01', 'Créez votre établissement', 'Configurez vos filières, niveaux et années académiques.'], ['02', 'Importez vos étudiants', 'Ajoutez vos étudiants par fichier ou directement depuis la plateforme.'], ['03', 'Invitez votre équipe', 'Attribuez à chaque utilisateur les accès correspondant à son rôle.'], ['04', 'Pilotez au quotidien', 'Centralisez les informations et suivez votre établissement.']] as [$numero, $titre, $description])
                    <div class="border-t-2 border-primary pt-5">
                        <span class="text-4xl font-bold text-primary">
                            {{ $numero }}
                        </span>

                        <h3 class="mt-5 text-xl font-bold">
                            {{ $titre }}
                        </h3>

                        <p class="mt-3 text-base-content/60">
                            {{ $description }}
                        </p>
                    </div>
                @endforeach

            </div>
        </div>
    </section>


    {{-- Atouts --}}
    <section class="bg-base-100 py-24">
        <div class="mx-auto grid max-w-7xl gap-16 px-4 lg:grid-cols-2">

            <div>
                <div class="badge badge-primary badge-outline mb-5">
                    Pourquoi nous ?
                </div>

                <h2 class="text-4xl font-bold md:text-5xl">
                    Pensée pour le terrain.
                </h2>

                <div class="mt-8 space-y-4">

                    <div class="border-t border-base-300 py-4">
                        <strong>Sécurisée.</strong>
                        <span class="text-base-content/60">
                            Accès par rôles et permissions.
                        </span>
                    </div>

                    <div class="border-t border-base-300 py-4">
                        <strong>Rapide.</strong>
                        <span class="text-base-content/60">
                            Une gestion centralisée au lieu de plusieurs fichiers.
                        </span>
                    </div>

                    <div class="border-t border-base-300 py-4">
                        <strong>Fiable.</strong>
                        <span class="text-base-content/60">
                            Les calculs académiques sont automatisés.
                        </span>
                    </div>

                    <div class="border-y border-base-300 py-4">
                        <strong>Accessible.</strong>
                        <span class="text-base-content/60">
                            Une interface adaptée aux ordinateurs, tablettes et téléphones.
                        </span>
                    </div>

                </div>
            </div>

            <div class="flex items-center">
                <div class="border-l-4 border-primary pl-8">
                    <blockquote class="text-3xl font-semibold leading-tight md:text-4xl">
                        « La gestion académique devient plus simple
                        lorsque toutes les informations sont réunies
                        au même endroit. »
                    </blockquote>

                    <p class="mt-6 text-base-content/60">
                        Une approche pensée pour simplifier le travail
                        quotidien des établissements.
                    </p>
                </div>
            </div>

        </div>
    </section>


    {{-- FAQ --}}
    <section id="faq" class="py-24">
        <div class="mx-auto max-w-4xl px-4">

            <div class="text-center">
                <div class="badge badge-primary badge-outline mb-5">
                    FAQ
                </div>

                <h2 class="text-4xl font-bold md:text-5xl">
                    Questions fréquentes.
                </h2>
            </div>

            <div class="mt-10">

                <div class="collapse-arrow collapse border-b border-base-300 rounded-none">
                    <input type="checkbox" />

                    <div class="collapse-title text-lg font-semibold">
                        Les données sont-elles sécurisées ?
                    </div>

                    <div class="collapse-content">
                        <p class="text-base-content/60">
                            Chaque utilisateur accède uniquement aux fonctionnalités
                            autorisées par son rôle et ses permissions.
                        </p>
                    </div>
                </div>

                <div class="collapse-arrow collapse border-b border-base-300 rounded-none">
                    <input type="checkbox" />

                    <div class="collapse-title text-lg font-semibold">
                        Peut-on importer les étudiants existants ?
                    </div>

                    <div class="collapse-content">
                        <p class="text-base-content/60">
                            Oui. Les étudiants peuvent être ajoutés directement
                            depuis la plateforme ou via un fichier compatible.
                        </p>
                    </div>
                </div>

                <div class="collapse-arrow collapse border-b border-base-300 rounded-none">
                    <input type="checkbox" />

                    <div class="collapse-title text-lg font-semibold">
                        Les étudiants peuvent-ils utiliser leur téléphone ?
                    </div>

                    <div class="collapse-content">
                        <p class="text-base-content/60">
                            Oui. L'interface est responsive et peut être utilisée
                            depuis un ordinateur, une tablette ou un smartphone.
                        </p>
                    </div>
                </div>

                <div class="collapse-arrow collapse border-b border-base-300 rounded-none">
                    <input type="checkbox" />

                    <div class="collapse-title text-lg font-semibold">
                        Peut-on personnaliser les documents ?
                    </div>

                    <div class="collapse-content">
                        <p class="text-base-content/60">
                            Les documents peuvent être adaptés aux informations
                            et à l'identité de votre établissement.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- CTA --}}
    <section class="border-t border-base-300 bg-base-100 py-24">
        <div class="mx-auto max-w-4xl px-4 text-center">

            <h2 class="text-4xl font-bold md:text-6xl">
                Prêt à simplifier la gestion de votre établissement ?
            </h2>

            <p class="mx-auto mt-6 max-w-2xl text-lg text-base-content/60">
                Centralisez vos données académiques et facilitez
                le travail quotidien de votre établissement.
            </p>

            <div class="mt-8 flex justify-center gap-3">
                <a href="{{ url('/login') }}" class="btn btn-primary">
                    Se connecter
                </a>

                <a href="{{ url('/contact') }}" class="btn btn-outline">
                    Demander une démo
                </a>
            </div>

        </div>
    </section>


    {{-- Footer --}}
    <footer class="footer footer-horizontal bg-base-200 px-4 py-12">
        <div class="mx-auto grid w-full max-w-7xl gap-10 md:grid-cols-4">

            <div class="md:col-span-2">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-primary">
                    {{ config('app.name') }}
                </a>

                <p class="mt-3 max-w-md text-base-content/60">
                    La plateforme de gestion académique pensée pour
                    simplifier le quotidien des établissements.
                </p>
            </div>

            <nav>
                <h6 class="footer-title">Navigation</h6>

                <a href="#fonctionnalites" class="link link-hover">
                    Fonctionnalités
                </a>

                <a href="#profils" class="link link-hover">
                    Profils
                </a>

                <a href="#faq" class="link link-hover">
                    FAQ
                </a>
            </nav>

            <nav>
                <h6 class="footer-title">Compte</h6>

                <a href="{{ url('/login') }}" class="link link-hover">
                    Se connecter
                </a>

                <a href="{{ url('/contact') }}" class="link link-hover">
                    Contact
                </a>
            </nav>

        </div>
    </footer>

    <div class="bg-base-200 px-4 pb-8 text-center text-sm text-base-content/50">
        © {{ date('Y') }} {{ config('app.name') }}. Tous droits réservés.
    </div>

@endsection
