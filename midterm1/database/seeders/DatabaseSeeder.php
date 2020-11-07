<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('applicants')->insert([
            'name' => Str::random(6),
            'surname' => Str::random(10),
            'position' => Str::random(6),
            'phone' => 321931,
            'is_hired' => rand(0, 1)
        ]);
    }
}
