<?php
/**
 * Created by PhpStorm.
 * User: jimliu
 * Date: 15-4-23
 * Time: 下午10:30
 */

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insert_data=[
            ['name'=>'laravel'],
            ['name'=>'git'],
            ['name'=>'composer'],
            ['name'=>'mysql'],
            ['name'=>'LAMP']
        ];
        DB::table('category')->insert($insert_data);

    }

}