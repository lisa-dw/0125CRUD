<?php

namespace App\Models;

use App\Models\Forum\Forum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'acc'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',

        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    public function forums()        //내가 가지고있는 글들을 본다는 메서드. / 여기는 다대일 중 다의 입장이기 때문에 함수명을 복수로 써준다.
    {
       return $this->hasMany(Forum::class);   // User는 Forum을 많이 가질 수 있다. 는 의미
    }

     //서로의 아이디를 갖지 않아도, 서로를 부를 수 있는 코드
     //Models 파일에서 이 함수를 사용할 수 있는 이유는 table에 설정이 되어있기 때문이다.
     //get 에서 사용.

    //belongsToMany:많은 것들 안에 속할 수 있다.
    //User가 Forum 안에 많이 속할 수 있다는 뜻. / => 다대다, 일대다의 개념
}
