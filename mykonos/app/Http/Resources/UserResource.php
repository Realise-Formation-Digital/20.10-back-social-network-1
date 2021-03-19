<?php

namespace App\Http\Resources;

use Illuminate\Support\Str;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request)
  {
    $address = $this->address;
    return [
      'id' => $this->id,
      'name' => $this->name,
      'firstname' => $this->firstname,
      'email' => $this->email,
      'password' => $this->password,
      'avatar' => Str::of($this->avatar)->after('public/assets/img\\'),
      'address' => Str::replaceFirst("\n", ' ', $address),
      'phone' => $this->phone,
      'birth_date' => $this->birth_date,
      'created_at' => $this->created_at->format('Y-m-d H:i:s'),
      'updated_at' => $this->updated_at->format('Y-m-d H:i:s'),
      'posts' => PostResource::collection($this->posts),
      'comments' => CommentResource::collection($this->comments),
    ];
    return parent::toArray($request);
  }
}
