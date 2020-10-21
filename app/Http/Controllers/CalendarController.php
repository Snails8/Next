<?php

namespace App\Http\Controllers;

use App\Calendar\CalendarView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;

class CalendarController extends Controller
{
    public function show(){
		
		$calendar = new CalendarView(time());

		return view('calendar', [
			"calendar" => $calendar
		]);
	}
}
