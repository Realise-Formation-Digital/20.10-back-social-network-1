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
    'is_dislike',
    'created_at',
    'updated_at',
  ];

  protected $hidden = [
    'user_id',
    'post_id',
    'pivot'
  ];

  public function post()
  {
    return $this->belongsTo(Post::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
