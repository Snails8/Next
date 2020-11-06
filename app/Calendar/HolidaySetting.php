<?php

namespace App\Calendar;

use Illuminate\Database\Eloquent\Model;
use Yasumi\Yasumi;

class HolidaySetting extends Model
{
    private $holiday = null;

    function loadHoliday($year)
    {
        $this->holidays = Yasumi::create("Japan", $year,"ja_JP");
    }

    function isHoliday($date)
    {
        if(!$this->holidays)return false;

        return $this->holidays->isHoliday($date);
    }
}