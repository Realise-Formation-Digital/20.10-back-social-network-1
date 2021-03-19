<?php

namespace App\Models;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Like extends Model
{
  use HasFactory;

  protected $fillable = [
    'is_dislike'
  ];

  protected $hidden = [
    'id',
    'created_at',
    'updated_at',
    'user_id',
    'post_id',
    'pivot'
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
