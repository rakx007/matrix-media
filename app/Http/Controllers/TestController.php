<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Project;
use App\Models\Task;

class TestController extends Controller
{    
    /**
     * getProject
     *
     * @return void
     */
    public function getProject() {
        $projectList = Project::with('task')->get();
        dd($projectList);
    }
    
    /**
     * getTask
     *
     * @return void
     */
    public function getTask() {
        $taskList = Task::with('project')->get();
        // dd($taskList);

        foreach ($taskList as $task) {
            echo $task->project->title;
            echo "</br>";
        }
    }
}
