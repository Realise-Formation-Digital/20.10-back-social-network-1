<?php

namespace App\Models;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
  use HasFactory;

  protected $fillable = [
    'text',
    'created_at',
    'updated_at',
    'user_id',
  ];

  protected $hidden = [
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
