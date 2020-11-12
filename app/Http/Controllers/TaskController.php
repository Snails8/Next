<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calender\Calender;
use App\Models\Task;
use App\Http\Requests\CreateTask;

class TaskController extends Controller
{   
    public function create(CreateTask $request)
    {
        $task = new Task();

        $task->title = $request->title;
        $task->status = $request->status;
        $task->message = $request->messages;

        $task->save();

        return redirect()->route('calendars.calendar');
    }
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
}