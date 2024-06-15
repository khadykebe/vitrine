<?php

namespace App\Http\Controllers;
use App\Models\Programme;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
    public function programme(){
        $programmes = Programme::all();
        return view('admin.programme',compact('programmes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        $prog = new Programme;
        $prog->nom = $request->nom;
        $prog->description = $request->description;
        $prog->save();
        return redirect()->route('programme')->with('success', 'Ajout réussi .');
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        DB::table('programmes')->whereId($id)->update([
            "nom" => $request->nom,
            "description" => $request->description,
        ]);
        return redirect()->route('programme')->with('success', 'mise a jour avec success.');
    }

    public function destroy($id)
    {
        Programme::find($id)->delete();
        return redirect()->route('programme')->with('success', 'supprimer avec success.');
    }
}
