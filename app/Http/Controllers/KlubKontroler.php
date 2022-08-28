<?php

namespace App\Http\Controllers;

use App\Http\Resources\KlubResurs;
use App\Models\Klub;
use Illuminate\Http\Request;

class KlubKontroler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sviKlubovi = Klub::all();

        return KlubResurs::collection($sviKlubovi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Klub  $klub
     * @return \Illuminate\Http\Response
     */
    public function show(Klub $klub)
    {
        return new KlubResurs($klub);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Klub  $klub
     * @return \Illuminate\Http\Response
     */
    public function edit(Klub $klub)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Klub  $klub
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Klub $klub)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Klub  $klub
     * @return \Illuminate\Http\Response
     */
    public function destroy(Klub $klub)
    {
        //
    }
}
