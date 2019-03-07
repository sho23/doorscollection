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
            ["Cafe", 'カフェ', 'cat01.jpg', 1],
            ["Restaurant", '飲食店', 'cat02.jpg', 2],
            ["Rental Space", 'レンタルスペース', 'cat03.jpg', 3],
            ["Shop", 'ショップ', 'cat04.jpg', 4],
            ["Beauty", "ビューティ", 'cat05.jpg', 5],
            ['Music', 'ミュージック', 'cat06.jpg', 6],
            ['Fitness', 'フィットネス', 'cat07.jpg', 7],
            ['Others', 'その他', 'cat99.jpg', 99]
        ];
		foreach ($categories as $category) {
            DB::table('categories')->insert([
                'id' => $category[3],
            	'name' => $category[0],
                'ja_name' => $category[1],
                'img_url' => $category[2]
            ]);
        }
    }
}