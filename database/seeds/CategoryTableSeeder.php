<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$categories = [
            ["Cafe", 'カフェ', 'cat01.jpg'],
            ["Restaurant", 'レストラン', 'cat02.jpg'],
            ["Rental Space", 'レンタルスペース', 'cat03.jpg'],
            ["Bar", 'バー', 'cat04.jpg'],
            ["Beauty", "美容", 'cat05.jpg'],
            ['LIVE HOUSE', 'ライブハウス', 'cat06.jpg'],
            ['Fitness', 'フィットネス', 'cat07.jpg']
        ];
		foreach ($categories as $category) {
            DB::table('categories')->insert([
            	'name' => $category[0],
                'ja_name' => $category[1],
                'img_url' => $category[2]
            ]);
        }
    }
}