<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskCreateController extends Controller
{
    /**
     * バリデーションルール
     */
    protected $validationRules = [
        "title" => ["required", "string"],
        "status" => ["required", "string"],
        "description" => ["required", "string"], 
    ];
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
        //入力値受け取り
        $validatedDate = $request->validate($this->validationRules);

        //Taskの保存
        $new = Task::create($validatedDate);

        return redirect()
          ->route("/calendar")
          ->withStatus("保存したぜ");
    }
}
