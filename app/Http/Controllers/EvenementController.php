<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Evenement::all();
        return view('admin.evenement',compact('events'));
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
        //     'titre' => 'required',
        //     'description' => 'required',
        //     'date_debut' => 'required',
        //     'date_fin' => 'required',
        //     'lieu' => 'required',
        //     'organisateur' => 'required',
        //     'type' => 'required',
        //     'statut' => 'required',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }
        $event = new Evenement;
        $event->titre = $request->titre;
        $event->description = $request->description;
        $event->date_debut = $request->date_debut;
        $event->date_fin = $request->date_fin;
        $event->lieu = $request->lieu;
        $event->organisateur = $request->organisateur;
        $event->type = $request->type;
        $event->statut = $request->statut;
        $event->image = 'images/'.$imageName;
        $event->save();
        return redirect()->route('evenement')->with('success', 'Ajout réussit.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Evenement $evenement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evenement $evenement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evenement $evenement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $event = Evenement::find($id);
        if ($event->image != 'noimage.jpg') {
            Storage::delete('public/images/'.$event->photo);
        }
        $event->delete();
        return redirect()->route('evenement')->with('success', 'suppression  réussit.');
    }
}
