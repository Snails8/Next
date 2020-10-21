<?php

namespace App\Http\Controllers;

use App\Calendar\CalendarView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;
use App\Calender\CalenderView;

class CalendarController extends Controller
{
    public function show()
    {
        //time()で現在時刻を渡し今月のカレンダーを用意
        $calendar = new CalendarView(time());

        //Viewに作成したCalendarViewオブジェクトを渡す
        return view('calendar', [
            "calendar" => $calendar
        ]);
    }
}
