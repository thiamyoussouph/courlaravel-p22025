<?php

namespace App\Http\Controllers;


use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $ressultadatabase=Voiture::all();
  
    return view('voitures.liste', compact('ressultadatabase'));
  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('voitures.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $voiture = new Voiture();
        $voiture->marque = $request->input('marque');
        $voiture->modele=$request->input('modele');
        $voiture->matricule=$request->input('matricule');
        $voiture->prix=$request->input('prix');
        $voiture->save();
        return redirect()->route('voitures.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Voiture $voiture)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Voiture $voiture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Voiture $voiture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voiture $voiture)
    {
        //
    }
}
