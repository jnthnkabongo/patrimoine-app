<?php

namespace App\Http\Controllers;

use App\Models\entrer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class EntrerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('utilisateurs.bon-entrer.index');
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
        return view('utilisateurs.bon-entrer.creer-bon');
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
