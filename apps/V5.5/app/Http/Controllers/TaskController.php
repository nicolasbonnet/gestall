<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TaskController extends Controller
{
    /**
     * return list of task
     * @return \Illuminate\Http\Response
     */
    public function listAll(){
        $tasks = Task::all();
        return View('task/list')->with('tasks',$tasks);
    }

    /**
     * return list of task
     * @return \Illuminate\Http\Response
     */
    public function modify(){
            
    }
    
    /**
     * return list of task
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function valid(Request $request){
        
        $this->validate(request(), [
            'name' => 'required|max:100',
            'description' => 'required|max:255'
        ]);
        
        $task = new Task();
        $task->name = request('name'); 
        $task->description = request('description');
        $task->begin_date = new \DateTime(request('begin_date'));
        $task->end_date = new \DateTime(request('end_date'));
         
        try{
            $task->save();
        } catch (Exception $ex) {
            dd($ex);
        }
        return redirect('/task_list')->with('success', 'new task created');
    }

    /**
     * Show the form to create a new task post.
     *
     * @return Response
     */
    public function create()
    {
        return view('task.task_form');
    }

    /**
     * return list of task
     * @return \Illuminate\Http\Response
     */
    public function remove(){
        
    }
}
