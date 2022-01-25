<?php

namespace App\Models\Forum;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;

    public $fillable = [    // 사용할 컬럼 지정
        'title',
        'content',
        'user_id',
        'created_at',
        'updated_at',

    ];

    public $casts = [       // 불변 타입 지정

        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];


}
