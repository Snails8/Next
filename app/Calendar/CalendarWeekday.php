<?php

namespace App\Calender;

use App\Models\Task;
use Carbon\Carbon;
use Yasumi\Yasumi;

/**
 * 日を出力するためのクラス
 */
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
        $html = [];

        $date = $this->carbon->format("Y-m-d");
        //日付：format()関数に「j」を指定すると先頭にゼロをつけない日付けを取得できる
        $html[] = '<p class="day">' . $this->carbon->format("j"). '</p>';
        $html[] = '<a href="/next/tasks/1">ココ！</a>';

        $active_date = Task::where("active_date", "=", $date);

        if($date === $active_date)
        {

            $html[] = '<a href="next/tasks/{id}"></a>';
        }else
        {
            $html[] = '';
        }

        return implode("", $html);
    }
}
