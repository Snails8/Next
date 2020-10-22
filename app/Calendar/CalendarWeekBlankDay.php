<?php

namespace App\Calender;

//日カレンダーをカスタマイズして、クラス名とHTMLだけ別の処理になるようなクラスを作成
class CalendarWeekBlankDay extends CalendarWeekDay
{
    public function getClassName()
    {
        return "day-blank";
    }

    /**
     * @return
     */
    public function render()
    {
        return '';
    }
}
//気温動作の作成→増やすと仕様変更にも強くなる