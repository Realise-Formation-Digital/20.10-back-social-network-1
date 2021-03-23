<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Like;
use App\Http\Resources\LikeResource;

class LikeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return Like::with('user')->with('post')->get();
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    Like::create($request->all());
  }
  /**
   * Display the specified resource.
   *
   * @param  \App\Like $like
   * @return \Illuminate\Http\Response
   */
  public function show($like)
  {
    return Like::with('user')->with('post')->findOrFail($like);
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Like $like
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Like $like)
  {
    $like->update($request->all());
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Like $like
   * @return \Illuminate\Http\Response
   */
  public function destroy(Like $like)
  {
    $like->delete();
  }
}
