<?php
namespace App\Calendar;

use App\Calender\CalendarWeekDay;
/**
* 余白を出力するためのクラス
*/
class CalendarWeekBlankDay extends CalendarWeekDay 
{
    function getClassName(){
		return "day-blank";
	}

	/**
	 * @return 
	 */
	function render(){
		return '';
	}
}