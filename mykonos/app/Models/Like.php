<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
  use HasFactory;

  protected $fillable = [
    'is_dislike'
  ];

  protected $hidden = [
    'created_at',
    'updated_at',
    'user_id',
    'post_id'
  ];

  public function posts()
  {
    return $this->belongsTo(Post::class);
  }

  public function users()
  {
    return $this->belongsTo(User::class);
  }
}
