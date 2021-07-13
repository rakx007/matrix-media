<?php
   
namespace App\Models;
  
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
   
class Post extends Model
{
    use SoftDeletes;

    protected $table = "post";
    protected $dates = ['deleted_at'];

    protected $fillable = [
    	'post_id',
        'parent_post_id',
        'user_id',
        'slug',
        'title',
        'description',
        'is_active'
	];
}