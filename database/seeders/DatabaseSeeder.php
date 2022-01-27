<?php

namespace Database\Seeders;

use App\Models\Forum\Forum;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        if(config('database.default') !== 'sqlite'){
            DB::statement('SET FOREIGN_KEY_CHECKS=0');  // 외래키 때문에 생기는 오류를 줄이기 위해서 쓰는 코드1
        }


        Forum::truncate();  //truncate() : 데이터가 누적되는 것을 막기 위해서 만들 때마다 비워주기 위해 사용하는 코드 / 삭제한다는 뜻. /순서:외래키 먼저 기재한다.
        User::truncate();

        $this->call(UsersTableSeeder::class);   // 데이터를 시드 해주는 코드.
        $this->call(ForumsTableSeeder::class);



        if(config('database.default') !== 'sqlite'){
            DB::statement('SET FOREIGN_KEY_CHECKS=1');  // 외래키 때문에 생기는 오류를 줄이기 위해서 쓰는 코드2
        }

    }
}
