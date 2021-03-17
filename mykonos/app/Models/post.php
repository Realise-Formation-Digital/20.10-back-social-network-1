<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  use HasFactory;

  protected $fillable = [
    'created_at',
    'updated_at',
    'title',
    'text',
    'image'
  ];

  protected $hidden = [
    'user_id'
  ];

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

  public function users()
  {
    return $this->belongsTo(User::class);
  }
}
