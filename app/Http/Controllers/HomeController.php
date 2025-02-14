<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactUsMail;
use App\Models\Album;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Validation\ValidatesRequests;

class HomeController extends Controller
{
    use ValidatesRequests;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|max:255|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
        'phone' => 'required|string|regex:/^\+?[0-9]{6,15}$/',
        'text' => 'required|string|max:600',
    ] ;
    protected $messages = [
        'name.required' => 'Inserisci il tuo nome',
        'email.required' => 'Inserisci la tua email',
        'email.regex' => 'Inserisci un indirizzo email valido',
        'phone.required' => 'Inserisci il tuo numero di cellulare',
        'phone.regex' => 'Inserisci un numero di cellulare valido',
        'text.required' => 'Inserisci un messaggio',
    ];

    public function ContactUs(Request $request){

        $this->validate($request, $this->rules, $this->messages);

        Mail::to("antoniodegaetano2000@hotmail.it")->send(new ContactUsMail($request->all()));

        return redirect()->back()->with('success', 'Messaggio inviato con successo!');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos = Photo::all();
        return view("home", ["photos"=> $photos]);
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
        //
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
    public function destroy(string $id)
    {
        //
    }

    public function indexDashboard()
    {
        $albums = Album::all();
        return view("dashboard", ["albums"=> $albums]);
    }

}
