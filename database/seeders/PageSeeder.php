<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        //
        DB::table('pages')->insert([
            [
                'title'=>'Home',
                'end_point'=>'/home',

            ],
            [
                'title'=>'Markets',
                'end_point'=>'/markets',

            ],
            [
                'title'=>'About',
                'end_point'=>'/about',

            ],
            [
                'title'=>'Blog',
                'end_point'=>'/blog',

            ],
            [
                'title'=>'careers',
                'end_point'=>'/careers',

            ],
            [
                'title'=>'Education',
                'end_point'=>'/education',

            ],
            [
                'title'=>'Contact',
                'end_point'=>'/contact',

            ],

        ]);

    }
}
