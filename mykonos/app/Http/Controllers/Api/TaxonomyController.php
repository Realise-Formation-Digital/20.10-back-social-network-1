<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Taxonomy;

class TaxonomyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Taxonomy::all();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Taxonomy::create($request->all());
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Taxonomy $taxonomy
     * @return \Illuminate\Http\Response
     */
    public function show(Taxonomy $taxonomy)
    {
        return $taxonomy;
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Taxonomy $taxonomy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Taxonomy $taxonomy)
    {
        $taxonomy->update($request->all());
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Taxonomy $taxonomy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Taxonomy $taxonomy)
    {
        $taxonomy->delete();
    }
}

