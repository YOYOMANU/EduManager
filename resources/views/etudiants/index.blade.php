@extends("base")
@section("title","liste-etudiants")
@section("content")
<div class="navbar bg-base-300 shadow-lg">
        <div class="flex-1">
            <a href="{{ route('etudiants.index') }}"
               class="btn btn-ghost text-xl">
                🌲 EduManager
            </a>
        </div>

        <div class="flex-none">
            <span class="badge badge-success">Gestion des étudiants</span>
        </div>
    </div>

    <main class="container mx-auto px-4 py-10">

        <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

            <div>
                <h1 class="text-3xl font-bold text-base-content">
                    Liste des étudiants
                </h1>

                <p class="mt-2 text-base-content/70">
                    Consulte et gère les étudiants inscrits.
                </p>
            </div>

            <a href="{{ route('etudiants.create') }}"
               class="btn btn-primary">
                + Ajouter un étudiant
            </a>

        </div>

        <div class="stats stats-vertical mb-8 shadow sm:stats-horizontal">

            <div class="stat">
                <div class="stat-title">Nombre d'étudiants</div>

                <div class="stat-value text-primary">
                    {{ $etudiants->count() }}
                </div>

                <div class="stat-desc">
                    Étudiants enregistrés
                </div>
            </div>

        </div>

        <div class="card border border-base-300 bg-base-100 shadow-xl">

            <div class="card-body p-0">

                <div class="overflow-x-auto">

                    <table class="table table-zebra">

                        <thead>
                            <tr class="bg-base-300 text-base-content">
                                <th>#</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Filière</th>
                                <th>Niveau</th>
                                <th>E-mail</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse ($etudiants as $etudiant)

                                <tr>
                                    <th>{{ $etudiant->id }}</th>

                                    <td class="font-semibold">
                                        {{ $etudiant->nom }}
                                    </td>

                                    <td>{{ $etudiant->prenom }}</td>

                                    <td>
                                        <span class="badge badge-outline">
                                            {{ $etudiant->filiere }}
                                        </span>
                                    </td>

                                    <td>
                                        <span class="badge badge-success">
                                            {{ $etudiant->niveau }}
                                        </span>
                                    </td>

                                    <td>{{ $etudiant->email }}</td>
                                </tr>

                            @empty

                                <tr>
                                    <td colspan="6" class="py-10 text-center">
                                        <p class="text-lg font-semibold">
                                            Aucun étudiant enregistré.
                                        </p>

                                        <p class="mt-2 text-base-content/70">
                                            Ajoute un étudiant pour commencer.
                                        </p>
                                    </td>
                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

        <footer class="mt-8 text-center text-sm text-base-content/60">
            © {{ date('Y') }} EduManager — Gestion des étudiants
        </footer>

    </main>
@endsection

