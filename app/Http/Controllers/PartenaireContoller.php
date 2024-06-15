<?php

namespace App\Http\Controllers;
use App\Models\Partenaire;

use Illuminate\Http\Request;

class PartenaireContoller extends Controller
{

    public function partenaire(){
        $partenaires = Partenaire::all();
        return view('admin.partenaire',compact('partenaires'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }
        $partenaire = new Partenaire;
        $partenaire->logo = 'images/'.$imageName;
        $partenaire->save();

        return redirect()->route('partenaire')->with('success', 'ajouter avec success.');
    }


    public function destroy($id)
    {
        Partenaire::find($id)->delete();
        return redirect()->route('partenaire')->with('success', 'Supprimer avec success.');
    }
}
