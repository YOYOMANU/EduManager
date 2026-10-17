@extends("base")
@section("title",$etudiant->exists ? "Modifier un etudiant" : "Creer un etudiant")
@section("content")



    <main class="container mx-auto max-w-2xl px-4 py-10">

        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">

                <h1 class="text-2xl font-bold mb-2">
                     {{$etudiant->exists ? "Modifier un etudiant" : "Creer un etudiant"}}
                </h1>

                <p class="text-base-content/70 mb-4">
                    Renseigne les informations de l'étudiant.
                </p>

                @if ($errors->any())
                    <div class="alert alert-error mb-4">
                        <div>
                            <strong>Vérifie les informations :</strong>
                            <ul class="list-disc ml-5">
                                @foreach ($errors->all() as $erreur)
                                    <li>{{ $erreur }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                <form action="{{ $etudiant->exists ? route('etudiants.update', ['etudiant' => $etudiant]) : route('etudiants.store') }}"
                      method="POST">

                    @csrf
@if ($etudiant->exists)
                        @method('PUT')
                    @endif
                    <div class="form-control mb-4">
                        <label for="nom" class="label">
                            <span class="label-text">Nom</span>
                        </label>
                        <input
                            id="nom"
                            name="nom"
                            type="text"
                            class="input input-bordered w-full"
                            value="{{ old('nom', $etudiant->nom) }}"
                            required
                        >
                    </div>

                    <div class="form-control mb-4">
                        <label for="prenom" class="label">
                            <span class="label-text">Prénom</span>
                        </label>
                        <input
                            id="prenom"
                            name="prenom"
                            type="text"
                            class="input input-bordered w-full"
                           value="{{ old('prenom', $etudiant->prenom) }}"
                            required
                        >
                    </div>

                    <div class="form-control mb-4">
                        <label for="filiere" class="label">
                            <span class="label-text">Filière</span>
                        </label>
                        <input
                            id="filiere"
                            name="filiere"
                            type="text"
                            class="input input-bordered w-full"
                            placeholder="Ex. Informatique"
                            value="{{ old('filiere', $etudiant->filiere) }}"
                            required
                        >
                    </div>

                    <div class="form-control mb-4">
                        <label for="niveau" class="label">
                            <span class="label-text">Niveau</span>
                        </label>
                        <select
                            id="niveau"
                            name="niveau"
                            class="select select-bordered w-full"
                            required
                        >
                            <option value="">Choisir un niveau</option>
                            @foreach (['L1', 'L2', 'L3', 'M1', 'M2'] as $niveau)
                                <option
                                    value="{{ $niveau }}"
                                    @selected(old('niveau',$etudiant->niveau) === $niveau)
                                >
                                    {{ $niveau }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-control mb-6">
                        <label for="email" class="label">
                            <span class="label-text">Adresse e-mail</span>
                        </label>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            class="input input-bordered w-full"
                            value="{{ old('email', $etudiant->email) }}"
                            required
                        >
                    </div>

                    <div class="flex flex-wrap gap-3">
                        <button type="submit" class="btn btn-primary">
                           {{$etudiant->exists ? "Modifier un etudiant" : "Creer un etudiant"}}
                        </button>

                        <a href="{{ route('etudiants.index') }}"
                           class="btn btn-ghost">
                            Annuler
                        </a>
                    </div>

                </form>

            </div>
        </div>

    </main>

@endsection