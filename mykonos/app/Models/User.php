<?php

namespace App\Models;

use App\Models\Like;
use App\Models\Post;
use App\Models\Comment;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use HasFactory, HasApiTokens, Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name',
    'firstname',
    'email',
    'avatar',
    'address',
    'phone',
    'birth_date',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password',
    'created_at',
    'updated_at',
    'remember_token',
    'email_verified_at',
    'pivot'
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  public function posts()
  {
    return $this->hasMany(Post::class);
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
