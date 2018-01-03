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
        //$tasks = Task::all();
        $tasks = Task::paginate(5);
        return View('task/list')->with('tasks',$tasks);
    }

    /**
     * return update a task
     * @return \Illuminate\Http\Response
     */
    public function modify(){
        $this->validate(request(), [
            'name' => 'required|max:100',
            'description' => 'required|max:255'
        ]);

        try{
            $task = Task::find(request('id'));
            $task->name = request('name');
            $task->description = request('description');
            $task->begin_date = new \DateTime(request('begin_date'));
            $task->end_date = new \DateTime(request('end_date'));
            $task->save();
        } catch (Exception $ex) {
            return redirect('task_form')->with('error', $ex->getMessage());
        }
        return redirect('/task_list')->with('success', 'task updated');
    }

    /**
     * @param $id_task
     * @return $this view
     */
    public function update($id_task){
        $task = Task::find($id_task);
        return view('task.task_form')->with('task', $task);
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

        try{
            $task = new Task();
            $task->name = request('name');
            $task->description = request('description');
            $task->begin_date = new \DateTime(request('begin_date'));
            $task->end_date = new \DateTime(request('end_date'));
            $task->save();
        } catch (Exception $ex) {
            return redirect('task_form')->with('error', $ex->getMessage());
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
    public function delete($id_task){
        $task = Task::find($id_task);
        $task->delete();

        return redirect('/task_list')->with('success', 'task deleted !');
    }
}
