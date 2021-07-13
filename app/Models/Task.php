<?php
   
namespace App\Models;
  
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;
   
class Task extends Model
{
    protected $table = "task";
    protected $dates = ['deleted_at'];

    protected $fillable = [
    	'task_id',
    	'project_id',
        'title',
        'description',
        'status',
        'is_active'
	];
    
    /**
     * project
     *
     * @return void
     */
    public function project() {
        return $this->belongsTo(Project::class, 'project_id', 'project_id');
    }
}