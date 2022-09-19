<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Equipe;
use App\Models\Continent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreEquipeRequest;
use App\Http\Requests\UpdateEquipeRequest;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allEquipe = Equipe::all();
        $allContinent = Continent::all();
        return view('team',compact('allEquipe','allContinent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allEquipe = Equipe::all();
        $allContinent = Continent::all();
        return view('pages.createTeam',compact('allEquipe','allContinent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEquipeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeEquipe = new Equipe();
        $storeEquipe->equipe = $request->equipe;
        $storeEquipe->ville = $request->ville;
        $storeEquipe->nbrJoueur = $request->nbrJoueur;
        $storeEquipe->pays = $request->pays;
        $storeEquipe->continent_id = $request->continent_id;
        $storeEquipe->save();

        return redirect()->back()->with('succces','post created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function show(Equipe $equipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipe $equipe,$id)
    {
        $editTeam = Equipe::find($id);
        $editContinent = Continent::all();
        return view('pages.editTeam',compact('editTeam','editContinent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEquipeRequest  $request
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $updateTeam = Equipe::find($id);
        $updateTeam->equipe = $request->equipe;
        $updateTeam->ville = $request->ville;
        $updateTeam->nbrJoueur = $request->nbrJoueur;
        $updateTeam->pays = $request->pays;
        $updateTeam->continent_id = $request->continent_id;
        $updateTeam->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipe $equipe,$id)
    {
        $destroyEquipe = Equipe::find($id);
        $destroyEquipe->delete();
        
        return redirect()->back();
    }
}
