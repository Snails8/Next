<?php

namespace App\Http\Controllers;

use App\Calendar\CalendarView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;
use App\Calendar\Output\CalendarOutputView;

class CalendarController extends Controller
{
	public function show(Request $request)
	{
		//クエリーのdate
		$date = $request->input("date");
        //dateがYYYY-MM形式か判定
		if($date && preg_match("/^[0-9]{4}-[0-9]{2}$/", $date))
		{
			$date = strtotime($date . "-01");
		}else
		{
			$date = null;
		}

		//所得できない時は現在を指定
		if(!$date)$date = time();
		
		//time()を使って現在時刻を渡し今月のカレンダーを用意
		$calendar = new CalendarView(time());
		//Viewに作成したCalendarViewオブジェクトを渡す
		return view('calendars.calendar', [
			"calendar" => $calendar
		]);
	}
}
