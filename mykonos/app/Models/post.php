<?php

namespace App\Models;

use App\Models\Like;
use App\Models\User;
use App\Models\Comment;
use App\Models\Taxonomy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
  use HasFactory;

  protected $fillable = [
    'title',
    'text',
    'image',
    'user_id',
    'created_at',
    'updated_at',
  ];

  protected $hidden = [
    'pivot'
  ];

  public function users()
  {
    return $this->belongsTo(User::class);
  }

  public function taxonomies()
  {
    return $this->belongsToMany(Taxonomy::class);
  }

  public function comments()
  {
    return $this->hasMany(Comment::class);
  }

  public function likes()
  {
    return $this->hasMany(Like::class);
  }
}
