<?php

namespace App\Http\Controllers;

use App\Models\Description;
use App\Models\Ecole;
use Illuminate\Http\Request;

class DescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $descrips = Description::all();
        $ecoles = Ecole::all();
        return view('admin.info',compact('descrips','ecoles'));

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
        // $request->validate([
        //     'nom' => 'required',
        //     'adresse' => 'required',
        //     'address' => 'required',
        //     'email' => 'required|email',
        // ]);
        $descrip = new Description;
        $descrip->nom = $request->nom;
        $descrip->adresse = $request->adresse;
        $descrip->email = $request->email;
        $descrip->historique = $request->historique;
        $descrip->mission = $request->mission;
        $descrip->valeur = $request->valeur;
        $descrip->save();
        return redirect()->route('info')->with('success', 'Ajout réussit.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Description $description)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Description $description)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Description $description)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Description $description)
    {
        //
    }
}
