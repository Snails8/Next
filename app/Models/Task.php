<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = "tasks";

    protected $fillable = [
        'title',
        "date",
        'status',
        'description',
    ];

    const STATUS = [
        1 => [ 'label' => '悪い', 'class' => 'label-danger' ],
        2 => [ 'label' => '普通', 'class' => 'label-info' ],
        3 => [ 'lable' => '良い', 'class' => '' ],
    ];
    /**
     * 状態のラベル
     * @return string
     */
    public function getStatusLabelAttribute()
    {
        $status = $this->attributes['status'];
        
        //定義されていない場合空文字を返す
        if (!isset(self::STATUS[$status])) {
            return '';
        }

        return self::STATUS[$status]['label'];
    }
    /**
     * 状態を表すHTMLクラス
     * @return string
     */
    public function getStatusClassAttribute()
    {
        $status = $this->attributes['status'];

        if (!isset(self::STATUS[$status])) {
            return '';
        }

        return self::STATUS[$status]['class'];
    }
}
