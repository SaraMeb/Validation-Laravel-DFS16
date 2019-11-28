<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Race;
use App\Classification;
use App\Http\Requests\RaceRequest;
class RaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $races = Race::all();
        return view('races.index', compact('races'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classifications = Classification::all();
        return view('races.create', compact('classifications'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RaceRequest $request)
    {
        $race = Race::create($request->all());
        return redirect('races')->with('status', 'La nouvelle race a bien été ajouté!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $race = Race::find($id);
        return view('races.show', compact('race'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $race = Race::find($id);
        $classifications = Classification::all();
        return view('races.edit', compact('race', 'classifications'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RaceRequest $request)
    {
        $race = Race::find($request->id)->update($request->all());
        return redirect('races')->with('status', 'La race a bien été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $race = Race::destroy($request->id);
        return redirect('races')->with('status', 'La race a bien été supprimé!');
    }
}
