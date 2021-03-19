<?php

namespace App\Http\Controllers\Api;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CommentResource;

class CommentController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return CommentResource::collection(Comment::all());
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    Comment::create($request->all());
  }
  /**
   * Display the specified resource.
   *
   * @param  \App\Comment $comment
   * @return \Illuminate\Http\Response
   */
  public function show(Comment $comment)
  {
    return new CommentResource(Comment::findOrFail($comment));
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Comment $comment
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Comment $comment)
  {
    $comment->update($request->all());
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Comment $comment
   * @return \Illuminate\Http\Response
   */
  public function destroy(Comment $comment)
  {
    $comment->delete();
  }
}
