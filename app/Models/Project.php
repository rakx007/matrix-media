<?php
   
namespace App\Models;
  
use Illuminate\Database\Eloquent\Model;
   
class Project extends Model
{
    protected $table = "project";
    protected $dates = ['deleted_at'];

    protected $fillable = [
    	'project_id',
        'user_id',
        'title',
        'description',
        'is_active'
	];
    
    /**
     * task
     *
     * @return void
     */
    public function task() {
        return $this->hasMany(Task::class, 'project_id', 'project_id');
    }
}