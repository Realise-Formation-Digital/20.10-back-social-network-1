<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return PostResource::collection(Post::all());
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    Post::create($request->all());
  }
  /**
   * Display the specified resource.
   *
   * @param  \App\Post $post
   * @return \Illuminate\Http\Response
   */
  public function show($post)
  {
    return new PostResource(Post::findOrFail($post));
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Post $post
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Post $post)
  {
    $post->update($request->all());
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Post $post
   * @return \Illuminate\Http\Response
   */
  public function destroy(Post $post)
  {
    $post->delete();
  }
}
