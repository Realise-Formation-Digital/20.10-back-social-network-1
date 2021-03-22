<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return User::with('posts')->with('comments')->with('likes')->get();

  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    User::create($request->all());
  }
  /**
   * Display the specified resource.
   *
   * @param  \App\User $user
   * @return \Illuminate\Http\Response
   */
  public function show($user)
  {
    return User::with('posts')->with('comments')->with('likes')->findOrFail($post);
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\User $user
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, User $user)
  {
    $user->update($request->all());
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\User $user
   * @return \Illuminate\Http\Response
   */
  public function destroy(User $user)
  {
    $user->delete();
  }
}
