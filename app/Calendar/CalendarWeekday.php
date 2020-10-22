<?php

namespace App\Calender;

use Carbon\Carbon;

class CalendarWeekDay{

    protected $carbon;

    public function __construct($date)
    {
        $this->carbon = new Carbon($date);
    }

    public function getClassName()
    {
        //format()関数に「D」を指定すると「Sun」「Mon」等曜日を省略形式で取得できる
        //小文字に変換をしているので、日曜日はday-sun、月曜日はday-monというクラス名を出力できる。
        return "day-" . strtolower($this->carbon->format("D"));
    }

    /**
     * @return
     */
    public function render()
    {
        //format()関数に「j」を指定すると先頭にゼロをつけない日付けを取得できる
        //ex)15日の場合<p class="day">15</p>というHTMLを返す
        return '<p class="day">' . $this->carbon->format("j"). '</p>';
    }
}