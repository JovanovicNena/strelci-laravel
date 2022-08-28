<?php

namespace App\Http\Controllers;

use App\Http\Resources\LigaResurs;
use App\Models\Liga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LigaKontroler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sveLige = Liga::all();

        return LigaResurs::collection($sveLige);
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
        $validator = Validator::make($request->all(), [
            'drzava' => 'required|string',
            'naziv' => 'required|string',
            'broj_klubova' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response()->json(['Error!', $validator->errors()]);
        }

        $liga = Liga::create([
            'drzava' => $request->drzava,
            'naziv' => $request->naziv,
            'broj_klubova' => $request->broj_klubova
        ]);

        return response()->json(['Liga je kreirana.', new LigaResurs($liga)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Liga  $liga
     * @return \Illuminate\Http\Response
     */
    public function show(Liga $liga)
    {
        return new LigaResurs($liga);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Liga  $liga
     * @return \Illuminate\Http\Response
     */
    public function edit(Liga $liga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Liga  $liga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Liga $liga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Liga  $liga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Liga $liga)
    {
        $liga->delete();

        return response()->json(['Liga je obrisana.', new LigaResurs($liga)]);
    }
}
