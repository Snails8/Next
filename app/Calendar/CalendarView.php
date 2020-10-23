<?php
namespace App\Calendar;

use Carbon\Carbon;
use App\Calendar\CalendarWeek;
use App\Calender\CalendarWeekDay;

class CalendarView 
{
    private $carbon;

    public function __construct($date)
    {
        // コンストラクタで受け取った日付を元に
        // Carbonオブジェクトを作成
        $this->carbon = new Carbon($date);

    }

    // タイトル
    public function getTitle()
    {
        return $this->carbon->format('Y年n月');
    }

    // カレンダーを出力する
    public function render()
    {

        $html = [];
        $html[] = '<div class="calendar">'; 
        $html[] = '<table class="table">';
        $html[] = '<thead>';
		$html[] = '<tr>';
		$html[] = '<th>日</th>';
		$html[] = '<th>月</th>';
		$html[] = '<th>火</th>';
		$html[] = '<th>水</th>';
		$html[] = '<th>木</th>';
		$html[] = '<th>金</th>';
        $html[] = '<th>土</th>';
		$html[] = '</tr>';
        $html[] = '</thead>';
        
        $html[] = '<tbody>';

        $weeks = $this->getWeeks();
        foreach($weeks as $week)
        {
            $html[] = '<tr class="'.$week->getClassName().'">';
            $days = $week->getDays();
            foreach($days as $day)
            {
                $html[] = '<td class="'.$day->getClassName().'">';
                $html[] = $day->render();
                $html[] = '</td>';
            }
            $html[] = '</tr>';
        }

        $html[] = '<tbody>';

		$html[] = '</table>';
		$html[] = '</div>';
		return implode("", $html);
    }
    
    //getWeek関数は一ヶ月分の週カレンダーを用意した$weeksを返却することが目的
    protected function getweeks()
    {
        $weeks = [];
        //月の開始日と末尾を取得する処理。copy()を挟むことで日付操作をしても影響が出ないようにしている
        $firstDay = $this->carbon->copy()->firstOfMonth();

        $lastDay = $this->carbon->copy()->lastOfMonth();

        //1周目、１日の指定をしてCalendarWeekの作成
        $week = new CalendarWeek($firstDay->copy());
        $weeks[] = $week;

        //作業用の日
        $tmpDay = $firstDay->copy()->addDay(7)->startOfWeek();

        //月末までループ
        while($tmpDay->lte($lastDay))
        {
            //週カレンダーViewの作成
            //第2引数でcount($weeks)を指定
            //何週目かを週カレンダーオブジェクトに伝えるために設置
            $week = new CalendarWeek($tmpDay, count($weeks));
            $weeks[] = $week;

            //次の週＋７日。$tmpDayを翌週に移動
            $tmpDay->addDay(7);
        }

        return $weeks;
    }

    public function getNextMonth()
    {
        return $this->carbon->copy()->addMonthsNoOverflow()->format('Y-m');
    }
    public function getPreviousMonth()
    {
        return $this->carbon->copy()->subMonthsNoOverflow()->format('Y-m');
    }
}