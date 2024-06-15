<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activites = Activite::all();
        return view('admin.activite',compact('activites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'titre' => 'required',
        //     'description' => 'required',
        //     'date_debut' => 'required',
        //     'date_fin' => 'required',
        //     'lieu' => 'required',
        //     'organisateur' => 'required',
        //     'participation' => 'required',
        //     'objectifs' => 'required',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }
        $activite = new Activite;
        $activite->titre = $request->titre;
        $activite->description = $request->description;
        $activite->date = $request->date;
        $activite->heure= $request->heure;
        $activite->lieu = $request->lieu;
        $activite->organisateur = $request->organisateur;
        $activite->participation = $request->participation;
        $activite->objectifs = $request->objectifs;
        $activite->image = 'images/'.$imageName;
        $activite->save();
        return redirect()->route('activite')->with('success', 'Ajout réussit.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Activite $activite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Activite $activite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Activite $activite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $activite = Activite::find($id);
        if ($activite->image != 'noimage.jpg') {
            Storage::delete('public/images/'.$activite->photo);
        }
        $activite->delete();
        return redirect()->route('activite')->with('success', 'suppression  réussit.');
    }
}
