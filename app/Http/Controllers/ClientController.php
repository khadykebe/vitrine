<?php

namespace App\Http\Controllers;
use App\Models\Description;
use App\Models\Ecole;
use App\Models\Scolaire;
use App\Models\Partenaire;
use App\Models\Programme;
use App\Models\Image;
use App\Models\Evenement;
use App\Models\Activite;


use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $desctiptions = Description::all();
        $ecoles = Ecole::all();
        $scolaires = Scolaire::all();
        $partenaires = Partenaire::all();
        $programmes = Programme::all();
        $images = Image::all();
        $events = Evenement::all();
        $Activites = Activite::all();
        return view('welcome',compact('desctiptions','ecoles','scolaires','partenaires','programmes','images','events','Activites'));
    }



    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->string,
            'message' => $request->message,
        ];

        Mail::to('kebekhady5822@gmail.com')->send(new mailContact($details));
        return "bonjour";
        // return back()->with('success', 'Your message has been sent successfully!');
    }
}
