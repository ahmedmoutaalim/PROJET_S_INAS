<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;



class etudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('etudiants.create');     //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  

        $etudiant = new Etudiant([
           
            'nom_etudiant'=> $request->get('nom_etudiant'),
            'prenom_etudiant'=> $request->get('prenom_etudiant'),
            'lieu_naissance'=> $request->get('lieu_naissance'),
            'adresse_email'=> $request->get('adresse_email'),
            'numero_telephone'=> $request->get('numero_telephone'),
            'annee_bac'=> $request->get('annee_bac'),
            'section_bac'=> $request->get('section_bac'),
            'ville_etudiant'=> $request->get('ville_etudiant'),
            'etablissement'=> $request->get('etablissement'),
            'adresse_etudiant'=> $request->get('adresse_etudiant'),
            'filiére_etudiant'=> $request->get('filiére_etudiant'),
           
            

        ]);
        $etudiant->save();
        return view('imprimation');

  //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
