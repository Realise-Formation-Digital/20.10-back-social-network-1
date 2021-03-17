<?php

namespace App\Models;

use App\Models\Like;
use App\Models\Post;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Egulias\EmailValidator\Warning\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
  use HasFactory, HasApiTokens, Notifiable;

  protected $fillable = [
    'created_at',
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
