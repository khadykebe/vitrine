<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Activite;
use App\Models\Contact;
use App\Models\Evenement;
use App\Models\Image;
use App\Models\Video;
use App\Models\Ecole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $users = User::all();
            $activites = Activite::all();
            $contacts = Contact::all();
            $events = Evenement::all();
            $images = Image::all();
            $videos = Video::all();
            return view('admin',compact('users','activites','contacts','events','images','videos'));
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user != null && Hash::check($request->password, $user->password)) {
            $infos = Ecole::all();
            return view('admin.index',compact('infos'));

        }
        return back()->with( ["message" => "Email ou mot de password incorrect."]);
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
            'nom'=> 'required',
            'prenom'=> 'required',
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'specialite'=> 'required',
            'email'=> 'required|email',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }

        $user1 = new User;
        $user1->nom = $request->nom;
        $user1->prenom = $request->prenom;
        $user1->image = 'images/'.$imageName;
        $user1->specialite = $request->specialite;
        $user1->email = $request->email;
        $user1->save();
        return redirect()->back()->with('success', 'Ajout réussit.');

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        if ($student->photo != 'noimage.jpg') {
            Storage::delete('public/photos/'.$student->photo);
        }
        $student->delete();
        return redirect()->back()->with('success', 'Student removed successfully');
    }
}
