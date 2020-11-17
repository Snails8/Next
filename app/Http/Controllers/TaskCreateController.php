<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Calendar\CalendarView;

class TaskCreateController extends Controller
{
    /**
     * バリデーションルール
     */
    protected $validationRules = [
        "active_date" => ["required", "date"],
        "title" => ["required", "string"],
        "status" => ["required", "string"],
        "description" => ["nullable", "string"], 
    ];
    /**
     * form表示処理
     */
    public function showCreateForm()
    {
        $calendar = new CalendarView(time());

        return view('tasks.create', [ "calendar" => $calendar ]);
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
          ->route("calendar");
    }
}
