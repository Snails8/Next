<?php

namespace App\Calendar\Output;

use App\Calendar\CalendarView;
use App\Calender\CalendarWeekDay;
use Carbon\Carbon;
/**
 * カレンダーにデータを表示するクラス
 */
class CalendarOutputView extends CalendarView
{
    /**
     * 日を描画する処理
     */
    protected function renderDay(CalendarWeekDay $day)
    {
        $html = [];
        $extraHoliday = null;

        $html[] = '<td class="'.$day->getClassName().'">';
        $html[] = $day->render();

        if($extraHoliday)
        {
            $html[] = '<p class="comment">' . e($extraHoliday->comment) . '</p>';
        }

        $html[] = '</td>';

        return implode("", $html);
    }
}