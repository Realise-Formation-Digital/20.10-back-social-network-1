<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Taxonomy extends Model
{
  use HasFactory;

  protected $fillable = [
    'label',
    'created_at',
    'updated_at',
  ];

  protected $hidden = [
    'pivot'
  ];

  public function posts()
  {
    return $this->belongsToMany(Post::class);
  }
}
