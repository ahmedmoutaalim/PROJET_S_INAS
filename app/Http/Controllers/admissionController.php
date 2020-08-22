<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admission;


class admissionController extends Controller
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
        return view('admission.create'); 
       
       
    }
  
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //----request Admission-----!!
        // $this->validate($request ,[
        //    'code_massar'=> 'required',
        //    'date_naissance'=>'required',
        //    'creation_password'=>'required'
        // ]);
        $admission = new Admission([
          'code_massar' => $request->get('code_massar'),
          'date_naissance'=> $request->get('date_naissance'),
          'creation_password'=> $request->get('creation_password'), 
          'time_insert'=> $request->get('time_insert') 
        ]);
        $admission->save();
        return redirect('etudiants/create');



        

       
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
