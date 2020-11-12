<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calender\Calender;
use App\Models\Task;
use App\Http\Requests\CreateTask;

class TaskController extends Controller
{   
    /**
     * 詳細表示機能
     */
    public function show(Request $request, $id)
    {
        $task = Task::find($id);

        return view('tasks.show',[
            "task" => $task
        ]);
    }
    /**
     * 編集画面
     */
    public function form(Request $request, $id)
    {
        $task = Task::find($id);

        if(!$task){
            return back()->withError("編集できないよ");
        }
        //自分以外を編集
        if(false == $this->isEditable($task)){
            return back()->withError("編集できないよ");
        }

        return view("tasks.task_edit",["task => $task"]);
    }
}