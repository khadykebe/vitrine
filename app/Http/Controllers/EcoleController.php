<?php

namespace App\Http\Controllers;

use App\Models\Ecole;
use Illuminate\Http\Request;

class EcoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ecole = new Ecole;
        $ecole->NbreClasse = $request->NbreClasse;
        $ecole->NbreEleve = $request->NbreEleve;
        $ecole->NbreProf = $request->NbreProf;
        $ecole->historique = $request->historique;
        $ecole->presentation = $request->presentation;
        $ecole->MotDirecteur = $request->MotDirecteur;
        $ecole->save();
        return redirect()->route('info')->with('success', 'Ajout réussit.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ecole $ecole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ecole $ecole)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ecole $ecole)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ecole $ecole)
    {
        //
    }
}
