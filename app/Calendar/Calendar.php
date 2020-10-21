<?php
namespace App\Calendar;

use Carbon\Carbon;

$dt = Carbon::createFromDate();
renderCalendar($dt);
     
function renderCalendar($dt)
{
    $dt->timezone = 'Asia/Tokyo'; //日本時刻で表示
    echo $dt;
}