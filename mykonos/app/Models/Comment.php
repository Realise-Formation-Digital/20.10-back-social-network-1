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
    'post_id',
  ];

  protected $hidden = [
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
