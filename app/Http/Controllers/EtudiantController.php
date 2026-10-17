<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    /**
     * Afficher la liste des étudiants.
     */
    public function index(): View
    {
        $etudiants = Etudiant::orderBy('nom')->get();

        return view('etudiants.index', [
            'etudiants' => $etudiants
        ]);
    }

    /**
     * Afficher le formulaire d'ajout.
     */
    public function create(): View
    {
        $etudiant = new Etudiant();
        return view('etudiants.create',[
            'etudiant' => $etudiant
        ]);
    }

    /**
     * Enregistrer un nouvel étudiant.
     */
    public function store(Request $request): RedirectResponse
    {
        $donnees = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'filiere' => 'required|string|max:255',
            'niveau' => 'required|string|max:50',
            'email' => 'required|email|max:255|unique:etudiants,email',
        ]);

        Etudiant::create($donnees);

        return redirect()
            ->route('etudiants.index')
            ->with('success', 'Étudiant ajouté avec succès !');
    }

    /**
     * Afficher un étudiant.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Afficher le formulaire de modification.
     */
    public function edit(Etudiant $etudiant)
    {
         return view('etudiants.create',[
            'etudiant' => $etudiant
        ]);
    }

    /**
     * Mettre à jour un étudiant.
     */
    public function update(Request $request, Etudiant $etudiant)
    {
         $donnees = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'filiere' => 'required|string|max:255',
            'niveau' => 'required|string|max:50',
            'email' => 'required|email|max:255',
        ]);
       $etudiant->update($donnees);
       return redirect()
            ->route('etudiants.index')
            ->with('success', 'Étudiant modifié avec succès !');
    }

    /**
     * Supprimer un étudiant.
     */
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        return redirect()
            ->route('etudiants.index')
            ->with('success', 'Étudiant supprimé avec succès !');
    }
}