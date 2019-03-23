<?php

use Illuminate\Database\Seeder;

class AlterEntrancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $entrances = [
			[2, "しぶや駄菓子バー", "渋谷の大通りに面している白いビルに入っている。階段かエレベーターで2階へ。", "東京都渋谷区宇田川町２６−５", "1577.jpeg", "139.69884", "35.659994"],
			[2, "味源 渋谷店", "大通りに面しているラーメン屋。わかりやすく店名が黒い看板に記載されている", "東京都渋谷区宇田川町２６−７", "1578.jpeg", "139.698812", "35.660138"],
			[2, "discland JARO", "路地に面しているジャズバー。緑色の入り口が特徴的", "東京都渋谷区宇田川町２６−６", "1579.jpeg", "139.698737", "35.659991"],
			[2, "Tokyo Fight Club Bar&Show Restaurant", "路地に面しているスタンディングの居酒屋。階段を登って2階へ。", "東京都渋谷区宇田川町１３−８ ちとせ会館 階, 5", "1580.jpeg", "139.698537", "35.661235"],
			[2, "Dining Bar かくれが 渋谷道玄坂店", "路地に面している赤い外観が特徴の店。奥まった暗い道に面しているので見つけにくい", "東京都渋谷区宇田川町２６ Unnamed Road、２６", "1581.jpeg", "139.698945", "35.660063"],
			[2, "SAMURAI EXCHANGE Shibuya Center Street Sation", "路地に面している両替所。白い看板が特徴的。", "東京都渋谷区宇田川町２６−７", "1581.jpeg", "139.698812", "35.660138"],
			[2, "桂花ラーメン 渋谷センター街店", "路地に面しているラーメン屋。白い看板に店名が記載されている", "東京都渋谷区宇田川町２７−１", "1582.jpeg", "139.698654", "35.660224"],
			[2, "赤ちり亭 渋谷センター街店", "渋谷バスケット通りに面した赤い建物に入っている。入り口には大きく店名が書かれた看板あり", "東京都渋谷区宇田川町２５ センタービル B1F 5 25", "1583.jpeg", "139.698915", "35.660474"],
			[1, "椿屋カフェ 渋谷店", "渋谷バスケット通りに面した赤い建物に入っている。入り口には大きく店名が書かれた看板があり、2.3階に入っている", "東京都渋谷区宇田川町２５−２５−４", "1583.jpeg", "139.697442", "35.661358"],
			[2, "鳥貴族 渋谷センター街店", "渋谷バスケット通りに面した赤い建物に入っている。入り口には大きく店名が書かれた看板あり", "東京都渋谷区宇田川町２５−５ センタービル４F", "1583.jpeg", "139.698923", "35.660385"],
			[99, "麻雀かめきたざわ 渋谷店", "渋谷バスケット通りに面した赤い建物に入っている。入り口には大きく店名が書かれた看板あり", "東京都渋谷区２５ 宇田川町２５−５ センタービル5F", "1583.jpeg", "139.698923", "35.660386"],
			[2, "魚がし日本一 渋谷道玄坂店", "渋谷バスケット通りに面している。入り口の上には大きく店名が書かれた看板がかかっている", "東京都渋谷区道玄坂２丁目９−１", "1584.jpeg", "139.698162", "35.65891"],
			[2, "米助渋谷店", "渋谷バスケット通りに面している。入り口の上には大きく店名が書かれた看板がかかっている", "東京都渋谷区宇田川町２５−６ B2 三愛ビルB1", "1585.jpeg", "139.69884", "35.660455"],
			[2, "やきとり○金渋谷センター街店", "渋谷バスケット通りに面している。マクドナルドが入っているビルの5階であり、マクドナルドの入り口左側にあるエレベータで5階へ", "東京都渋谷区宇田川町２８ 宇田川町28-15 サンマルジェビル5F", "1586.jpeg", "139.698192", "35.660382"],
			[2, "ねぎし　渋谷店", "路地に面している。グレーな建物の地下1階。", "東京都渋谷区宇田川町２８−１ 高山ランド第15ビル", "1587.jpeg", "139.698359", "35.660349"],
			[2, "味噌麺処 伝蔵 渋谷センター街店", "路地に面したラーメン屋。看板が掛けられている", "東京都渋谷区宇田川町２８−１ 山田ビル１Ｆ", "1587.jpeg", "139.698359", "35.660349"],
			[2, "トロル　渋谷店", "路地に面したグレーな建物の中。エレベーターで登って2階へ。", "東京都渋谷区宇田川町２８−１ 高山ランド第15ビル2F", "1587.jpeg", "139.698359", "35.660349"],
			[99, "カラオケルーム　ビックワン", "路地に面したグレーな建物の中。エレベーターで登って3階へ。", "東京都渋谷区宇田川町２８−１ 高山ランド第15ビル3F", "1587.jpeg", "139.698359", "35.660349"],
			[2, "喰べ物や花子っ子渋谷センター街店", "路地に面したグレーな建物の中。エレベーターで登って4階へ。", "東京都渋谷区宇田川町２８−１ 高山ランド第15ビル4F", "1587.jpeg", "139.698359", "35.660349"],
			[2, "居酒屋バル 串バル", "路地に面したグレーな建物の中。エレベーターで登って6階へ。", "東京都渋谷区宇田川町２８−１−６ F", "1587.jpeg", "139.698367", "35.660344"],
			[2, "kawara CAFE＆DINING（瓦カフェ&ダイニング）宇田川店", "路地に面したシルバーの建物の7階。エレベーターで登る", "東京都渋谷区宇田川町３６−６ ワールド 宇田川ビル7F", "1588.jpeg", "139.69744", "35.661757"],
			[2, "#802 CAFE&DINER（ハチマルニ カフェ&ダイナー）渋谷店", "路地に面したシルバーの建物の8階。エレベーターで登る", "東京都渋谷区宇田川町２８−３ いちご渋谷文化村通りビル8階", "1588.jpeg", "139.698217", "35.66021"],
			[2, "鳥じゅん", "路地に面した店。提灯がかかっていてわかりやすい", "東京都新宿区西新宿１丁目４−６", "1601.jpeg", "139.698413", "35.692951"],
			[2, "Road House Dining Beer Bar ロードハウス ダイニング ビアバー 新宿", "路地の角にある店。グレーの建物の入り口には大きく店名が記載されている", "東京都新宿区西新宿1-4-19ミルトスビル1・2F", "1604.jpeg", "139.698622", "35.693037"],
			[2, "ボルガ", "路地に面した、普通の一軒家の外観の店。入り口には店名が書かれた看板がかかっている", "東京都新宿区西新宿１丁目４−１８", "1605.jpeg", "139.69838", "35.69309"],
			[2, "やまと", "黄色の看板が特徴的。入り口が分かりにくいので注意", "東京都新宿区西新宿１丁目４−１８", "1606.jpeg", "139.69838", "35.69309"],
			[2, "Bar Glass", "路地に面した店。店の入り口の前には立て看板が置かれている", "東京都新宿区西新宿１丁目４ 東京都新宿区西新宿1-4-17 あかねや高橋ビル2F", "1607.jpeg", "139.698494", "35.692915"],
			[2, "淀橋再生市場", "黒と白の外観の建物。入り口の上には木製の看板が掛けられている", "東京都新宿区西新宿１丁目１４−１７", "1608.jpeg", "139.696864", "35.689188"],
			[2, "絶品小籠包 満月廬 新宿離宮（新宿西口）", "明るくオレンジに照らされた外観。店の前には大きく店名が書かれた看板が掛けられている", "東京都新宿区西新宿１丁目４−１５ 1～4F 高松ビル", "1609.jpeg", "139.697905", "35.693182"],
			[2, "絶品小籠包 満月廬 新宿離宮（新宿西口）", "明るくオレンジに照らされた外観。店の前には大きく店名が書かれた看板が掛けられている", "東京都新宿区西新宿１丁目４−１５ 1～4F 高松ビル", "1610.jpeg", "139.697905", "35.693182"],
			[2, "ステーキ ダイニング G4U", "青く照らされた入り口を入って地下へ。路地に面している。", "東京都新宿区西新宿１丁目４−１５ 高松ビルB1F", "1611.jpeg", "139.697905", "35.693182"],
			[2, "絶品小籠包 満月廬 新宿離宮（新宿西口）", "明るくオレンジに照らされた外観。店の前には大きく店名が書かれた看板が掛けられている", "東京都新宿区西新宿１丁目４−１５ 1～4F 高松ビル", "1612.jpeg", "139.697905", "35.693182"],
			[2, "絶品小籠包 満月廬 新宿離宮（新宿西口）", "明るくオレンジに照らされた外観。店の前には大きく店名が書かれた看板が掛けられている", "東京都新宿区西新宿１丁目４−１５ 1～4F 高松ビル", "1613.jpeg", "139.697905", "35.693182"],
			[2, "吉野家 新宿センタービル店", "特徴的なオレンジの看板がかかっており、わかりやすい", "東京都新宿区西新宿１丁目２５−１ 新宿センタービル地下１階", "1614.jpeg", "139.695305", "35.691809"],
			[2, "日高屋 西新宿1丁目店", "グレーの建物の一階に入っており、店名が分かりやすく看板に書かれている", "東京都新宿区西新宿１丁目１４−６ B1-1F 新宿西勢ビル", "1615.jpeg", "139.696989", "35.688601"],
			[2, "日高屋 西新宿1丁目店", "グレーの建物の一階に入っており、店名が分かりやすく看板に書かれている", "東京都新宿区西新宿１丁目１４−６ B1-1F 新宿西勢ビル", "1616.jpeg", "139.696989", "35.688601"],
			[2, "焼肉食べ放題 カルビちゃん 新宿店", "一階に日高屋がはいった建物の2,3階。階段を上って2階へ。", "東京都新宿区新宿３丁目２３−１１", "1617.jpeg", "139.701027", "35.69339"],
			[2, "大勝軒まるいち 新宿店", "きれいな木製のエントランスを地下に進むとある。一見大勝軒には見えない外観なので注意", "東京都新宿区新宿３丁目２３−１２ パンドラビルB1", "1618.jpeg", "139.701155", "35.693384"],
			[2, "Neo Tokyo Fooding Bar MYSTERIOUS 新宿店｜ミステリアス 新宿店", "特徴的な黒い入り口を入って地下へ。路地に面している、ダイコクドラックの隣", "東京都新宿区歌舞伎町１丁目１６−３ セレサ陽栄ビル B1", "1619.jpeg", "139.701957", "35.69374"],
			[2, "お花見ワインバル ESOLA(エソラ) 新宿店", "グレーの建物の5階に入っている。エレベータの前には看板が掛けられている", "東京都新宿区歌舞伎町１丁目１６−３ セレサ陽栄新宿ビル5F", "1620.jpeg", "139.701957", "35.69374"],
			[1, "コメダ珈琲店 新宿靖国通り店", "入り口にはオレンジ色の看板が掛けられており、わかりやすい", "東京都 新宿区歌舞伎町 １丁目-１６-３  セレサ陽栄新宿ビル2F", "1621.jpeg", "139.701957", "35.69374"],
			[99, "麻雀ZOO 新宿西口大ガード店", "大通りに面しており、細い通路を通って建物へ。エレベータを登って上へ", "東京都新宿区西新宿１丁目３−３ 品川ステーションビル新宿３F", "1622.jpeg", "139.698816", "35.693165"],
			[2, "しょうが料理の店 くう 新宿", "白い建物に入っている。建物の入り口には店名が大きく書かれた看板がある", "東京都新宿区歌舞伎町１丁目１６−２ 富士ビルディング", "1623.jpeg", "139.702102", "35.693698"],
			[2, "しょうが料理の店 くう 新宿", "白い建物に入っている。建物の入り口には店名が大きく書かれた看板がある", "東京都新宿区歌舞伎町１丁目１６−２ 富士ビルディング", "1624.jpeg", "139.702102", "35.693698"],
			[2, "牛かつあおな西武新宿駅前店", "大通りに面した建物の地下一階。松屋の入った建物の地下。", "東京都新宿区歌舞伎町 新居ビル１階１丁目-２４-3", "1626.jpeg", "139.700561", "35.694474"],
			[2, "松屋 新宿歌舞伎町店", "大通りに面した建物の一階。シースルーの入り口が特徴的", "東京都新宿区歌舞伎町１丁目２２−８", "1626.jpeg", "139.701213", "35.694904"],
			[2, "ねぎし 新宿エルタワー店", "大通りに面した建物の2F。エレベータを登って上へ。", "東京都新宿区西新宿１丁目６−１ 新宿エルタワー B2F", "1626.jpeg", "139.69728", "35.692154"],
			[2, "うまいもの居酒家 うとっこ", "大通りに面した建物の5F。エレベータを登って上へ。", "東京都新宿区６ 新宿区歌舞伎町１丁目６−３", "1626.jpeg", "139.702554", "35.693609"],
			[2, "炉とマタギ", "大通りに面した建物の6F。エレベータを登って上へ。", "東京都新宿区歌舞伎町１丁目６−３ 石塚ビル6階", "1626.jpeg", "139.702494", "35.693657"],
			[2, "かまどか 新宿靖国通り店", "大通りに面した建物の7F。エレベータを登って上へ。", "東京都新宿区歌舞伎町１丁目６−３ 石塚ビル７Ｆ", "1626.jpeg", "139.702494", "35.693657"],
			[2, "赤から 新宿靖国通リ店", "大通りに面した建物の地下一階。階段を下りて地下へ", "東京都新宿区歌舞伎町１丁目６−３ 東海苑ビル B1F", "1627.jpeg", "139.702494", "35.693657"],
			[2, "HUB新宿靖国通り店", "大通りに面した建物に入っている。黒い外観。", "東京都新宿区歌舞伎町１丁目６−１ シロービルB1F", "1630.jpeg", "139.702785", "35.693587"],
			[99, "Exchangers Shinjuku / エクスチェンジャーズ 新宿歌舞伎町店", "建物の入り口には黄色で大きく店名が記載されている", "東京都新宿区歌舞伎町１丁目５−９", "1631.jpeg", "139.703366", "35.693446"],
			[2, "金の蔵 新宿靖国通り2号店", "大通りに面しており、大きく店名が書かれた入り口から地下へ", "東京都新宿区歌舞伎町１丁目１−１９ 同栄新宿ビル", "1632.jpeg", "139.704016", "35.693248"],
			[2, "金の蔵 新宿靖国通り2号店", "大通りに面しており、大きく店名が書かれた入り口から地下へ", "東京都新宿区歌舞伎町１丁目１−１９ 同栄新宿ビル", "1633.jpeg", "139.704016", "35.693248"],
			[2, "サイゼリヤ 新宿区役所前店", "大通りに面しており、駅からは数分歩いたところにある。階段を上って2階へ", "東京都新宿区歌舞伎町１丁目１−１９ 同栄新宿ビル", "1634.jpeg", "139.704016", "35.693248"],
			[1, "喫茶室ルノアール 新宿区役所横店", "大通りに面しており、駅からは数分歩いたところにある。一階に入っている", "東京都新宿区歌舞伎町１丁目３−５ 相模観光ビルイーストプラザ １Ｆ", "1634.jpeg", "139.703549", "35.694509"],
			[5, "ヘアリゾート 粋", "ブランエスパに入っている店。地下2階にある", "東京都新宿区新宿５丁目１７−１１ 白鳳ビルディングB1", "1648.jpeg", "139.70556", "35.692882"],
			[1, "No Bird", "ブランエスパに入っている店。地下1階にある", "東京都中央区銀座７丁目３−７ ブランエスパ銀座B1F", "1648.jpeg", "139.760456", "35.670322"],
			// [2, "銀座東興楼", "銀座の大通りに面した店。赤い看板が目立っている。", "東京都中央区銀座7丁目4−13", "1649.jpeg", "139.760787", "35.66993"],　画像が存在しない
			[2, "乾山 銀座七丁目店", "大通りに面している。シルバーの建物を登って2階へ。", "東京都中央区銀座７丁目３−９ 銀座リービル2階", "1650.jpeg", "139.760403", "35.670161"],
			[1, "銀座 和蘭豆 銀座店", "道の角に位置する。店名が書かれた看板が特徴的。", "東京都中央区銀座７−３−１３ ニューギンザビル", "1652.jpeg", "139.760159", "35.670133"],
			[2, "のとだらぼち", "大通りに面している地下の店。階段の上には白く光る看板あり。", "東京都中央区銀座８丁目４−２７ プラーザ銀座ビル B1F", "1653.jpeg", "139.760414", "35.669619"],
			[5, "美容室Ｇ’Ｓ", "大通りに面している。白い建物の前には店名が書かれた看板あり。", "東京都中央区４ 銀座8丁目4−27", "1654.jpeg", "139.760456", "35.669612"],
			[2, "銀座奥田", "大通りに面した地下の店。入り口前には看板がかけられ、階段の前には木製の看板が光る。", "東京都中央区銀座５丁目４−８", "1655.jpeg", "139.763009", "35.671424"],
			// [1, "CABIN NAKA-MEGURO", "川沿いの細い道に入って30秒程。右手に見えるシースルーの建物。", "東京都目黒区中目黒 1-10-23 リバーサイドテラス 101", "1658.jpeg", "139.70141", "35.643101"],
			[1, "ユイット", "川沿いの細い道に入って30秒程。右手に見える光る店。看板が置かれている。", "東京都目黒区中目黒１丁目１０−２３ リバーサイドテラス", "1659.jpeg", "139.70141", "35.643101"],
			[2, "NARITAYUKATA", "川沿いの細い道に入って30秒程。右手に見える白い建物。", "東京都目黒区中目黒１丁目１０−２３", "1660.jpeg", "139.70141", "35.643101"],
			[2, "水炊き しみず", "川沿いの細い道に入って30秒程。右手に見える木製の建物。入り口前には小さく看板が置かれている。", "東京都目黒区１０ 中目黒1−10−23 リバーサイドテラス104", "1661.jpeg", "139.701396", "35.643027"],
			[2, "成吉思汗 ふじや", "川沿いの細い道に入って30秒程。右手に見える木製の店。店名が書かれた提灯がかかっている。", "東京都目黒区中目黒１丁目１０−２３", "1662.jpeg", "139.70141", "35.643101"],
			[2, "焼鶏あきら 中目黒本店", "川沿いの細い道に入って30秒程。右手に見える石造りの建物。", "東京都目黒区１０ 中目黒１丁目１０番地２３ リバーサイドテラス１０６", "1663.jpeg", "139.70141", "35.643102"],
			[2, "渋谷 中国料理 白鳳", "バスケット通りに面している。階段を下りて地下へ。", "東京都渋谷区宇田川町２４−１ 高木ビルB１階", "1666.jpeg", "139.699638", "35.660411"],
			[2, "鎌倉野菜とチーズフォンデュ 渋谷ガーデンファーム 渋谷駅前店", "バスケット通りに面している。建物には大きな木の看板がかかっており、そこに店名が書かれている。3階", "東京都渋谷区宇田川町２４−４ センター244 3F", "1667.jpeg", "139.699667", "35.660194"],
			[2, "ビストロバンビーナ 渋谷駅前店｜肉 肉食 ステーキ ローストビーフ 食べ放題 個室｜女子会 歓迎会 宴会におススメ", "バスケット通りに面している。建物に赤い看板がかかっており、そこに店名が書かれている。4階", "東京都渋谷区宇田川町２４−４ センター244ビル4F", "1667.jpeg", "139.699667", "35.660194"],
			[99, "麻雀 カボ 渋谷店", "バスケット通りに面している。看板がいろいろかかっている建物の5階", "東京都渋谷区宇田川町２４ 24-4 センター244ビル 5Ｆ", "1667.jpeg", "139.699523", "35.660241"],
			[99, "ヒカリエ", "大通りに面している。入口は地上階、地下、2階などにあるが、この写真の入り口は地上階。", "東京都渋谷区渋谷２丁目２１−１ ヒカリエ", "1668.jpeg", "139.703554", "35.658924"],
			[2, "築地銀だこハイボール酒場", "大通りに面しており、道の角にある。ヒカリエの隣に位置する", "東京都渋谷区渋谷２丁目２２−２２−１３ 渋谷東口マイアミビル", "1669.jpeg", "139.703174", "35.658508"],
			[2, "すしざんまい 渋谷東口店", "大通りに面しており、白い看板がかかっている。ヒカリエの近く。", "東京都渋谷区渋谷２丁目２２−１１", "1670.jpeg", "139.703223", "35.658444"],
			[2, "本場タイ屋台料理 チャオタイ 渋谷道玄坂店", "大通りに面しており、緑の看板に店名がかかっており、道の角にある。ヒカリエの近く。", "東京都渋谷区道玄坂２丁目９−２", "1671.jpeg", "139.698229", "35.658808"],
			[2, "串かつ でんがな 渋谷店", "大通りに面しており、道の角にある。店名が入口上部の看板に掛けられている", "東京都渋谷区渋谷２丁目２２−１０ タキザワビル1F", "1672.jpeg", "139.703273", "35.658361"],
			[1, "カフェ・ド・クリエ 渋谷３丁目店", "大通りに面している。シースルーの外観が分かり易い", "東京都渋谷区渋谷３丁目８−１２ 渋谷第一生命ビルディング 1F", "1673.jpeg", "139.704128", "35.657555"],
			[99, "アクセア 渋谷店", "大通りに面している。赤い看板がかかっている", "東京都渋谷区渋谷３丁目８−１１ 渋谷三丁目TRビル 1F", "1674.jpeg", "139.704264", "35.657366"],
			[2, "はなまるうどん 渋谷明治通り店", "大通りと路地の交差部分にある。オレンジの看板が分かりやすい", "東京都渋谷区渋谷３丁目９−１１", "1675.jpeg", "139.7047", "35.657194"],
			[99, "ココロゴトsalon", "大通りに面しているグレーの建物の一階。入口上部には店名が記載されている", "東京都渋谷区渋谷３丁目９−１０ ＫＤＣ渋谷ビル", "1676.jpeg", "139.704642", "35.657172"],
			[2, "かつ吉 渋谷店", "大通りに面している茶色の外観。大きく店名が店の入口上部にかかっている", "東京都渋谷区渋谷３丁目９−１０ ＫＤＣ渋谷ビル", "1677.jpeg", "139.704642", "35.657172"],
			[2, "地魚屋台 浜ちゃん 渋谷店", "大通りに面している。店の入り口には暖簾がかかっている。", "東京都渋谷区渋谷３丁目１０−１４ 長崎堂ビル", "1679.jpeg", "139.704936", "35.656877"],
			[2, "つけ麺大臣", "大通りに沿って歩いたところにある。新南口が近い。白く輝く外観の一階に入っている", "東京都渋谷区渋谷３丁目１０−１２", "1680.jpeg", "139.705192", "35.656628"],
			[1, "上島珈琲店 渋谷3丁目店", "大通りに面しており、茶色の外観が特徴的。", "東京都渋谷区渋谷３丁目１１−１１", "1681.jpeg", "139.705478", "35.65658"],
			[2, "サイゼリヤ 渋谷新南口店", "大通りに面しており、緑の看板が特徴的", "東京都渋谷区渋谷３丁目１１−１１ IVYイーストビル", "1682.jpeg", "139.705478", "35.65658"],
			[2, "中村麺兵衛 渋谷店", "大通りに面しており、白い看板が掛けられている", "東京都渋谷区渋谷３丁目１１−８", "1683.jpeg", "139.705389", "35.65645"],
			[1, "スターバックスコーヒー 渋谷３丁目店", "大通りに面しており、シースルーの外観と緑のトレードマークが特徴的", "東京都渋谷区渋谷３丁目１１−７ 第２ミネギシビル", "1684.jpeg", "139.705459", "35.656461"],
			[2, "松屋 渋谷南口店", "大通りに面しており、渋谷新南口を出て少し歩いたところにある。オレンジの看板が光る", "東京都新宿区新宿３丁目３６−１５", "1685.jpeg", "139.702005", "35.690274"],
			[6, "がばすごか", "道の角に位置しており、夜だと紫色の光が特徴的。階段を下りて地下へ", "東京都渋谷区渋谷３丁目１３−９ B1 エトワールＵビル", "1686.jpeg", "139.706161", "35.655867"],
			[2, "海鮮居酒屋 はなの舞 渋谷並木橋店", "大通りに面しており、店名が書かれた看板が特徴的。入口にはメニューが出ている", "東京都渋谷区渋谷３丁目１３−５ BPRレジデンス渋谷2F", "1688.jpeg", "139.706311", "35.655747"],
			[2, "ととしぐれ渋谷店", "大通りに沿って数分歩いたところにある、海鮮居酒屋。狭い入口を降りて地下へ。", "東京都渋谷区渋谷３丁目１３−７", "1689.jpeg", "139.706436", "35.655625"],
			[2, "らーめん山頭火 渋谷店", "大通りに面しているラーメン屋。白い看板が光る", "東京都渋谷区渋谷３丁目１３−７", "1690.jpeg", "139.706436", "35.655625"],
			[5, "渋谷DSクリニック 渋谷院", "大通りから一本道に入ったところに面している。くらい道に、店名が書かれた看板だけが輝く", "東京都渋谷区渋谷３丁目１１−２ パインビル1階", "1691.jpeg", "139.705925", "35.656861"],
			[2, "chopstick cafe 汁べゑ 渋谷店", "大通りから一本入った路地に面している。道の角に位置しており、入口には小さく店名が書かれた看板が掛けられている。階段を下りて地下へ。", "東京都渋谷区渋谷３丁目１０−１０−１", "1692.jpeg", "139.705386", "35.656797"],
			[2, "座空", "大通りから一本入った路地に面している。地下の入り口前には提灯がかかっている", "東京都渋谷区渋谷３丁目１０−１９", "1693.jpeg", "139.705328", "35.657333"],
			[2, "座空", "大通りから一本入った路地に面している。地下の入り口前には提灯がかかっている", "東京都渋谷区渋谷３丁目１０−１９", "1694.jpeg", "139.705328", "35.657333"],
			[2, "南国亭 渋谷駅前店", "大通りから一本入った路地に面している。暗い道に、オレンジの提灯が輝いている", "東京都渋谷区渋谷3-6-16", "1695.jpeg", "139.705134", "35.65763"],
			[2, "ホルイチ", "大通りから一本入った路地に面している。白い建物の入り口の上には店名が大きく書かれた看板が掛けられている", "東京都渋谷区渋谷３丁目6-18 渋谷荻津ビル1F", "1696.jpeg", "139.704856", "35.657591"],
			[2, "山本のハンバーグ 渋谷食堂", "大通りから一本入った路地に面している。道の角に面していて、シースルーの外観が特徴", "東京都渋谷区３丁目-６-１８", "1697.jpeg", "139.705473", "35.657561"],
			[2, "横浜家系ラーメン 檜家", "大通りから一本入った路地に面している。店の入り口の上には店名が書かれた白い看板がかかっている", "東京都渋谷区渋谷３丁目７−５ 大石ビル", "1698.jpeg", "139.704609", "35.657577"],
			[2, "中国厨房 C-MEN-HAN.Shibuya", "大通りから一本入った路地に面している。赤い看板が掛けられている", "東京都渋谷区渋谷３丁目７−６", "1701.jpeg", "139.704561", "35.657508"],
			[2, "俺流塩らーめん 渋谷三丁目店", "大通りから一本入った路地に面している。オレンジ色の看板に店名が記載されている", "東京都渋谷区渋谷３丁目８−７", "1702.jpeg", "139.704442", "35.657436"],
			[2, "風ぐるま", "大通りから一本入った路地に面している。ごちゃっとした建物の入り口から、階段を下りて地下へ。", "東京都渋谷区渋谷3丁目8−7", "1703.jpeg", "139.704442", "35.657436"],
			[99, "ONLY PREMIO TOKYO 有楽町店", "有楽町にあるビル。複数の飲食店が入っている。入口前には案内あり", "東京都千代田区有楽町２丁目２−３ ヒューリックスクエア東京 2F", "1704.jpeg", "139.761131", "35.672788"],
			[2, "Cheer up Tokyo 銀座店", "レンガ風の外観。建物の入り口には読みにくいが店名がかかっている", "東京都有楽町２丁目３−９ ユニオンビルB1F", "1706.jpeg", "139.761516", "35.673086"],
			[2, "北海道ラーメン ひむろ 有楽町店", "レンガ風の外観の入り口には木製の看板が掛けられている", "東京都千代田区有楽町２丁目３−９", "1707.jpeg", "139.761489", "35.673074"],
			[2, "あちこーこー", "有楽町にある沖縄の店。入口の上には大きくオレンジに光る看板がかかっている", "東京都千代田区有楽町３ 1F 新白石ビル 2 3 2", "1708.jpeg", "139.7614", "35.673133"],
			[2, "馬菜 銀座本店(ばさい)", "石造りの外観の入り口上部には馬の形が特徴的な店名がかかっている", "東京都千代田区有楽町２丁目３−２ 新白石ビル B1", "1709.jpeg", "139.761278", "35.673083"],
			[2, "霧笛屋 数寄屋橋店", "路地に面している店。店名が大きく看板に記載されている", "東京都千代田区有楽町２丁目３−１０", "1710.jpeg", "139.761353", "35.673041"],
			[2, "ヒレ肉の宝山 銀座 数寄屋橋店", "闘牛の顔がオブジェとしてかけられた外観。シースルーで店内の様子がうかがえる", "東京都千代田区有楽町２丁目３−１ 福石ビル B1F・1F", "1711.jpeg", "139.761198", "35.672985"],
			[2, "正六", "路地に面している。白い看板に店名が書かれている", "東京都千代田区有楽町２丁目３−１", "1713.jpeg", "139.761198", "35.672985"],
			[2, "八起有楽町店", "路地に面しており角にある。入口の上には大きく店名がかかる白い看板あり", "東京都千代田区有楽町２丁目１−２１", "1715.jpeg", "139.76085", "35.672952"],
			[2, "四万十川", "路地に面しており、角にある。店内は狭く、入口は建物の左端にあるため注意。店の上には大きな看板が掛けられている", "東京都千代田区有楽町２丁目１−２１ 新幹線高架下1階", "1716.jpeg", "139.76085", "35.672952"],
			[2, "居酒屋 千成", "店の入り口の上部には木製の看板がかかっている。路地に面している", "東京都千代田区有楽町２丁目１−１", "1718.jpeg", "139.760617", "35.672535"],
			[2, "鮨大前", "路地に面しており、木製の入り口には店名が書かれた暖簾がかかっている", "東京都千代田区有楽町２丁目１", "1720.jpeg", "139.760717", "35.672858"],
			[2, "もつ焼 ふじ", "高架下に入っている店。赤いカーテンが目立つ。", "東京都千代田区有楽町２丁目１−１０", "1722.jpeg", "139.7608", "35.673099"],
			[2, "もつ焼 ふじ", "高架下に入っている店。赤いカーテンが目立つ。", "東京都千代田区有楽町２丁目１−１０", "1723.jpeg", "139.7608", "35.673099"],
			[2, "いきなり！ステーキ 有楽町店", "少し広めの道路に面している店。店名が白い看板に記載されている", "東京都千代田区有楽町１丁目２−６ 有楽町1丁目ﾋﾞﾙ1階", "1724.jpeg", "139.760537", "35.673135"],
			[2, "Baden Baden（バーデン・バーデン） 有楽町店", "高架下に入っているレンガ風の建物。入口にはドイツの国旗が飾られている", "東京都千代田区有楽町２丁目１−８ JR高架下", "1725.jpeg", "139.7606", "35.672913"],
			[2, "西安料理XI'AN 有楽町店", "少し広めの道路に面している店。赤い看板が掛けられている", "東京都千代田区有楽町１丁目２−７", "1726.jpeg", "139.760445", "35.673071"],
			[2, "すしざんまい 有楽町新館", "少し広めの道路に面している店。わかりやすい看板が入口上部にかけられている", "東京都千代田区有楽町１丁目２−７", "1727.jpeg", "139.760445", "35.673071"],
			[2, "ドイツ居酒屋 ＪＳレネップ【有楽町/居酒屋/ワイン】", "高架下に入っている店。入口の前には豊富なメニューが掛けられており、青い暖簾がかかっている", "東京都千代田区有楽町２丁目１−８", "1728.jpeg", "139.7606", "35.672913"],
			[2, "餃餃 有楽町店", "日比谷の路地に面している。一階に入っており、餃子の絵が描かれた看板がかかっている", "東京都千代田区２ 有楽町１−２−９", "1729.jpeg", "139.734583", "35.686075"],
			[2, "栄 有楽町駅前店", "路地に面しており、2,3,4階が栄。階段を登って上へ", "東京都千代田区有楽町１丁目２−９ ２階", "1730.jpeg", "139.760289", "35.672855"],
			[2, "イタリアンバル La Sana 有楽町店", "路地に面した建物の一階。入口には白い看板で店名が書かれている", "東京都千代田区有楽町１丁目２−９ 小川ビル1F・2F", "1731.jpeg", "139.760289", "35.672855"],
			[2, "炭火串焼 鉄兵 有楽町店", "路地に面した茶色の外観の店。一階に入っており、緑の暖簾が掛けられている", "東京都千代田区有楽町１丁目２−９ TSビル1・2F", "1732.jpeg", "139.760289", "35.672855"],
			[2, "庄や有楽町店", "路地に面しており、青色の看板がかかっている。目立つ為わかりやすい", "東京都千代田区有楽町２丁目１−６ 第 1 有楽 高架橋 下 第 4 ブロック 地下 1 階 ・1 階", "1733.jpeg", "139.760423", "35.67271"],
			[2, "芳蘭", "路地に面したラーメン屋。蛍光灯で光った看板には店名が記載されている。地下一階。", "東京都千代田区有楽町１丁目２−９", "1734.jpeg", "139.760289", "35.672855"],
			[2, "炭火串焼 鉄兵 有楽町店", "路地に面した白い建物。入口には看板が掛けられている。", "東京都千代田区有楽町１丁目２−９ TSビル1・2F", "1735.jpeg", "139.760289", "35.672855"],
			[2, "磯丸水産 有楽町日比谷店", "路地に面した店。店名が書かれた看板が大きくかけられている。", "東京都千代田区有楽町１丁目２−１０ B1～2F 錦ビル", "1736.jpeg", "139.760173", "35.672733"],
			[2, "九州料理居酒屋 永山本店 有楽町｜ もつ鍋 和食 大人数 宴会 個室 ランチ 送別会 歓迎会", "白い建物に入っている2階の店。黒い看板がかかった入口を登って2階へ。", "東京都千代田区有楽町１丁目２−１１", "1737.jpeg", "139.760095", "35.67266"],
			[2, "個室居酒屋 長屋のじろちょう 有楽町店", "白い建物に入っている地下の店。入口には木製の看板が掛けられている", "東京都千代田区有楽町１丁目２−１１ Orchid Square B１", "1738.jpeg", "139.760095", "35.67266"],
			[2, "肉バル×クラフトビール SORAバル 有楽町店", "路地に面した建物に入っている店。建物の入り口には青い看板がかかっている", "東京都千代田区有楽町１丁目２−１１ オーキッド スクエア 8F", "1739.jpeg", "139.760095", "35.67266"],
			[6, "カラオケ ビッグエコー有楽町店", "大通りに面したカラオケ店。赤い看板に店名が記載されている", "東京都千代田区有楽町１丁目６−５ マイアミ日比谷ビル", "1832.jpeg", "139.760825", "35.673763"],
			[1, "珈琲茶館 集", "大通りに面したカフェ。グレーの建物の地下に入っている。入口には店名が書かれた看板あり", "東京都千代田区有楽町２丁目７−１ イトシアプラザ2階", "1833.jpeg", "139.763761", "35.674263"],
			[2, "酒や はないち", "グレーの建物の一階。入口の横には店名が大きく書かれた看板が掛けられている。", "東京都千代田区有楽町２丁目９−１６", "1834.jpeg", "139.763614", "35.67503"],
			[2, "イル バロッコ 有楽町店", "ブラウンの外観の建物、道の角にある。店名がかかた看板が", "東京都千代田区有楽町２丁目１−１６", "1835.jpeg", "139.761375", "35.673385"],
			[2, "湊一や 有楽町店", "大通りに面した建物の3階。正面にある階段を登って3階へ。", "東京都千代田区有楽町２丁目３−５ ａｕｎｅ有楽町", "1836.jpeg", "139.761536", "35.673255"],
			[2, "ジョナサン 有楽町店", "大通りに面した建物の4階", "東京都千代田区有楽町２丁目３−５", "1836.jpeg", "139.761536", "35.673255"],
			[2, "肉料理個室居酒屋【点 TOMORU 有楽町店】（宴会 歓迎会におすすめ）", "大通りに面した建物の4階", "東京都千代田区有楽町２丁目３−５ aune有楽町４Ｆ", "1836.jpeg", "139.761536", "35.673255"],
			[2, "やきとりスタジアム東京", "大通りに面した建物の5階。", "東京都千代田区有楽町２丁目３−５ aune有楽町 5F", "1836.jpeg", "139.761536", "35.673255"],
			[2, "金の蔵 有楽町店", "大通りに面した建物の6階。", "東京都千代田区有楽町２丁目３−５", "1836.jpeg", "139.761536", "35.673255"],
			[2, "ダイニングダーツバー・ビー Bee 有楽町店", "大通りに面した建物の8階。", "東京都千代田区有楽町２丁目３−５", "1836.jpeg", "139.761536", "35.673255"],
			[2, "のど黒屋 銀座数寄屋橋店", "大通りに面した建物の地下一階。建物の前には看板が掛けられている", "東京都千代田区有楽町２丁目３−６ 九重会館", "1837.jpeg", "139.761786", "35.673174"],
			[2, "今飯天 銀座本店", "大通りに面した建物の2階。建物の前には看板が掛けられている", "東京都千代田区有楽町２丁目３−６−2F 九重会館", "1837.jpeg", "139.761786", "35.673174"],
			[2, "饗 くろ㐂", "大通りに面した建物の5階。建物の前には看板が掛けられている", "東京都千代田区神田和泉町２−１５", "1837.jpeg", "139.780138", "35.698825"],
			[2, "銀座 数寄屋バーグ", "路地に面した建物の一階。入口には店名が大きく記載された看板が掛けられている", "東京都中央区銀座４丁目２−１２ 銀座クリスタルビル１F", "1838.jpeg", "139.763689", "35.672552"],
			[2, "ロッテリア 銀座クリスタルビル店", "大通りの角に位置している。地下に入口があり、建物の入り口には大きくロッテリアのマークが描かれている", "東京都中央区銀座４丁目２−１２", "1839.jpeg", "139.763689", "35.672552"],
			[6, "ビッグエコー 銀座数寄屋橋店", "大通りに面している、カラオケ。建物の一階に入っており、入口には赤い看板が掛けられている", "東京都中央区銀座４丁目２−１４", "1840.jpeg", "139.763761", "35.67261"],
			[6, "カラオケ館 銀座総本店", "大通りに面している、カラオケ。建物の一階に入っており、特徴的な看板がかかっている", "東京都中央区銀座４丁目２−１７ 銀座１１１レジャービル", "1841.jpeg", "139.764183", "35.672799"],
			[1, "パラダイス ダイナシティ", "大通りに面している、道の角にある店。店名が入口の上に記載されており、中国語でも書かれている", "東京都中央区銀座３丁目２−１５ ギンザ・グラッセ 1F＆B1F", "1842.jpeg", "139.764624", "35.673199"],
			[2, "赤から 銀座店", "大通りに面した銀座グラッセというビルに入っている。エレベーターで店へ向かう", "東京都中央区銀座３丁目２−１５", "1843.jpeg", "139.764609", "35.673233"],
			[2, "バンコクキッチン 有楽町店", "大通りに面した銀座グラッセというビルに入っている。エレベーターで店へ向かう", "東京都中央区銀座３丁目２−１５ ギンザ・グラッセ 8階", "1843.jpeg", "139.764624", "35.673199"],
			[2, "銀座 会席 入母屋 銀座グラッセ", "大通りに面した銀座グラッセというビルに入っている。エレベーターで店へ向かう", "東京都中央区銀座３丁目２−１５", "1843.jpeg", "139.764609", "35.673233"],
			[2, "銀座 しゃぶしゃぶ 羅豚銀座グラッセ", "大通りに面した銀座グラッセというビルに入っている。エレベーターで店へ向かう", "東京都中央区２ 銀座３丁目２−１５ ギンザ・グラッセ １０F", "1843.jpeg", "139.771989", "35.670639"],
			[2, "よもだそば 銀座店", "路地の角に面している、蕎麦屋。入口には白い看板に店名が大きく書かれている", "東京都中央区銀座４丁目３−２ 銀座白亜ビル 1F", "1845.jpeg", "139.764917", "35.672524"],
			[2, "ねぎし 銀座並木通り店", "大通りから一本入った道に面している。白い看板に店名が書かれている。", "東京都中央区銀座３丁目２−１２", "1846.jpeg", "139.764742", "35.673058"],
			[2, "スペインバル エル・チャテオ 銀座店", "大通りから一本入った道に面している。スペインの国旗が飾られている", "東京都中央区銀座３丁目２−１２", "1847.jpeg", "139.764742", "35.673058"],
			[5, "銀座スキンクリニック", "大通りから一本入った道に面している白い建物の3階", "東京都中央区３ 銀座3-3-14 銀座グランディアビルII3F", "1848.jpeg", "139.765386", "35.673163"],
			[2, "鎌倉野菜とチーズフォンデュ 銀座ガーデンファーム 並木通り店", "大通りから一本入った道に面している白い建物の4階", "東京都中央区銀座３丁目３−１４ 銀座グランディア II ビル 4F", "1848.jpeg", "139.765133", "35.672994"],
			[1, "カフェオハナ", "赤い看板に店名が記載されている。グレーの建物", "東京都中央区３ 銀座３丁目３−１２ 銀座ビルディング 4F", "1849.jpeg", "139.765115", "35.672789"],
			[2, "GINTO ZOE 銀座店", " 白い建物の5階。一階にはMaxMaraが入っている。", "東京都中央区銀座３丁目３−１ Zoe銀座5階", "1850.jpeg", "139.765756", "35.673477"],
			[2, "板前料理 日月火", "白い建物の6階。一階にはMaxMaraが入っている。", "東京都中央区銀座３丁目３−１ Zoe銀座6F", "1850.jpeg", "139.765756", "35.673477"],
			[2, "そら", "大通りに面している大きめの建物の10階。エレベーターで上へ", "東京都中央区銀座２丁目２−１４ マロニエゲート", "1851.jpeg", "139.765347", "35.674291"],
			[2, "ジムトンプソンズテーブル タイランド銀座 | 夜景 個室 女子会 タイ料理 東京", "大通りに面している大きめの建物の10階。エレベーターで上へ", "東京都中央区銀座２丁目２−１４", "1851.jpeg", "139.765347", "35.674291"],
			[2, "ブラッスリー ポール・ボキューズ 銀座", "大通りに面している大きめの建物の10階。エレベーターで上へ", "東京都中央区銀座２丁目２−１４", "1851.jpeg", "139.765347", "35.674291"],
			[2, "ヴェトナム アリス 銀座店", "大通りに面している大きめの建物の11階。エレベーターで上へ", "東京都中央区銀座２丁目２−１４ マロニエゲート", "1851.jpeg", "139.765347", "35.674291"],
			[2, "いふう 銀座店マロニエゲート１ サムギョプサルと野菜", "大通りに面している大きめの建物の11階。エレベーターで上へ", "東京都中央区銀座２丁目２−１４ マロニエゲート", "1851.jpeg", "139.765347", "35.674291"],
			[2, "シンガポール・シーフード・リパブリック 銀座店", "大通りに面している大きめの建物の11階。エレベーターで上へ", "東京都中央区銀座２丁目２−１４ マロニエゲート 1 11F", "1851.jpeg", "139.765347", "35.674291"],
			[2, "焼とり 鳥ぼんち", "大通りに面している大きめの建物の12階。エレベーターで上へ", "東京都中央区２ 12F 中央区 銀座 ２丁目 ２ １４ マロニエゲート", "1851.jpeg", "139.771989", "35.670639"],
			[2, "ひつまぶし名古屋備長 マロニエゲート 銀座１店", "大通りに面している大きめの建物の12階。エレベーターで上へ", "東京都中央区銀座２丁目２−１４ マロニエゲート銀座１ 12F", "1851.jpeg", "139.765347", "35.674291"],
			[2, "銀座 すき焼き 肉割烹宮下", "大通りに面している大きめの建物の12階。エレベーターで上へ", "東京都中央区銀座２丁目２−１４ マロニエゲート12F", "1851.jpeg", "139.765347", "35.674291"],
			[2, "ジムトンプソンズテーブル タイランド銀座", "大通りに面している大きめの建物の10階。エレベーターで上へ", "東京都中央区銀座２丁目２−１４", "1852.jpeg", "139.765347", "35.674291"],
			[2, "ブラッスリー ポール・ボキューズ 銀座", "大通りに面している大きめの建物の10階。エレベーターで上へ", "東京都中央区銀座２丁目２−１４", "1852.jpeg", "139.765347", "35.674291"],
			[2, "ヴェトナム アリス 銀座店", "大通りに面している大きめの建物の11階。エレベーターで上へ", "東京都中央区銀座２丁目２−１４ マロニエゲート", "1852.jpeg", "139.765347", "35.674291"],
			[2, "いふう 銀座店マロニエゲート１ サムギョプサルと野菜", "大通りに面している大きめの建物の11階。エレベーターで上へ", "東京都中央区銀座２丁目２−１４ マロニエゲート", "1852.jpeg", "139.765347", "35.674291"],
			[2, "シンガポール・シーフード・リパブリック 銀座店", "大通りに面している大きめの建物の11階。エレベーターで上へ", "東京都中央区銀座２丁目２−１４ マロニエゲート 1 11F", "1852.jpeg", "139.765347", "35.674291"],
			[2, "焼とり 鳥ぼんち", "大通りに面している大きめの建物の12階。エレベーターで上へ", "東京都中央区２ 12F 中央区 銀座 ２丁目 ２ １４ マロニエゲート", "1852.jpeg", "139.771989", "35.670639"],
			[2, "ひつまぶし名古屋備長 マロニエゲート 銀座１店", "大通りに面している大きめの建物の12階。エレベーターで上へ", "東京都中央区銀座２丁目２−１４ マロニエゲート銀座１ 12F", "1852.jpeg", "139.765347", "35.674291"],
			[2, "銀座 すき焼き 肉割烹宮下", "大通りに面している大きめの建物の12階。エレベーターで上へ", "東京都中央区銀座２丁目２−１４ マロニエゲート12F", "1852.jpeg", "139.765347", "35.674291"],
			[2, "香家 銀座店｜銀座 居酒屋 個室 大人数 宴会 接待", "銀座の路地に面している石造りの建物の一階。建物の入り口には看板がかかっている", "東京都中央区銀座３丁目４−１ 大倉別館 B1F", "1854.jpeg", "139.766092", "35.673224"],
			[2, "すぱじろう 銀座", "銀座の路地に面している建物の一階。店名が書かれた看板が置かれている", "東京都中央区銀座３丁目４−１ 大倉別館 1階・2階", "1855.jpeg", "139.766092", "35.673224"],
			[2, "炭火焼肉・韓国料理 KollaBo(コラボ)銀座店", "銀座の路地に面している建物の一階。茶色の建物の一階に入っている。", "東京都中央区銀座３丁目４−１８ 大倉別館ビル １F", "1856.jpeg", "139.765844", "35.673066"],
			[2, "粋な肉 銀座店", "路地に面している白い建物に入っている。店は4階", "東京都中央区銀座３丁目４−１７ 銀座オプティカ", "1858.jpeg", "139.765728", "35.672991"],
			[2, "リストランテ クロディーノ銀座", "路地に面している白い建物に入っている。店は6階", "東京都中央区銀座３丁目４−１７ 銀座オプティカ", "1858.jpeg", "139.765728", "35.672991"],
			[2, "hole hole cafe&diner（ホレホレ カフェ&ダイナー） 銀座店", "Cafe & Dinerと記載された看板に店名が書かれている。茶色の建物の2階。", "東京都中央区銀座３丁目４−１６ サニービル2F", "1860.jpeg", "139.765667", "35.672941"],
			[2, "ちゃんぷるぅ家", "茶色の建物の地下一階。階段の上には店名が記載された看板が掛けられている", "東京都中央区銀座３丁目４−１６ 銀座サニービル Ｂ１Ｆ", "1860.jpeg", "139.765667", "35.672941"],
			[2, "LUKE'S 銀座店", "路地に面している建物の一階。建物の入り口には店名が書かれたマットが置かれている", "東京都中央区銀座３丁目４−１６", "1861.jpeg", "139.765667", "35.672941"],
			[1, "澤井珈琲 銀座店", "路地に面している建物の一階。入口には店名が書かれた看板が掛けられている", "東京都中央区銀座３丁目３−７", "1862.jpeg", "139.765425", "35.673044"],
			[2, "串一 銀座", "路地に面している建物の2階。入口には白い看板が掛けられている", "東京都中央区銀座３丁目４−１５", "1863.jpeg", "139.765556", "35.67281"],
			[2, "銀座鳥ばか一代", "路地に面している建物に入っている。木製の看板が掛けられており、白い暖簾がかかっている", "東京都中央区銀座３丁目３−８", "1864.jpeg", "139.765342", "35.672972"],
			[2, "よもだそば 銀座店", "通りに面している白い建物の一階に入っている。店名が掛けられており、わかりやすい", "東京都中央区銀座４丁目３−２ 銀座白亜ビル 1F", "1866.jpeg", "139.764917", "35.672524"],
			[2, "あきしの", "通りに面しているHATORIビルの地下。階段で降る", "東京都中央区銀座４丁目３−５ ハトリビルＢ１Ｆ", "1869.jpeg", "139.764653", "35.672324"],
			[2, "ＢＡＲ ＯＲＩＧＩＮ", "通りに面しているHATORIビルの2階。階段で上へ", "東京都中央区銀座４丁目３−５ ハトリビル２Ｆ", "1869.jpeg", "139.764653", "35.672324"],
			[2, "小粋そば", "通りに面しているそばやさん。店の入り口の上には店名が書かれた看板が掛けられている", "東京都中央区銀座３丁目", "1870.jpeg", "139.769036", "35.670586"],
			[2, "天ぷら 阿部", "通りに面しているスバルビルの地下。エレベーターで降る", "東京都中央区銀座４丁目３−７ B1F スバルビル", "1871.jpeg", "139.76447", "35.672138"],
			[2, "ビアハウスびいどろ亭", "通りに面しているスバルビルの3階。エレベーターで上がる", "東京都中央区銀座４丁目３−７ B1F スバルビル", "1871.jpeg", "139.76447", "35.672138"],
			[2, "三笠會館", "広めの通りに面した、おしゃれな建物の一階に入っている。メニューが外から見られる", "東京都中央区銀座５丁目５−１７ 三笠會館", "1873.jpeg", "139.763589", "35.671538"],
			[2, "寿司割烹鷹勝 銀座本店", "白い建物の地下に入っている。入り口の階段の前には達筆で記載された店名の看板が置かれている", "東京都中央区銀座５丁目５−１６ 銀座テーラービルディング B1F・B2F", "1875.jpeg", "139.763447", "35.671447"],
			[2, "鳥ぎん 本店", "細い道からさらに一本入った路地に面している老舗店。赤い看板がかかっている", "東京都中央区銀座５丁目５−７ ニューギンザビル６号館", "1876.jpeg", "139.763539", "35.671316"],
			[2, "てんぷら 近藤", "道に面している白い建物の7階に入っている。", "東京都中央区銀座５丁目５−１３ 坂口ビル９F", "1877.jpeg", "139.763178", "35.671169"],
			[2, "銀座 Cotohi", "中くらいの幅の道に面しているレンガ風の建物に入っている。入り口の前にはメニューが置かれている", "東京都中央区銀座6-5-17 銀座みゆき館ビル3F", "1878.jpeg", "139.762192", "35.671241"],
			[1, "CAFE de GINZA MIYUKIKAN CAKE FACTORY", "大通りに面しており、ポップな字体で店名が書かれた看板が掛けられている", "東京都中央区銀座６丁目５−１５ 能楽堂ビル1F", "1879.jpeg", "139.762081", "35.67108"],
			[2, "天ぷら茂竹", "通りに面している白い建物の2階。外にある階段を登って2階へ。", "東京都中央区銀座６丁目５−１６ 三楽ビル二階", "1880.jpeg", "139.762148", "35.671216"],
			[2, "魚民 銀座６丁目外堀通り店", "通りに面した白い建物の2階。綺麗な階段を登って2階へ。", "東京都中央区５ 銀座6丁目5-15 銀座能楽堂ビル別館 2階", "1881.jpeg", "139.762009", "35.670991"],
			[2, "とん喜", "大通りに面した白い建物。地下にあるため、エレベーターや階段で向かう", "東京都中央区銀座６丁目５−５−１５", "1882.jpeg", "139.761854", "35.670945"],
			[2, "順理庵", "大通りに面した白い建物の一階。", "東京都中央区銀座６丁目-５-１５", "1882.jpeg", "139.762081", "35.67108"],
			[2, "魚民 銀座６丁目外堀通り店", "通りに面した白い建物の2階。綺麗な階段を登って2階へ。", "東京都中央区５ 銀座6丁目5-15 銀座能楽堂ビル別館 2階", "1882.jpeg", "139.762009", "35.670991"],
			[2, "百菜百味 御膳房新派四川料理 銀座店", "大通りに面した白い建物の3階。エレベーターで向かう", "東京都中央区銀座６丁目５−１５ 能楽堂ビル3F", "1882.jpeg", "139.762081", "35.67108"],
			[2, "茂松", "大通りに面した白い建物の4階。エレベーターで向かう", "東京都中央区銀座６丁目５−番 １５号銀座能楽堂ビル４F", "1882.jpeg", "139.762009", "35.670991"],
			[2, "Toriya Premium", "大通りに面した白い建物の5階。エレベーターで向かう", "東京都中央区銀座６丁目５−１５ 能楽堂ビル 5F", "1882.jpeg", "139.762081", "35.67108"],
			[2, "鮨 鈴木", "大通りに面した白い建物の5階。エレベーターで向かう", "東京都中央区銀座６丁目５−１５", "1882.jpeg", "139.762081", "35.67108"],
			[2, "鮨さゝ木", "大通りに面した鮨の店。階段で地下に降りる", "東京都中央区 銀座6丁目5−13", "1883.jpeg", "139.761775", "35.670847"],
			[2, "新広東菜 嘉禅 −Cantonese Kazen–", "大通りに面したグレーの建物の2階。階段を登って2階へ。", "東京都中央区銀座６丁目５−１３ 銀座美術館ビル", "1884.jpeg", "139.761775", "35.670847"],
			[2, "リンガーハット 銀座店", "大通りに面した建物の一階。店名が黒い看板に記載されている", "東京都中央区銀座６丁目５−１３", "1885.jpeg", "139.761775", "35.670847"],
			[2, "デリー 銀座店", "大通りから一本入った道に面している店。エレベーターで3階へ", "東京都中央区銀座６丁目３−１１ 西銀座ビル3F", "1887.jpeg", "139.760839", "35.671211"],
			[2, "焼肉トラジ銀座６丁目店", "大通りから一本入った道に面している店。エレベーターで4階へ", "東京都中央区銀座６丁目３−１１", "1887.jpeg", "139.760839", "35.671211"],
			[2, "銀座 鳥幸｜焼き鳥 ワイン 接待 会食 完全個室 地鶏", "大通りから一本入った道に面している店。エレベーターで5階へ", "東京都中央区銀座６丁目３−１１ 西銀座ビル", "1887.jpeg", "139.760839", "35.671211"],
			[2, "銀座 穂の河", "大通りから一本入った道に面している店。エレベーターで6階へ", "東京都中央区銀座６丁目３番１１号", "1887.jpeg", "139.760839", "35.671211"],
			[2, "銀熊茶寮", "大通りから一本入った道に面している店。エレベーターで7階へ", "東京都中央区銀座６丁目３−１１ 西銀座ビル 7F", "1887.jpeg", "139.760839", "35.671211"],
			[2, "銀座おちょぼ", "路地に面している店。雑居ビルの3階で、建物の入り口前には看板が置かれている", "東京都中央区銀座６丁目３−１２", "1889.jpeg", "139.760795", "35.671269"],
			[2, "銀座いわ Ginza IWA", "黒い入り口の外観。路地に面しており、建物には店名が書かれた小さな看板が掛けられている", "東京都中央区銀座８−４−４ 三浦ビル", "1890.jpeg", "139.760264", "35.669325"],
			[2, "オーガニックイタリアンバル LaSana銀座", "青い看板が掛けられている、シースルーの建物。階段を登って2階へ", "東京都中央区３ 銀座6丁目3−12 数寄屋ビル2F", "1891.jpeg", "139.760816", "35.671283"],
			[2, "銀座 スペインバル BAR de ESPANA Pero(ペロ)", "路地に面している建物。店名が書かれた看板が上部に掛けられている", "東京都中央区銀座６丁目３−１２", "1892.jpeg", "139.760795", "35.671269"]
        ];
        foreach ($entrances as $entrance) {
            DB::table('entrances')->insert([
                'category_id' => $entrance[0],
                'user_id' => 1,
                'name' => $entrance[1],
                'address' => $entrance[3],
                'detail' => $entrance[2],
                'img_url' => $entrance[4],
                'lng' =>  $entrance[5],
                'lat' =>  $entrance[6],
                'status' => 1
            ]);
        }
    }
}