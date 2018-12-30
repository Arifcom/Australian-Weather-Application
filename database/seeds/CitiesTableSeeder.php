<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('city')->insert([ 'name' => 'Sydney', 'latitude' => '-33.79', 'longitude' => '151.27', ]);
        DB::table('city')->insert([ 'name' => 'Melbourne', 'latitude' => '-37.81', 'longitude' => '144.97', ]);
        DB::table('city')->insert([ 'name' => 'Brisbane', 'latitude' => '-27.47', 'longitude' => '153.03', ]);
        DB::table('city')->insert([ 'name' => 'Perth', 'latitude' => '-31.92', 'longitude' => '115.91', ]);
        DB::table('city')->insert([ 'name' => 'Adelaide', 'latitude' => '-34.93', 'longitude' => '138.6', ]);
        DB::table('city')->insert([ 'name' => 'Newcastle', 'latitude' => '-32.94', 'longitude' => '151.77', ]);
        DB::table('city')->insert([ 'name' => 'Canberra', 'latitude' => '-35.31', 'longitude' => '149.14', ]);
        DB::table('city')->insert([ 'name' => 'Wollongong', 'latitude' => '-34.44', 'longitude' => '150.89', ]);
        DB::table('city')->insert([ 'name' => 'Geelong', 'latitude' => '-38.18', 'longitude' => '145.11', ]);
        DB::table('city')->insert([ 'name' => 'Townsville', 'latitude' => '-19.25', 'longitude' => '146.8', ]);
        DB::table('city')->insert([ 'name' => 'Cairns', 'latitude' => '-16.88', 'longitude' => '145.75', ]);
        DB::table('city')->insert([ 'name' => 'Toowoomba', 'latitude' => '-27.62', 'longitude' => '151.77', ]);
        DB::table('city')->insert([ 'name' => 'Darwin', 'latitude' => '-12.8', 'longitude' => '130.96', ]);
        DB::table('city')->insert([ 'name' => 'Launceston', 'latitude' => '-41.46', 'longitude' => '147.08', ]);
        DB::table('city')->insert([ 'name' => 'Ballarat', 'latitude' => '-37.56', 'longitude' => '143.82', ]);
        DB::table('city')->insert([ 'name' => 'Bendigo', 'latitude' => '-36.76', 'longitude' => '144.28', ]);
        DB::table('city')->insert([ 'name' => 'Mackay', 'latitude' => '-21.16', 'longitude' => '149.1', ]);
        DB::table('city')->insert([ 'name' => 'Mandurah', 'latitude' => '-32.55', 'longitude' => '115.75', ]);
        DB::table('city')->insert([ 'name' => 'Rockhampton', 'latitude' => '-23.39', 'longitude' => '150.5', ]);
        DB::table('city')->insert([ 'name' => 'Bundaberg', 'latitude' => '-24.84', 'longitude' => '152.02', ]);
        DB::table('city')->insert([ 'name' => 'Bunbury', 'latitude' => '-36.24', 'longitude' => '139.97', ]);
        DB::table('city')->insert([ 'name' => 'Wagga Wagga', 'latitude' => '-35.16', 'longitude' => '147.51', ]);
        DB::table('city')->insert([ 'name' => 'Hervey Bay', 'latitude' => '-25.35', 'longitude' => '152.89', ]);
        DB::table('city')->insert([ 'name' => 'Coffs Harbour', 'latitude' => '-30.34', 'longitude' => '153.07', ]);
        DB::table('city')->insert([ 'name' => 'Mildura', 'latitude' => '-34.18', 'longitude' => '142.16', ]);
        DB::table('city')->insert([ 'name' => 'Gladstone', 'latitude' => '-31.06', 'longitude' => '152.77', ]);
        DB::table('city')->insert([ 'name' => 'Shepparton', 'latitude' => '-36.36', 'longitude' => '145.4', ]);
        DB::table('city')->insert([ 'name' => 'Tamworth', 'latitude' => '-30.96', 'longitude' => '150.83', ]);
        DB::table('city')->insert([ 'name' => 'Port Macquarie', 'latitude' => '-31.4', 'longitude' => '152.85', ]);
        DB::table('city')->insert([ 'name' => 'Orange', 'latitude' => '-33.12', 'longitude' => '149.03', ]);
        DB::table('city')->insert([ 'name' => 'Dubbo', 'latitude' => '-32.2', 'longitude' => '148.9', ]);
        DB::table('city')->insert([ 'name' => 'Geraldton', 'latitude' => '-28.79', 'longitude' => '114.6', ]);
        DB::table('city')->insert([ 'name' => 'Bathurst', 'latitude' => '-33.91', 'longitude' => '149.33', ]);
        DB::table('city')->insert([ 'name' => 'Warrnambool', 'latitude' => '-38.36', 'longitude' => '142.44', ]);
        DB::table('city')->insert([ 'name' => 'Lismore', 'latitude' => '-28.61', 'longitude' => '153.04', ]);
    }
}
