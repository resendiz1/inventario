<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentPostUser extends Model
{
    use HasFactory;


    protected $table = 'comment_post_user';

    protected $fillable = ['user_id', 'post_id', 'comment_body'];



}
