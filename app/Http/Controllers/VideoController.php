<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::all();
         return view('admin.video',compact('videos'));
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
            'video' => 'required|mimes:mp4,avi,mov,wmv|max:20480',
        ]);

        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoName = time().'.'.$video->getClientOriginalExtension();
            $video->move(public_path('videos'), $videoName);

            $video1 = new Video; // Remplacez ModelName par le nom de votre modèle
            $video1->titre= $request->titre;
            $video1->video_path = 'videos/'.$videoName;
            $video1->save();

            return redirect()->back()->with('success', 'Video uploaded successfully.');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        //
    }
}
