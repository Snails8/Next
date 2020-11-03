<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calender\Calender;
use App\Models\Task;
use App\Http\Requests\CreateTask;

class TaskController extends Controller
{
    public function index()
    {
        return view('layout');
    }

    public function showCreateForm()
    {
        return view('tasks.create');

    }
    
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
     * formからの遷移先（作成の実行）
     */
    function store(Request $request)
    {
        $validatedDate = $request->validate($this->validationRules);

        $new = Task::create($validatedDate);

        return redirect()->route("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $calendar = Calendar::find($id);

        return view('tasks.show', compact('carendar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
