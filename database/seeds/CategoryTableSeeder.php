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
            ["Restaurant", '飲食店', 'cat02.jpg'],
            ["Rental Space", 'レンタルスペース', 'cat03.jpg'],
            ["Shop", 'ショップ', 'cat04.jpg'],
            ["Beauty", "ビューティ", 'cat05.jpg'],
            ['Music', 'ミュージック', 'cat06.jpg'],
            ['Fitness', 'フィットネス', 'cat07.jpg'],
            ['Others', 'その他', 'cat99.jpg']
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