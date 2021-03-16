<?php

namespace App\Models;

use Egulias\EmailValidator\Warning\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  use HasFactory;

  protected $fillable = [
    'email',
    'name',
    'firstname',
    'password',
    'avatar',
    'address',
    'phone',
    'birth_date'
  ];

  protected $hidden = [
    'created_at',
    'updated_at',
  ];

  public function comments()
  {
    return $this->hasMany(Comment::class);
  }

  public function likes()
  {
    return $this->hasMany(Like::class);
  }

  public function posts()
  {
    return $this->hasMany(Post::class);
  }
}
