<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Project;
use App\Models\Task;

class TestController extends Controller
{    
    /**
     * getProjectList
     *
     * @return void
     */
    public function getProjectList() {
        $projectList = Project::with('task')->get();
        dd($projectList);
    }
    
    /**
     * getTaskList
     *
     * @return void
     */
    public function getTaskList() {
        $taskList = Task::with('project')->get();
        // dd($taskList);

        foreach ($taskList as $task) {
            echo "Project Name: " . $task->project->title;
            echo "</br>";
            echo "Task Name: " . $task->title;
            echo "</br></br>";
        }
    }

    /**
     * getTask
     *
     * @return void
     */
    public function getTask(Task $data) {
        dd($data);
    }
}
