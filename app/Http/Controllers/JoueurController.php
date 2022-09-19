<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Genre;
use App\Models\Photo;
use App\Models\Equipe;
use App\Models\Joueur;
use App\Models\Continent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateJoueurRequest;

class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allGenre = Genre::all();
        $allRole = Role::all();
        $allEquipe = Equipe::all();
        $allPhoto = Photo::all();
        $allContinent = Continent::all();
        $allJoueur = Joueur::all();
        return view('player',compact('allGenre','allRole','allEquipe','allPhoto','allContinent','allJoueur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allGenre = Genre::all();
        $allRole = Role::all();
        $allEquipe = Equipe::all();
        $allPhoto = Photo::all();
        $allContinent = Continent::all();
        $allJoueur = Joueur::all();
        return view('pages.createJoueur',compact('allGenre','allRole','allEquipe','allPhoto','allContinent','allJoueur'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJoueurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storePhoto = new Photo;
        Storage::put('public/img/', $request->file('url'));
        $storePhoto->url = $request->file('url')->hashName();
        $storePhoto->save();

        $storeJoueur = new Joueur;
        $storeJoueur->nom = $request->nom;
        $storeJoueur->prenom = $request->prenom;
        $storeJoueur->telephone = $request->telephone;
        $storeJoueur->email = $request->email;
        $storeJoueur->pays = $request->pays;
        $storeJoueur->genre_id = $request->genre_id;
        $storeJoueur->role_id = $request->role_id;
        $storeJoueur->equipe_id = $request->equipe_id;
        $storeJoueur->photo_id = $storePhoto->id;
        $storeJoueur->save();

        return redirect()->back()->with('succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function show(Joueur $joueur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function edit(Joueur $joueur,$id)
    {
        $editJoueur = Joueur::find($id);
        $editGenre = Genre::all();
        $editRole = Role::all();
        $editEquipe = Equipe::all();
        $editPhoto = Photo::all();

        return view('pages.editJoueur',compact('editJoueur','editGenre','editRole','editEquipe','editPhoto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJoueurRequest  $request
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $updatePhoto = Photo::find($id);
        
        if ($request->file('url') != null) {
            Storage::delete('public/img/' . $updatePhoto->url);
            Storage::put('public/img/', $request->file('url'));            
            $updatePhoto->url = $request->file('url')->hashName();
            $updatePhoto->save();
        }

        $updateJoueur = Joueur::find($id);
        $updateJoueur->nom = $request->nom;
        $updateJoueur->prenom = $request->prenom;
        $updateJoueur->telephone = $request->email;
        $updateJoueur->pays = $request->pays;
        $updateJoueur->genre_id = $request->genre_id;
        $updateJoueur->role_id = $request->role_id;
        $updateJoueur->equipe_id = $request->equipe_id;
        $updateJoueur->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Joueur $joueur,$id)
    {
        $destroyJoueur = Joueur::find($id);
        $destroyPhoto = Photo::find($id);
        Storage::delete('public/img/' . $destroyJoueur->photo->url);
        $destroyJoueur->delete();
        $destroyPhoto->delete();
        
        return redirect()->back();
    }
}
