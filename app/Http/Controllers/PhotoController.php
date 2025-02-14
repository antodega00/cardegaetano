<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use Illuminate\Support\Facades\File;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos = Photo::all();

        return view('foto', ['photos'=> $photos]);
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
    public function store(Request $request, $id)
    {
        $request->validate([
            'photo' => 'required|image',
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');

            // Genera un nome unico per il file (ad es. usando il timestamp)
            $filename = time() . '.' . $file->getClientOriginalExtension();

            // Sposta il file nella cartella 'public/images'
            $file->move(public_path('images'), $filename);

            // Salva il percorso nel database
            Photo::create([
                'album_id' => $id,
                'path' => 'images/' . $filename,
                'name' => $request->input('name', 'default_name'),
            ]);

            return redirect()->back()->with('success', 'Foto caricata correttamente.');
        }

        return redirect()->back()->with('error', 'Nessuna foto caricata.');
    }

    // public function store(Request $request, $id)
    // {
    //     // Validazione del file
    //     $request->validate([
    //         'photo' => 'required|image',
    //     ]);

    //     // Controlla se il file è stato caricato
    //     if ($request->hasFile('photo')) {
    //         $file = $request->file('photo');

    //         $filename = time() . '.' . $file->getClientOriginalExtension();

    //         $file->move(public_path('images'), $filename);

    //         Photo::create([
    //             'album_id'    => $id,
    //             'path'        => 'images/' . $filename,
    //             'name'        => $request->input('name', 'default_name'),
    //         ]);

    //         return redirect()->back()->with('success', 'Foto caricata correttamente.');
    //     }

    //     return redirect()->back()->with('error', 'Nessuna foto caricata.');
    // }


    public function modificaFoto(Request $request){

        //eliminazione della foto
        $photo = Photo::findOrFail($request->id);

        $filePath = public_path($photo->path);
        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        //update
        $file = $request->file('photo');

        $filename = time() . '.' . $file->getClientOriginalExtension();

        $file->move(public_path('images'), $filename);

        $photo->update([
            'path'=> 'images/'. $filename,
        ]);

        $photo->save();

        return redirect()->back()->with('error', 'Nessuna foto caricata.');

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
    public function edit(string $id)
    {
        //
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
        // Trova la foto oppure lancia un errore 404 se non esiste
        $photo = Photo::findOrFail($id);

        // Se vuoi eliminare anche il file fisico dal disco
        $filePath = public_path($photo->path); // Assicurati che il percorso sia corretto
        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        // Elimina il record dal database
        $photo->delete();

        // Reindirizza indietro con un messaggio di successo
        return redirect()->back()->with('success', 'Foto eliminata con successo.');
    }
}

