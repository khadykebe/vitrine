<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Image::all();
        return view('admin.image',compact('images'));
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
        $request->validate([
            'titre'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }
        $image1 = new Image; // Remplacez ModelName par le nom de votre modèle
        $image1->titre = $request->titre;
        $image1->image = 'images/'.$imageName;
        $image1->save();
        return redirect()->route('allImage')->with('success', 'Ajout réussit.');


    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $image = Image::findOrFail($id);
        $image->delete();

        return redirect()->route('allImage')->with('success', 'supp réussit.');

    }
}
