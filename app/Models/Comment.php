<?php
   
namespace App\Models;
  
use Illuminate\Database\Eloquent\Model;
   
class Comment extends Model
{

    protected $table = "comment";

    protected $fillable = [
    	'comment_id',
        'parent_comment_id',
    	'post_id',
        'user_id',
        'comment',
        'is_active'
	];
}