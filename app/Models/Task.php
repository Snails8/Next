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
        'status',
        'description',
        
    ];

    const STATUS = [
        1 => [ 'label' => '悪い', 'class' => 'label-danger' ],
        2 => [ 'label' => '普通', 'class' => 'label-info' ],
        3 => [ 'lable' => '良い', 'class' => '' ],
    ];
}
