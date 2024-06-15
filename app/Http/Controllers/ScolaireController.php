<?php

namespace App\Http\Controllers;
use App\Models\Scolaire;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ScolaireController extends Controller
{
    public function scolaire(){
        $scolaires = Scolaire::all();
        return view('admin.scolaire',compact('scolaires'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $scolaire = new Scolaire;
        $scolaire->nom = $request->nom;
        $scolaire->description = $request->description;
        $scolaire->save();
        return redirect()->route('scolaire')->with('success', ' creer avec  success.');
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        DB::table('scolaires')->whereId($id)->update([
            "nom" => $request->nom,
            "description" => $request->description,
        ]);
        return redirect()->route('scolaire')->with('success', 'mise a jour avec success.');
    }

    public function destroy($id)
    {
        Scolaire::find($id)->delete();


        return redirect()->route('scolaire')->with('success', 'supprimer avec success.');
    }
}
