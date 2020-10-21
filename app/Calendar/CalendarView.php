<?php
namespace App\Calendar;

use Carbon\Carbon;

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
        $html[] = '<table class="table">';
        $html[] = '<thead>';
		$html[] = '<tr>';
		$html[] = '<th>月</th>';
		$html[] = '<th>火</th>';
		$html[] = '<th>水</th>';
		$html[] = '<th>木</th>';
		$html[] = '<th>金</th>';
		$html[] = '<th>土</th>';
        $html[] = '<th>日</th>';
		$html[] = '</tr>';
		$html[] = '</thead>';
		$html[] = '</table>';
		$html[] = '</div>';
		return implode("", $html);
    }
    
}