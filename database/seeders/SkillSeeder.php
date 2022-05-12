<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            ['skill_name'=>'PHP','skill_status' => 1],
            ['skill_name'=>'Laravel','skill_status' => 2],
            ['skill_name'=>'Javascript','skill_status' => 3],
        ]);
    }
}
