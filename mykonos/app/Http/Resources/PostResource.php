<?php

namespace App\Http\Resources;

use Illuminate\Support\Str;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request)
  {
    return [
      'id' => $this->id,
      'title' => $this->title,
      'text' => $this->text,
      'image' => Str::of($this->image)->after('public/assets/img\\'),
      'created_at' => $this->created_at->format('Y-m-d H:i:s'),
      'updated_at' => $this->updated_at->format('Y-m-d H:i:s'),
      'user' => $this->user,
      'taxonomies' => $this->taxonomies->sortBy('label'),
      'comments' => CommentResource::collection($this->comments),
      'likes' => LikeResource::collection($this->likes),
    ];
    return parent::toArray($request);
  }
}
