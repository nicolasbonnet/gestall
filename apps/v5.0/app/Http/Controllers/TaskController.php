<?php

namespace mygest\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use mygest\Task;

class TaskController extends Controller
{
    public function showId($id){

    }

    /**
     * @param Request $request
     * @return $this
     */
    public function listTask(Request $request){
        $tasks = Task::all();
        return view('task.list')->with('tasks', $tasks);
    }

    public function showTask(){

    }

    public function storeTask(Request $request, $id){

    }

    public function valideTask(Request $request){

        $parameters = $request->except(['_token']);

        $task = new Task();
    }
}
