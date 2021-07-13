<?php
   
namespace App\Models;
  
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
   
class Comment extends Model
{
    use SoftDeletes;

    protected $table = "comment";
    protected $dates = ['deleted_at'];

    protected $fillable = [
    	'comment_id',
        'parent_comment_id',
    	'post_id',
        'user_id',
        'comment',
        'is_active'
	];
}