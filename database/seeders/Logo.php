<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Logo extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB:table('wp_users')->insert([
            'user_login' => 'sage',
            'user_pass' => 'sage',
            'user_nicename' => 'sage',
            'user_email' => 'sage',
            'display_name' => 'sage',
            'user_registered' => 'sage',
        ]);
    }
}
