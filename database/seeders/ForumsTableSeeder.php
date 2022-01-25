<?php

namespace Database\Seeders;

use App\Models\Forum\Forum;
use Illuminate\Database\Seeder;

class ForumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Forum::factory(20)->create();
    }
}
