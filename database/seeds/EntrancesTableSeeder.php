<?php

use Illuminate\Database\Seeder;

class EntrancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entrances')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'name' => 'タリーズ　たまプラーザ駅前店',
            'address' => '神奈川県横浜市青葉区新石川2-1-15',
            'detail' => '駅直通の渡り廊下にある。改札徒歩2分',
            'img_url' => 'IMG_1970.jpg',
          	'status' => 1
        ]);
    }
}
