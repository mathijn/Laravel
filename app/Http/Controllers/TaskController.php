<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    //
    public function index(){
      $taskIncomplete = Task::incomplete()->get();
      $taskIsComplete = Task::iscomplete()->get();

      return view('tasks.index', compact('taskIncomplete', 'taskIsComplete'));

    }

    public function show(Task $task){
      return $task;
      return view('tasks.show', compact('task'));
    }
}
