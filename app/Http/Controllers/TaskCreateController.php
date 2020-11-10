<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskCreateController extends Controller
{
    /**
     * form表示処理
     */
    public function showCreateForm()
    {
        return view('tasks.create');
    }
    /**
     * form遷移処理
     */
    public function store(Request $request)
    {
        $validatedDate = $request->validate($this->validationRules);

        $new = Task::create($validatedDate);

        return redirect()->route("/calendar");
    }
}
