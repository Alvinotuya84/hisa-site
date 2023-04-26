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
                'slug'=>'/home',
                'content'=>json_encode(
                    [
                        'welcome_insights'=>[
                            'title'=>"The word's most powerful app",
                            'description'=>'Bring your trading ventures go around the world, way beyond the space of your trading account.',
                            'title'=>"The word's most powerful app",
                            'description'=>'Bring your trading ventures go around the world, way beyond the space of your trading account.',
                        ],
                        'investment_steps'=>[
                            'description'=>"Choose an account tier and submit your application",
                            'description'=>"Choose an account tier and submit your application",
                            'description'=>"Choose an account tier and submit your application",


                        ],
                        'download_text'=>"Trade with Hisa app and trade directly with leading platform"

                    ]
                )
                    ],
                    [
                        'title'=>'About',
                        'slug'=>'/about',
                        'content'=>[
                            'title'=>"Putting our clients first since 1986",
                            'title_description'=>"For more than 30 years, we’ve been empowering clients by helping them take control of their financial lives.",
                            'purposes'=>[
                                [
                                    'title'=>"Our goal",
                                    'icon'=>"fa-hourglass-end",
                                    "description"=>""

                                ]
                                ],
                            'team'=>[
                                "team_title"=>"Putting our clients first since 2020",
                                "team_description"=>"Serving more than 5 years, we’ve been empowering clients by helping them take control of their finances",
                                "leaders"=>[
                                    'name'=>"Eric Jackson",
                                    
                                ]
                            ]

                        ]
                    ]
        ]);

    }
}
