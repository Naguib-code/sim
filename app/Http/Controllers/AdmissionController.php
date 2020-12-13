<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $admissions = Admission::all();
        return view('admissions.index', compact('admissions'));
//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_complet' => 'required|max:255',
            'sexe' => 'required|max:20',
            'age' => 'required|numeric',
            'adresse' => 'required|max:255',
            'nationalite' => 'required|max:30',
            'status' => 'required|max:30',
            'motif_admission' => 'required|max:250',
            'date_admission' => 'required',
            'diag_principal' => 'required',
            'nlit' => 'required|numeric',
            'date_sortie' => 'required',
            'mode_sortie' => 'required',
        ]);
        Admission::create($request->all());

        return redirect()->route('admissions.index')->with('completé', 'Patient a été bien ajouté!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function show(Admission $admission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function edit(Admission $admission)
    {
        return view('admissions.edit',compact('admission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admission $admission)
    {
        $request->validate([
            'nom_complet' => 'required|max:255',
            'sexe' => 'required|max:20',
            'age' => 'required|numeric',
            'adresse' => 'required|max:255',
            'nationalite' => 'required|max:30',
            'status' => 'required|max:30',
            'motif_admission' => 'required|max:250',
            'date_admission' => 'required',
            'diag_principal' => 'required',
            'nlit' => 'required|numeric',
            'date_sortie' => 'required',
            'mode_sortie' => 'required',
        ]);

        $admission->update($request->all());

        return redirect()->route('admissions.index')
            ->with('success','Un patient a été bien modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admission $admission)
    {
        $admission->delete();

        return redirect()->route('admissions.index')
            ->with('success', 'Un patient a été bien supprimé');
    }
}
