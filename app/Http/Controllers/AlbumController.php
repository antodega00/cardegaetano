<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Photo;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            "title"=> "required",
        ]);

        Album::create([
            'title' => $request->title,
        ]);

        return redirect()->route('dashboard')->with('success', 'Album creato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $album = Album::findOrFail($id);
        $images = Photo::where('album_id', $id)->get();
        return view('foto', compact('album', 'images'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $album = Album::findOrFail($id);

        $album->delete();

        return redirect()->back()->with('success', 'Album eliminato con successo.');
    }
}
