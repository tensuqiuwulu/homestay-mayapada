<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brandbook;

class BrandbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brandbook = [
            ['lang' => 'English', 'link' => 'https://drive.google.com/file/d/1Rmh1_gHKUHpVHt7_Wy34DKpC-x29JFPd/view?usp=sharing'],
            ['lang' => 'Indonesia', 'link' => 'https://drive.google.com/file/d/1xZ-ya6Sr4yHobh0VU0wPP7hUY3d_Ry2P/view?usp=sharing'],
        ];

        Brandbook::insert($brandbook);
    }
}
