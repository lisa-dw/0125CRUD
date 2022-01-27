<?php

namespace App\Models\Forum;

use App\Models\User;
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


    public function user()  //포링키로 준비가 되어있을 때, 가능하다. / 여기는 다대일 중 일의 입장이기 때문에 함수명을 단수로 써준다.
    {
        return $this->belongsTo(User::class);   //Forum은 User를 가질 수 있다. 는 의미
    }

}
