<?php

namespace App\Http\Controllers;

use App\Models\cellules;
use App\Models\classe_materiels;
use App\Models\departements;
use App\Models\entrer;
use Illuminate\Http\Request;
use App\Models\patrimoines;
use App\Models\documents;
use App\Models\fonctions;
use Illuminate\Support\Facades\App;

class EntrerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patrimoines = patrimoines::orderByDesc('id_pat')->paginate(1);
        return view('utilisateurs.bon-entrer.index', compact('patrimoines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $listestatusbon = documents::all();
        $listeporteur = fonctions::all();
        $listecellule = cellules::all();
        $listedepartement = departements::all();
        $listeclasse = classe_materiels::all();
        return view('utilisateurs.bon-entrer.creer-bon', compact('listestatusbon','listeporteur','listedepartement','listecellule', 'listeclasse'));
    }

    /**
     * Display the specified resource.
     */
    public function show(entrer $entrer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(entrer $entrer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, entrer $entrer)
    {
        //
    }

    public function createpdf(){
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(entrer $entrer)
    {
        //
    }
}
