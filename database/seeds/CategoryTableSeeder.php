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
		$categories = [["locality", 'エリア'], ["lodging", '住まい'], ["parking", '駐車場'], ["point_of_interest", '重要な地点'], ["sublocality_level_1", "小エリア"], ['cafe', 'カフェ'], ['book_store', '書店'], ['restaurant', 'レストラン'], ['clothing_store', '洋服'], ['health', '医療機関'], ['shopping_mall', 'ショッピングモール'], ['furniture_store', '家具']];
		foreach ($categories as $category) {
            DB::table('categories')->insert([
            	'name' => $category[0],
            	'ja_name' => $category[1]
            ]);
        }
    }
}