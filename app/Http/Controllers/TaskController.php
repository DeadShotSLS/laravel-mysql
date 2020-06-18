<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\task;

class TaskController extends Controller
{
    public function taskAdd(Request $request){
        $task = new task();

        $this->validate($request,[
            'task'=>'required|max:200|min:5',
        ]);

        $task->task = $request->task;
        $task->save();

        $data = task::all();

        return view('task')->with('tasks',$data);
        //return redirect()->back();
        //dd($request->all());
    }

    public function task(){
        $data = task::all();

        return view('task')->with('tasks',$data);
    }

    public function taskCompleted($id){
        $task = task::find($id);
        $task->complete=1;
        $task->save();
        return redirect()->back();
    }

    public function taskNotCompleted($id){
        $task = task::find($id);
        $task->complete=0;
        $task->save();
        return redirect()->back();
    }

    public function taskDelete($id){
        $task = task::find($id);
        $task->delete();
        return redirect()->back();
    }

    public function taskUpdate($id){
        $task = task::find($id);

        return view('update_task')->with('taskdata',$task);
    }

    public function taskUpdates(Request $request){
        $id=$request->id;
        $task=$request->task;
        $data=task::find($id);
        $data->task=$task;
        $data->save();

        $data=task::all();
        return view('task')->with('tasks',$data);
    }
}
