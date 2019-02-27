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

        $entrances = [
            [2,"黄金バンカ麺 中目黒店","中目黒の商店街をまっすぐ進んだところに大きな看板あり。真っ白な建物","東京都目黒区上目黒2-38-11","0004.jpeg"],
            [2,"パティスリー ポタジエ （patisserie Potager）","中目黒の商店街をまっすぐ進んだところにテラスがあり、カラフルな建物","東京都目黒区上目黒2-44-9","0005.jpeg"],
            [2,"中目黒グリル","ワインレッドの看板が煌々と照らされているおしゃれなお店","東京都目黒区上目黒2-37-12 コンフォート中目黒101","0006.jpeg"],
            [2,"新潟 三宝亭 東京ラボ 中目黒店","黒塗りの建物。よく人が並んでいます","東京都目黒区上目黒2-44-5","0007.jpeg"],
            [2,"幸楽","わかりやすい看板が光っている建物の、階段を登ったところ","東京都目黒区上目黒2-44-3","0008.jpeg"],
            [2,"asit（アジト）","白い建物の2階のタイ料理。中目黒の商店街をまっすぐ進んだところの花屋さんの隣のビル","東京都目黒区上目黒2-44-3 2F","0009.jpeg"],
            [2,"焼肉鍋問屋　志方","グレーの入り口を地下に降りていくとあります。大きめのビルの隣","東京都目黒区上目黒2-44-24 COMSI 中目黒 B1F","0010.jpeg"],
            [2,"鶏ノ屋","大きめの飲食店ビルと有名店志方の間にある路地をまっすぐいくとエレベーターや階段あり。そこの3階","東京都目黒区上目黒2-44-24 COMS中目黒Ⅰ 3F","0011.jpeg"],
            [2,"炉端の佐藤","中目黒の高架下をまっすぐ道沿いに進んだところにある黒い建物。人でよく賑わっています！","東京都目黒区上目黒3-5-22","0012.jpeg"],
            [2,"バインセオサイゴン中目黒店","中目黒の高架下を進んだところにある、カラフルな看板が並ぶ店","東京都目黒区上目黒３丁目５−２２","0013.jpeg"],
            [2,"原宿餃子樓～ハノイの風～","中目黒の高架下にある白い建物","東京都目黒区上目黒３−５−２４","0014.jpeg"],
            [2,"のどぐろ屋牡蠣右衛門 │ 中目黒","中目黒の高架下にある建物。店の入り口には牡蠣の殻が大量にぶら下がっている","東京都目黒区上目黒3-5-24","0015.jpeg"],
            [2,"焼肉 治郎丸","中目黒の高架下にある建物。おしゃれな店構えに木製の看板あり","東京都目黒区上目黒３丁目５−２４","0016.jpeg"],
            [2,"寿司の磯松 中目黒店","暗めの建物。中目黒の高架下にある。暖簾がかかっています","東京都目黒区上目黒３丁目５−２５","0017.jpeg"],
            [2,"松 まつもと","中目黒の商店街をまっすぐ進んだところに、ひっそりと佇む和食の名店。普通の一軒家の1階といった雰囲気です","東京都目黒区上目黒２丁目２４−１４","0018.jpeg"],
            [2,"松 まつもと","道の曲がり角にある建物","東京都目黒区上目黒２丁目２４−１４","0020.jpeg"],
            [2,"れきお","中目黒商店街の左手にある、提灯のついたお店。沖縄感があります","東京都目黒区上目黒２丁目２４−１４","0025.jpeg"],
            [2,"れきお","中目黒商店街の左手にある、提灯のついたお店。沖縄感があります","東京都目黒区上目黒２丁目２４−１４","0026.jpeg"],
            [2,"後楽寿司","中目黒商店街の道から左にそれて数秒歩いたところにある、木製の建物。看板がわかりにくいですのでお気をつけください","東京都目黒区上目黒２丁目２４−１","0027.jpeg"],
            [2,"後楽寿司","中目黒商店街の道から左にそれて数秒歩いたところにある、木製の建物。看板がわかりにくいですのでお気をつけください","東京都目黒区上目黒２丁目２４−１","0028.jpeg"],
            [2,"中目黒麦","中目黒商店街の道から左にそれて15秒程歩いたところにある、木製の建物。麦という看板がわかりやすく立っています","東京都目黒区上目黒２丁目１８−９","0031.jpeg"],
            [2,"R−Breeze Golf Club","中目黒商店街沿いにある、地下の建物。ファミリーマートの下にあります","東京都目黒区 2丁目18−2","0032.jpeg"],
            [2,"澤田接骨治療院","中目黒商店街沿いにある、古めの建物。わかりやすい看板あり","東京都目黒区上目黒２丁目１６−１１","0033.jpeg"],
            [2,"中目黒 楽屋","がくやではなく、らくや。シースルーの少し高めの建物の一階","東京都目黒区上目黒２丁目１５−６","0036.jpeg"],
            [2,"ホルモンとく中目黒","楽屋が一階に入っている店の2階。ビルに入ってすぐ右手にある階段を登って入り口へ向かいます","東京都目黒区上目黒２−１５−６ 諸橋ビル","0036.jpeg"],
            [2,"Le pere (ル·ペール)","中目黒商店街沿いにある、黒地のシースルーの建物。看板が立っておらず、入り口にちょっと読みにくい形で店名表記あり","東京都目黒区上目黒２丁目１６−１４","0037.jpeg"],
            [2,"フォレスト美容室","中目黒商店街沿いにあり、大黒屋の上にある、芸能人も多く訪れる美容室","東京都目黒区上目黒２丁目１６−１５","0038.jpeg"],
            [2,"タイダイニングソイ7 中目黒店","中目黒商店街から左手の道に入ってまっすぐ。曲がり角には看板が立てかけられている。木製のタイ料理屋","東京都目黒区上目黒２丁目１２−７","0039.jpeg"],
            [2,"トラスパレンテ 中目黒","中目黒商店街を少し歩いたところにある、木製建物の1階。看板が照らされているためわかりやすい","東京都目黒区上目黒２丁目１２−１１ FDビルディング 1F","0041.jpeg"],
            [2,"トラスパレンテ 中目黒","中目黒商店街を少し歩いたところにある、木製建物の1階。隣にはパン屋さん、もう片方がスイーツのお店","東京都目黒区上目黒２丁目１２−１１ FDビルディング 1F","0042.jpeg"],
            [2,"しゃぶしゃぶ温野菜 中目黒店","中目黒商店街沿いにあるビルの2階。FD Buildingという建物を狭い入り口から入り、階段を登って店へ","東京都目黒区 上目黒２丁目１２−１１ ＦＤビルディング ２Ｆ","0043.jpeg"],
            [2,"しゃぶしゃぶ温野菜 中目黒店","中目黒商店街沿いにあるビルの2階。FD Buildingという建物を狭い入り口から入り、階段を登って店へ","東京都目黒区 上目黒２丁目１２−１１ ＦＤビルディング ２Ｆ","0044.jpeg"],
            [2,"和ｓ","中目黒南出口を出て数分歩けばつく、古い木製の店構え。入り口に観葉植物あり","東京都目黒区上目黒２丁目１４−３","0045.jpeg"],
            [2,"もつ焼き ばん 中目黒本店","レモンサワーを生み出した名店。いつも人が並んでいる木製の和食店","東京都目黒区上目黒２丁目１４−３","0046.jpeg"],
            [2,"鰓呼吸 中目黒","中目黒南出口を出て数分歩けばつく、古い木製の店構え。夜になれば煌々と光るイルミネーションがつく。","東京都目黒区上目黒２丁目１４−２","0047.jpeg"],
            [2,"鍋焼ぼうず 中目黒店","中目黒南出口を出て数分歩けばつく、黒い看板の地下の店。看板が大きいためわかりやすいはず","東京都目黒区上目黒２丁目１４−１","0048.jpeg"],
            [2,"ビストロオーズ","中目黒南出口を出て数分歩けばつく、階段を登って2階にある店。大きめの看板メニューが店前に立てかけられています","東京都目黒区上目黒２丁目１４−１ カドヤビル 1F","0049.jpeg"],
            [2,"㐂道庵","中目黒南出口を出て右に行けばすぐにつく、古めの建物の一階です。「そば」という言葉がすぐみつかるはず","東京都目黒区上目黒３丁目７−３","0050.jpeg"],
            [2,"創作和食 だん","中目黒南出口を出て右に進み、そのまままっすぐ路地を少し進んだところにある建物。階段を登って2階","東京都目黒区上目黒３丁目７−１１ 松村ビル2F","0052.jpeg"],
            [2,"創作和食 だん","中目黒南出口を出て右に進み、そのまままっすぐ路地を少し進んだところにある建物。階段を登って2階","東京都目黒区上目黒３丁目７−１１ 松村ビル2F","0053.jpeg"],
            [2,"鶏亭SaCURAサクラ 【中目黒】","中目黒南出口を出て右に進み、そのまままっすぐ路地を少し進むと右手に見える建物。階段を登って2階","東京都目黒区上目黒３丁目３−１２ ペニービル４F","0054.jpeg"],
            [2,"ももたろう 中目黒店","中目黒南出口を出て右に進み、そのまままっすぐ路地を少し進むと右手に見える建物。おしゃれな入り口を降りて地下へ","東京都目黒区上目黒３丁目３−１２ ペニービル B1F","0055.jpeg"],
            [2,"二子玉川ライズ ドッグウッドプラザ","改札を出てすぐ左に曲がるとある複合施設","東京都世田谷区玉川２丁目２３−１","0912.jpeg"],
            [2,"鳥良 二子玉川店","大通りに面したビル。ビルの入り口には大きな看板あり","東京都世田谷区 玉川２丁目２４−７ 萩原第２ビル5F","0913.jpeg"],
            [2,"玉響（たまゆら）二子玉川","大通りに面したビルの3階。ビルの入り口に大きな看板あり","東京都世田谷区玉川2-24-7 萩原第２ビル　３Ｆ","0914.jpeg"],
            [2,"ポール・スミス 二子玉川店","大通りに面したポールスミスのビル。わかりやすく目立つ","東京都世田谷区玉川２丁目２４−１１","0915.jpeg"],
            [2,"パタゴニア 東京・二子玉川","大通りに面した茶色の建物。夜であれば看板が光る","東京都世田谷区玉川２丁目２４−１１","0916.jpeg"],
            [2,"九つ井玉川高島屋S.C店","大通りに面した木製の入り口の建物。暖簾がかかっていて目立ちます","東京都世田谷区玉川2丁目２４−１２","0917.jpeg"],
            [2,"九つ井玉川高島屋S.C店","大通りに面した木製の入り口の建物。暖簾がかかっていて目立ちます","東京都世田谷区玉川2丁目２４−１２","0918.jpeg"],
            [2,"つばめグリル 玉川高島屋S・C店","大通りに面しており、駅から道の反対側。道の曲がり角にある","東京都世田谷区玉川３丁目１７−１ 玉川高島屋S・C","0919.jpeg"],
            [2,"RHカフェ 二子玉川店","大きめの建物で、大通りを背にして右奥に階段あり。3階まで登ったところに入り口","東京都世田谷区玉川４丁目１−２５ 髙島屋S・Cアイビーズプレイス 3F","0923.jpeg"],
            [2,"Brooks Brothers","大通りから一本中に入った路地にあり。大きな建物と看板が目印","東京都世田谷区 世田谷区玉川4-4-1 花みず木ビル ","0924.jpeg"],
            [2,"SPICE AVEDA 玉川高島屋S・C店","大通りから一本中に入った路地にあり。Brooks Brothersと同じ建物の2階"," 東京都世田谷区玉川区４−４−１ 花みず木コート２F","0924.jpeg"],
            [2,"京都牛焼肉 すみれ家 二子玉川店","わかりやすい看板あり。入り口は階段を登って2階","東京都世田谷区玉川３丁目２０−１","0926.jpeg"],
            [2,"麺匠 濱星 二子玉川店","暗めの建物に、わかりやすい提灯と看板あり。","東京都世田谷区玉川３丁目２０−２ マノア玉川1F","0928.jpeg"],
            [2,"貮古玉一本堂","黒目の建物にわかりやすい看板あり。入り口は地下へおりていったところ","東京都世田谷区玉川 3-20-2-B1F","0929.jpeg"],
            [2,"TRAD BARBER STYLE【二子玉川駅/理容室/メンズカット】","大きめの看板と、シースルーの入り口あり","東京都世田谷区 玉川3-20-4 1F-A号室グランフォレ","0931.jpeg"],
            [2,"Gemini Theater","地下へおりていく階段あり。ライブハウス","東京都世田谷区玉川３丁目２０−１１ Ｂ１","0933.jpeg"],
            [2,"逸喜優","大きく寿司と記載された緑色ののれんあり。茶色の建物の一階","東京都世田谷区玉川３丁目２０−５","0934.jpeg"],
            [2,"寿司とく","わかりやすい看板あり。白と緑ののれんあり","東京都世田谷区玉川３丁目１５−１３","0938.jpeg"],
            [2,"鮎ラーメン","いつも行列ができている。大きく鮎と記載された暖簾あり","東京都世田谷区玉川３丁目１５−１２ 玉川３丁目マンション","0941.jpeg"],
            [2,"いっせいらーめん","白の建物の中に白い暖簾がかかっている","東京都世田谷区玉川３丁目１５−１２ 玉川三丁目マンション","0942.jpeg"],
            [2,"四川飯店","白いアパートの一階にわかりやすい看板あり。","東京都世田谷区玉川３丁目１５−１２ 玉川三丁目マンション１Ｆ","0944.jpeg"],
            [2,"ポニー・クリーニング 二子玉川店","青い看板あり。白い建物の一階にあり。","東京都世田谷区玉川３丁目１５−７","0945.jpeg"],
            [2,"バルカヘアサロン","石造りの建物の、地下一階。建物の入り口には白い大きな看板が光っています","東京都世田谷区玉川３丁目１５−６ フェリス玉川B1F","0946.jpeg"],
            [2,"バルカヘアサロン","石造りの建物の、地下一階。建物の入り口には白い大きな看板が光っています","東京都世田谷区玉川３丁目１５−６ フェリス玉川B1F","0947.jpeg"],
            [2,"中国家庭料理 上海","駅から割と離れた暗めの道の一角にあります。上海という看板が大きく光っているのでよくわかるはず。現地にお住いの方でよく賑わっている様子","東京都世田谷区玉川３丁目２４−１７","0948.jpeg"],
            [2,"ラーメン博多濃麻呂","木製の看板がライトアップされています。駅から向かうと割と見つけにくいので注意が必要","東京都世田谷区玉川３丁目１４−６","0949.jpeg"],
            [2,"おねぎや","大きな看板と明るい店の雰囲気から、すぐ見つけられるはず。建物の一階","東京都世田谷区玉川３丁目１４−７ フラッツビル１F","0950.jpeg"],
            [2,"ジェイエステティック 二子玉川店","おねぎやが一階に入っている建物の2階にあり。駅から離れた側に階段があり、そこを登って2階へ。","東京都世田谷区玉川３丁目１４−７ フラッツ ビル 2F","0951.jpeg"],
            [2,"あひるの台所","メインの道から一本入った路地に面した店。明るい看板で、建物の一階にあり","東京都世田谷区玉川３丁目１４−７","0953.jpeg"],
            [2,"焼肉 蔵月","メインの道から一本入った路地に面した店。黒の建物に木製の入り口","東京都世田谷区玉川３丁目１４−９","0954.jpeg"],
            [2,"キッチン＆バー まるうめ","メインの道から一本入った路地に面した店。雰囲気のある木製の入り口。","東京都世田谷区玉川３丁目１１−１ 柳小路東角3F","0955.jpeg"],
            [2,"キッチン＆バー まるうめ","メインの道から一本入った路地に面した店。雰囲気のある木製の入り口。","東京都世田谷区玉川３丁目１１−１ 柳小路東角3F","0956.jpeg"],
            [2,"ピッツェリア トラットリア メッシーナ","メインの道から一本入った路地に面した店。黄色の看板で大きく表示されている","東京都世田谷区玉川３丁目１４−９","0957.jpeg"],
            [2,"ピッツェリア トラットリア メッシーナ","木製の入り口と白いたてもの、そして黄色い看板","東京都世田谷区玉川３丁目１４−９","0958.jpeg"],
            [2,"青柚子 二子玉川店","大きめの建物の一階。わかりやすく青柚子と書かれた看板あり","東京都世田谷区玉川３−１４−５ 柳小路西角","0959.jpeg"],
            [2,"青柚子 二子玉川店","大きめの建物の一階。わかりやすく青柚子と書かれた看板あり","東京都世田谷区玉川３−１４−５ 柳小路西角","0960.jpeg"],
            [2,"さかなや かねなり","おしゃれなグレーの建物の2階。この階段を登って2階へ","東京都世田谷区玉川３丁目１３−７ 柳小路南角2F","0962.jpeg"],
            [2,"さかなや かねなり","おしゃれなグレーの建物の2階。階段を登った先にあり","東京都世田谷区玉川３丁目１３−７ 柳小路南角2F","0963.jpeg"],
            [2,"二子玉川 まんぷく","おしゃれなグレーの建物の2階。階段を登った先にあり","東京都世田谷区玉川３丁目１３−８ 柳小路南角2F","0964.jpeg"],
            [2,"按田餃子 二子玉川店","シースルーの建物。一階にあり","東京都世田谷区玉川３丁目１３−８","0966.jpeg"],
            [2,"二子玉きんしゃい","普通のアパートの一階に、おしゃれな木製の看板あり","東京都世田谷区玉川３丁目１３−５","0967.jpeg"],
            [2,"ナイトホークス Nighthawks","白いアパート風の建物に、小さく看板がかかっている。駅から少し離れているため、見つけにくいかもしれません。","東京都世田谷区 玉川3-13-5二子玉川パークサイドマンション川原ビル101","0968.jpeg"],
            [2,"ナイトホークス Nighthawks","白いアパート風の建物に、小さく看板がかかっている。駅から少し離れているため、見つけにくいかもしれません。","東京都世田谷区 玉川3-13-5二子玉川パークサイドマンション川原ビル101","0969.jpeg"],
            [2,"麺屋みちしるべ","大きめの看板でわかりやすい場所。駅からは離れている","東京都世田谷区玉川３丁目１３−４","0970.jpeg"],
            [2,"麺屋みちしるべ","大きめの看板でわかりやすい場所。駅からは離れている","東京都世田谷区玉川３丁目１３−４","0971.jpeg"],
            [2,"麺屋みちしるべ","入り口が二つあり、どちらかも入れる様子","東京都世田谷区玉川３丁目１３−４","0972.jpeg"],
            [2,"季節料理ゆうき","駅からは少し離れており、路地の角あたりにある。店の前には小さな看板あり","東京都世田谷区玉川３丁目１２−３","0973.jpeg"],
            [2,"リヴィエール玉川","レンガ風の入り口。大きな看板とライトアップされた雰囲気がおしゃれ","東京都世田谷区玉川３丁目１２−５","0974.jpeg"],
            [2,"Luna Nokto OYAMADA","路地に面している黄色でライトアップされた階段を登って2階へ。建物の前にはメニューが置かれています","東京都世田谷区玉川３丁目１２−４ BLD.NIMO 2F","0975.jpeg"],
            [2,"Luna Nokto OYAMADA","路地に面している黄色でライトアップされた階段を登って2階へ。建物の前にはメニューが置かれています","東京都世田谷区玉川３丁目１２−４ BLD.NIMO 2F","0977.jpeg"],
            [2,"にこたま写真館 Nicori 二子玉川店","路地に面している建物。大きめの看板に小さく店名の記載あり","東京都世田谷区玉川３丁目１２−４ ＮＩＭＯビル","0978.jpeg"],
            [2,"LOVE ワインとビストロのお店","レンガ風の建物の地下一階。地下への階段の前には店名の看板と、ウィンナーの大きい版のようなオブジェクトあり","東京都世田谷区玉川３丁目１２−５ nico nicoビル b1F","0979.jpeg"],
            [2,"琉球国ダイニング＆バーてぃだの花","華やかな入り口がある建物の、階段を登ったところにある","東京都世田谷区玉川３丁目１２−５ サンリビル1F","0980.jpeg"],
            [2,"琉球国ダイニング＆バーてぃだの花","華やかな入り口がある建物の、階段を登ったところにある","東京都世田谷区玉川３丁目１２−５ サンリビル1F","0981.jpeg"],
            [2,"玉の蔵二子玉川店","店名が書かれた暖簾がわかりやすい。入り口の前にベンチがあり、たるが置かれている","東京都世田谷区 玉川３丁目１３−８七のはなビル1F","0982.jpeg"],
            [2,"玉の蔵二子玉川店","店名が書かれた暖簾がわかりやすい。入り口の前にベンチがあり、たるが置かれている","東京都世田谷区 玉川３丁目１３−８七のはなビル1F","0983.jpeg"],
            [2,"炭寅二子玉川店","薬院炭寅と書かれた看板が、茶色の入り口に立てかけられている。店は見つけやすい","東京都世田谷区玉川３丁目１１−１ 柳小路東角1F","0984.jpeg"],
            [2,"串亭 二子玉川柳小路","茶色の建物の入り口に大きく店名の書かれた看板あり","東京都世田谷区玉川３丁目１１−１","0985.jpeg"],
            [2,"博多もつ鍋 馬肉 九州自慢 二子玉川店","建物の中にエレベータがあり、3階に登る","東京都世田谷区玉川３丁目１１−１ 柳小路東角3F","0986.jpeg"],
            [2,"ダリアロッソ 二子玉川","茶色の竹でできた入り口に、大きめな花のマークが記載された暖簾がかかっている","東京都世田谷区玉川３丁目１１−１","0987.jpeg"],
            [2,"ダリアロッソ 二子玉川","茶色の竹でできた入り口に、大きめな花のマークが記載された暖簾がかかっている","東京都世田谷区玉川３丁目１１−１","0988.jpeg"],
            [2,"ディングル","大きな看板あり。建物の一階でcafeとかかれた立て看板あり","東京都世田谷区玉川３丁目１０−５","0989.jpeg"],
            [2,"ディングル","大きな看板あり。建物の一階でcafeとかかれた立て看板あり","東京都世田谷区玉川３丁目１０−５","0990.jpeg"],
            [2,"ＳＨＵＴＴＥＲＳ 二子玉川","入り口に肉の絵が書かれた看板あり。店のドアの上には店名が記載されている","東京都世田谷区玉川 8 12 3","0991.jpeg"],
            [2,"ル・マグレブ","一見普通の家の一階であり、赤く店名が記載されている。目立つ為わかりやすいはず","東京都世田谷区玉川3-10-11 １Ｆ","0992.jpeg"],
            [2,"ル・マグレブ","一見普通の家の一階であり、赤く店名が記載されている。目立つ為わかりやすいはず","東京都世田谷区玉川3-10-11 １Ｆ","0993.jpeg"],
            [2,"ウールジィ","広めのテラスと木製の扉の入り口あり","東京都世田谷区玉川３丁目９−７ ベルウッド玉川 1F","0994.jpeg"],
            [2,"ウールジィ","広めのテラスと木製の扉の入り口あり","東京都世田谷区玉川３丁目９−７ ベルウッド玉川 1F","0995.jpeg"],
            [2,"焼肉じゅん","オレンジの看板が立てかけられた場所の前にある階段をおりて地下へ。地下の入り口の上には店名が記載された看板あり","東京都世田谷区玉川３丁目９−３ STREAM TAMAGAWA B1F","0996.jpeg"],
            [2,"WA 魚 鉄板 たまたま 二子玉川","白めの建物の一階。入り口近くには店名が記載された大きめの提灯あり","東京都世田谷区玉川３丁目１２−２ T&M","0997.jpeg"],
            [2,"魚ます","煌々とてらされた建物に、大きく店名が記載された看板あり","東京都世田谷区玉川３丁目９−２","0998.jpeg"],
            [2,"おでん家みどり","スナックが多く入っているビルの3階にある。エレベーターで3階へ。","東京都世田谷区玉川 Unnamed Road ３ 丁目","0999.jpeg"],
            [2,"ブルーブランシュ","入り口にテラスがあり、木製の入り口","東京都世田谷区玉川３丁目１２−１３","1000.jpeg"],
            [2,"5JET ai HAPPY HAIR MAKE | 二子玉川 美容室 ","グレーの建物の2階","東京都世田谷区玉川３丁目４−２ ベルフラット玉川2F","1001.jpeg"],
            [2,"NIJYU-MARU 二子玉川店","路地の角にあり、大きく店名が記載された白い看板あり","東京都世田谷区玉川３丁目４−２ ベルフラット玉川","1002.jpeg"],
            [2,"うまいもん酒場 えこひいき 二子玉川店","わかりやすく光る看板あり。地下におりて左側の店。","東京都世田谷区玉川３丁目４−２ ベルフラット玉川","1003.jpeg"],
            [2,"二子 玉川 アプレ","普通のレジデンスのような茶色の建物の一階に入っている。店名が輝く看板があり、わかりやすい。","東京都世田谷区玉川３丁目９−７","1005.jpeg"],
            [2,"和牛赤身焼肉と樽生ワインの店 JIN‐じん‐ 二子玉川店","白い看板が立てかけられており、建物の場所はわかりやすい。階段を登って2階にあがったところ。","東京都世田谷区玉川３丁目９−２ 土屋ビル２階","1006.jpeg"],
            [2,"ます家","灰色の建物の一階で、大きく店名が書かれた看板あり。シースルー","東京都世田谷区玉川３丁目９−２ 土屋ビル1F","1007.jpeg"],
            [2,"出汁豚しゃぶ ・ろくまる 二子玉川店","大きく丸の中に六とかかれた暖簾あり。灰色の建物。","東京都世田谷区 玉川 ３丁目 ５ ７ 黒川ビル1F","1008.jpeg"],
            [2,"BAR　417","茶色のレンガ風の建物の3階。階段を登って上へ。","東京都世田谷区玉川3-5-7 黒川ビル2F","1009.jpeg"],
            [2,"ジャンズベトナム料理店","茶色のレンガ風の建物の3階。階段を登って上へ。","東京都世田谷区玉川３丁目５−７ 黒川ビル ３Ｆ","1009.jpeg"],
            [2,"ラ シオン","茶色のレンガ風の建物の2階。階段を登って上へ。","東京都世田谷区玉川３丁目５−７ 黒川ビル","1009.jpeg"],
            [2,"ウェイウェイ台所 二子玉川店","グレーのビルの1階で、シースルーとなっている。入り口はわかりやすい看板が立てかけられている","東京都世田谷区玉川３丁目６−５ MREビル1F","1010.jpeg"],
            [2,"東京酒BAL 塩梅","グレーのビルの地下一階。入り口は1階の上海料理の左手","東京都世田谷区玉川 3-6-5 Mreビルb1階","1011.jpeg"],
            [2,"ウェイウェイ台所 二子玉川店","グレーのビルの1階で、シースルーとなっている。入り口はわかりやすい看板が立てかけられている","東京都世田谷区玉川３丁目６−５ MREビル1F","1012.jpeg"],
            [2,"箪首の寅","白塗りの建物に、木製の看板が立てかけられている。冊子の引き戸","東京都世田谷区玉川3-11-1 柳小路東角　１Ｆ","1013.jpeg"],
            [2,"ベリーアイズ 二子玉川店","細めの道に面している白い建物の3階。階段を登って上へ","東京都世田谷区玉川３丁目５−１","1014.jpeg"],
            [2,"串むすび・琢 二子玉川店","大通りと小道の交差する角にある。看板が照らされているため、わかりやすいはず","東京都世田谷区玉川３丁目５−１","1015.jpeg"],
            [2,"魚民 二子玉川駅前店","大通りに面している。店名が大きく書かれた看板あり","東京都世田谷区 玉川3-6-5 サン玉川ビル 2階、3階","1016.jpeg"],
            [2,"やきとり家 すみれ 二子玉川店","大通りに面している。入り口が少しわかりにくい場所にあるため注意","東京都世田谷区玉川３丁目６−１","1017.jpeg"],
            [2,"サロン・ド・ファースト","駅すぐの白いビルの2階。","東京都世田谷区玉川３丁目６−１３","1018.jpeg"],
            [2,"こどもクラブ二子玉川教室","駅すぐの白いビルの3階。赤い看板あり。","東京都世田谷区玉川３丁目６−１２","1019.jpeg"],
            [2,"NICOTAMA DAYS CAFE","大きめの建物の1階。駅すぐの大通りに面している。","東京都世田谷区玉川２丁目２２−１３ 東急二子玉川駅改札外","1021.jpeg"],
            [2,"二子玉川ライズ・ ショッピングセンター","改札出て右に少し進めばある、大きい建物","東京都世田谷区玉川２丁目２１−１","1022.jpeg"],
            [2,"アンティコカフェ アルアビス 二子玉川店","RISEの1階。ちょっとした広場に面している。","東京都世田谷区 玉川２−２１−１ ライズショッピングセンター 1F","1023.jpeg"],
            [2,"アイビアー・ルサンパーム 二子玉川ライズ","RISEの1階の店の並びにある。ちょっとした広場に面している。","東京都世田谷区玉川２丁目２１−１ 二子玉川ライズ・ショッピングセンター・タウンフロント 1F","1024.jpeg"],
            [2,"アイビアー・ルサンパーム 二子玉川ライズ","RISEの1階の店の並びにある。ちょっとした広場に面している。","東京都世田谷区玉川２丁目２１−１ 二子玉川ライズ・ショッピングセンター・タウンフロント 1F","1025.jpeg"],
            [2,"アイビアー・ルサンパーム 二子玉川ライズ","RISEの1階の店の並びにある。ちょっとした広場に面している。","東京都世田谷区玉川２丁目２１−１ 二子玉川ライズ・ショッピングセンター・タウンフロント 1F","1026.jpeg"],
            [2,"二子玉川 蔦屋家電","駅を右に出て少し歩いたところ。大きく看板あり。","東京都世田谷区玉川１丁目１４−１ 二子玉川ライズＳ．Ｃ．テラスマーケット","1027.jpeg"],
            [2,"ＤＩＹ・ＦＡＣＴＯＲＹ・ＦＵＴＡＧＯＴＡＭＡＧＡＷＡ","エスカレーターを登ったところにある。おしゃれな看板が立てかけられている","東京都世田谷区玉川１丁目１４−１ 二子玉川ライズＳ.Ｃ. テラスマーケット 2F","1028.jpeg"],
            [2,"ガーデンズ・マルシェ 二子玉川店","エスカレーターを登ったところにある。店の前には果物がたくさん","東京都世田谷区玉川１丁目１４−１ 二子玉川ライズＳ.Ｃ. テラスマーケット 2F","1029.jpeg"],
            [2,"マヨルカ","エスカレーターを登り、少しまっすぐ歩いたところにあるおしゃれな店。黒と赤の色使い","東京都世田谷区玉川１丁目１４−１ 二子玉川ライズＳ.Ｃ. テラスマーケット 2F","1030.jpeg"],
            [2,"マヨルカ","エスカレーターを登り、少しまっすぐ歩いたところにあるおしゃれな店。黒と赤の色使い","東京都世田谷区玉川１丁目１４−１ 二子玉川ライズＳ.Ｃ. テラスマーケット 2F","1031.jpeg"],
            [2,"一風堂 二子玉川ライズ S.C.店","エスカレーターを登り、まっすぐ歩いたところにある。大きな看板あり。","東京都世田谷区玉川１丁目１−１４−１ 二子玉川ライズＳ.Ｃ.テラスマーケット2階","1032.jpeg"],
            [2,"バビーズ 二子玉川","エスカレーターを登り、まっすぐ歩いたところの左手にあり。シースルーの建物","東京都世田谷区玉川１丁目１４−１ 二子玉川ライズ S.C. テラスマーケット","1033.jpeg"],
            [2,"100本のスプーン 二子玉川","エスカレーターを登り、まっすぐ歩いたところにある。左手にある、シースルーの建物","東京都世田谷区 玉川１丁目１４−１ 二子玉川ライズＳ.Ｃ. テラスマーケット 2F","1034.jpeg"],
            [2,"ONNABON","エスカレーターを登り、まっすぐ歩いたところにある。ライトグリーンの看板に店名が記載されているシースルーの建物","東京都世田谷区玉川１丁目１５","1035.jpeg"],
            [2,"Good meals shop","エスカレーターを登ったところにある。大きく店名が記載された看板あり","東京都世田谷区玉川１丁目１４−１ 二子玉川ライズＳ.Ｃ. テラスマーケット 2F （二子玉川 蔦屋家電内","1036.jpeg"],
            [2,"Chopped Salad Days 二子玉川","駅の改札出て右に2回曲がるとある、おしゃれな店。夜はライトアップが綺麗","東京都世田谷区玉川２丁目２１−１ 二子玉川ライズＳＣ ステーションマーケット 1F","1037.jpeg"],
            [2,"コメダ珈琲店 三軒茶屋店","地下鉄を出てすぐ、明るめの階段を登って2階へ","東京都世田谷区 三軒茶屋１丁目３８−８ ステーションプラザロイヤルビル","1038.jpeg"],
            [2,"銀座アスター 三軒茶屋賓館","階段を登って建物2階。赤い看板あり","東京都世田谷区三軒茶屋１丁目３９−７ ベルアージュ2F","1039.jpeg"],
            [2,"銀座アスター 三軒茶屋賓館","階段を登って建物2階。赤い看板あり","東京都世田谷区三軒茶屋１丁目３９−７ ベルアージュ2F","1040.jpeg"],
            [2,"銀座アスター 三軒茶屋賓館","階段を登って建物2階。赤い看板あり","東京都世田谷区三軒茶屋１丁目３９−７ ベルアージュ2F","1041.jpeg"],
            [2,"三河屋","大通り沿いにある、うなぎ屋さん。店名が書かれた大きな看板がある","東京都世田谷区玉川３丁目２３−２５ ビーンズ二子玉川 1F","1042.jpeg"],
            [2,"モスバーガー 三軒茶屋店","大通りに面しており、緑の明るい看板あり","東京都世田谷区三軒茶屋１丁目４１−９","1043.jpeg"],
            [2,"キッチン アレックス","大通りに面しており、角にある。大きく町の洋食屋さんと記載された看板あり","東京都世田谷区三軒茶屋１丁目４１−１１","1044.jpeg"],
            [2,"キッチン アレックス","大通りに面しており、角にある。大きく町の洋食屋さんと記載された看板あり","東京都世田谷区三軒茶屋１丁目４１−１１","1045.jpeg"],
            [2,"沖縄大衆居酒屋 おりおん酒場","大通りに面しており、白く光る看板あり。地下一階へ","東京都世田谷区太子堂１丁目１２−２５ SUN-TビルB1","1046.jpeg"],
            [2,"FaSS 三軒茶屋店","おりおん酒場の入っている建物の1階。シースルーで店内の様子がすぐわかる","東京都世田谷区太子堂１丁目１２−２５ SUN-Tビル1F","1047.jpeg"],
            [2,"HEYDAY","ピザが書かれた看板があり、入り口の前には店名が書かれた大きなビール瓶","東京都世田谷区 太子堂1-12-29ダイアパレス三軒茶屋103","1048.jpeg"],
            [2,"味噌一 三軒茶屋店","大通りに面しており、黒塗りの看板に赤い店名が浮かぶ。","東京都世田谷区 太子堂1-12-38 藤和三軒茶屋コープ1F","1051.jpeg"],
            [2,"味噌一 三軒茶屋店","大通りに面しており、黒塗りの看板に赤い店名が浮かぶ。","東京都世田谷区 太子堂1-12-38 藤和三軒茶屋コープ1F","1052.jpeg"],
            [2,"瀬戸内バル Collabo","赤く大きな看板にて店名が記載され、ライトアップされているおしゃれ店","東京都世田谷区太子堂１−６−９","1053.jpeg"],
            [2,"Pepe rosso ","大通りから一本脇に入った道にあり。赤い看板に店名が記載されている","東京都世田谷区太子堂1-12-23 第一ゴールドビル1階","1054.jpeg"],
            [2,"Pepe rosso ","大通りから一本脇に入った道にあり。赤い看板に店名が記載されている","東京都世田谷区太子堂1-12-23 第一ゴールドビル1階","1055.jpeg"],
            [2,"だるま　三軒茶屋","大通りから一本脇に入った道にあり。青紫の看板あり","東京都世田谷区三軒茶屋１丁目４１−１４ 猪野ビル","1056.jpeg"],
            [2,"糧","大通りから一本脇に入った道にあり。灰色の建物の地下1階。","東京都世田谷区三軒茶屋１丁目４１−１５ ドエルタク B1F","1057.jpeg"],
            [2,"さつまDining5:5","大通りから一本脇に入った道にあり。木製の看板に店名が書かれている","東京都世田谷区 三軒茶屋1-40-14 太子堂ハイム 1F","1058.jpeg"],
            [2,"中元寺","大通りから一本脇に入った、細い道に面している。灰色の建物の2階にあり","東京都世田谷区 三軒茶屋１丁目４１−１４","1059.jpeg"],
            [2,"中元寺","大通りから一本脇に入った、細い道に面している。灰色の建物の2階にあり","東京都世田谷区 三軒茶屋１丁目４１−１４","1060.jpeg"],
            [2,"Red・Ai","大通りから一本脇に入った、細い道に面している。白い建物に店名の記載あり","東京都世田谷区三軒茶屋１丁目４１−１３","1061.jpeg"],
            [2,"大衆酒場 スシスミビ","大通りから一本脇に入った、細い道に面している。シースルーの外観で店名が記載された暖簾がかかっている","東京都世田谷区三軒茶屋１丁目４０−１０","1062.jpeg"],
            [2,"三河屋","大通り沿いにある、うなぎ屋さん。店名が書かれた大きな看板がある","東京都世田谷区三軒茶屋１丁目４１−７","1063.jpeg"],
            [2,"鶏ジロー 三軒茶屋店","黒い外観に大きく店名が記載されている","東京都世田谷区三軒茶屋１丁目３６−１３","1064.jpeg"],
            [2,"みるまま","普通の一軒家の外観。明るい看板に店名が記載されている","東京都世田谷区三軒茶屋１丁目３６","1065.jpeg"],
            [2,"串揚 風","黒い扉に店名が記載されている。細い道に面している"," 東京都世田谷区三軒茶屋１丁目３６−１３","1066.jpeg"],
            [2,"赤うさぎ","カラフルな看板に店名が記載されている。細い道に面している","東京都世田谷区三軒茶屋１丁目３６−１３","1067.jpeg"],
            [2,"稲穂","赤提灯で店名の記載あり。細い道に面している","東京都世田谷区三軒茶屋１丁目３６−１３","1068.jpeg"],
            [2,"もつ焼一角","黒と黄色の屋根とシースルーの外観。細い道に面している","東京都世田谷区三軒茶屋１丁目３６−１３","1069.jpeg"],
            [2,"もつ焼一角","黒と黄色の屋根とシースルーの外観。細い道に面している","東京都世田谷区三軒茶屋１丁目３６−１３","1070.jpeg"],
            [2,"もつ焼一角","黒と黄色の屋根とシースルーの外観。細い道に面している","東京都世田谷区三軒茶屋１丁目３６−１３","1071.jpeg"],
            [2,"志が良㐂","黒の木製の扉と、ライトアップされた店名が記載された看板あり","東京都世田谷区三軒茶屋１丁目３６−１２","1072.jpeg"],
            [2,"くいもの屋わん 三軒茶屋店","大通りから一本入った道に面している。階段を登って二階へ","東京都世田谷区三軒茶屋１丁目３７−１３ オアシス三軒茶屋ビル2F","1073.jpeg"],
            [2,"築地すし好 三軒茶屋店","シースルーの建物の入り口上に、店名が記載された看板あり","東京都世田谷区三軒茶屋１丁目３７−１３","1074.jpeg"],
            [2,"味倶楽部 くらりす","細長い建物の1階付近には紫色の看板が立てかけられている","東京都世田谷区三軒茶屋１丁目３７−１４ EVE三軒茶屋 3F","1075.jpeg"],
            [2,"バルセン 三軒茶屋店","細い道に目立つ外観。黒色の看板に店名の記載あり","東京都世田谷区三軒茶屋１丁目３６−８ 1F 由上ビル","1076.jpeg"],
            [2,"木村屋本店 三軒茶屋駅前","黄色の看板に男性の絵が記載されている。グレーの建物。","東京都世田谷区三軒茶屋１丁目３６−８ 由上ビル","1077.jpeg"],
            [2,"大衆馬肉酒場 ジョッキー 三軒茶屋","細長い階段を登って2階へ。白く目立つ看板あり","東京都世田谷区三軒茶屋１丁目３７−１ ２Ｆ","1078.jpeg"],
            [2,"麺屋 藤しろ 三軒茶屋店","白い看板に店名の記載あり。","東京都世田谷区三軒茶屋１丁目３７−１","1079.jpeg"],
            [2,"蜷尾家/NINAO 三軒茶屋店","大通りから一本入った道に面している。店の前にはベンチあり。白い建物。","東京都世田谷区三軒茶屋１丁目３３−１５","1080.jpeg"],
            [2,"隠れ家和食 和処ととし 三軒茶屋","大通りから一本入った道に面している。左手に地下へ。","東京都世田谷区三軒茶屋１丁目３６−６","1081.jpeg"],
            [2,"大阪焼肉・ホルモン ふたご 三軒茶屋店","黒い建物。入り口付近に階段あり。","東京都世田谷区三軒茶屋１丁目３６−６ ラビ三軒茶屋 1F","1082.jpeg"],
            [2,"大阪焼肉・ホルモン ふたご 三軒茶屋店","黒い建物。入り口付近に階段あり。","東京都世田谷区三軒茶屋１丁目３６−６ ラビ三軒茶屋 1F","1083.jpeg"],
            [2,"大阪焼肉・ホルモン ふたご 三軒茶屋店","黒い建物。入り口付近に階段あり。","東京都世田谷区三軒茶屋１丁目３６−６ ラビ三軒茶屋 1F","1084.jpeg"],
            [2,"和食ダイニング 73","大通りから一本入った道に面している。左手側の細い階段を登って2階へ","東京都世田谷区三軒茶屋１丁目３６−５ ラック三軒茶屋ビル 3F","1085.jpeg"],
            [2,"うまえびす 三軒茶屋店","大通りから一本入った道に面している。左手側にあり、大きな看板があり、地下1階へ","東京都世田谷区三軒茶屋１丁目３６−５ ラック三軒茶屋B１F","1086.jpeg"],
            [2,"オムニ食堂三軒茶屋店","緑色の看板で大きく店名の記載あり。","東京都世田谷区三軒茶屋１丁目３６−３","1087.jpeg"]
        ];
        foreach ($entrances as $entrance) {
            DB::table('entrances')->insert([
                'category_id' => $entrance[0],
                'user_id' => 1,
                'name' => $entrance[1],
                'address' => $entrance[3],
                'detail' => $entrance[2],
                'img_url' => $entrance[4],
                'status' => 1
            ]);
        }
    }
}
