-- データベースの作成
CREATE DATABASE IF NOT EXISTS zappa_worldillia;
USE zappa_worldillia;

-- BGMテーブルの作成
CREATE TABLE IF NOT EXISTS bgm_tracks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    genre VARCHAR(100),
    file_path VARCHAR(255) NOT NULL,
    keywords TEXT,
    player MEDIUMTEXT,
);

INSERT INTO bgm_tracks (`id`, `title`, `genre`, `file_path`, `keywords`, `player`) VALUES
(1, 'ざわめきと胸騒ぎ', 'ジャズ', '/patch/ざわめきと胸騒ぎ.zip', 'ジャズ シリアス ミステリアス トレンディ スタイリッシュ かっこいい ピアノ', '<audio controls controlsList="nodownload"  src="/audio/ざわめきと胸騒ぎ.mp3"></audio>'),
(2, 'Pop Step!', 'ポップス', '/patch/Pop Step！.zip', 'ポップス エレクトロ ほのぼの 日常 かわいい シンセサイザー', '<audio controls controlsList="nodownload"  src="/audio/Pop Step！.mp3"></audio>'),
(3, '開幕ファンファーレ', 'ファンファーレ', '/patch/開幕ファンファーレ.zip', 'ファンファーレ ブラス 開幕 パロディ コメディ', '<audio controls controlsList="nodownload"  src="/audio/開幕ファンファーレ.mp3"></audio>'),
(4, 'いきるいみ', 'ノスタルジック', '/patch/いきるいみ.zip', 'シリアス コメディ ホラー ワンポイント ノスタルジック ピアノ', '<audio controls controlsList="nodownload"  src="/audio/いきるいみ.mp3"></audio>'),
(5, '深刻そうなBGM', 'エレクトロ', '/patch/深刻そうなBGM.zip', 'エレクトロ シリアス ホラー 暗い ダーク シンセサイザー', '<audio controls controlsList="nodownload"  src="/audio/深刻そうなBGM.mp3"></audio>'),
(6, '妖精さんたちとの森のお茶会', '吹奏楽', '/patch/妖精さんたちとの森のお茶会.zip', '吹奏楽 ほのぼの 日常 コミカル かわいい フルート', '<audio controls controlsList="nodownload"  src="/audio/妖精さんたちとの森のお茶会.mp3"></audio>'),
(7, 'おつきさまがみまもっている', 'オルゴール', '/patch/おつきさまがみまもっている.zip', 'オルゴール ほのぼの 回想 子守唄 かわいい ミュージックボックス', '<audio controls controlsList="nodownload"  src="/audio/おつきさまがみまもっている.mp3"></audio>'),
(8, '熱い心', 'ロック', '/patch/熱い心.zip', 'ロック シリアス 戦闘 白熱 かっこいい エレキギター バンドミュージック', '<audio controls controlsList="nodownload"  src="/audio/熱い心.mp3"></audio>'),
(9, 'Retro Party！！', 'チップチューン', '/patch/Retro Party!!.zip', 'ポップス ファミコン 楽しい ゲーム かわいい チップチューン', '<audio controls controlsList="nodownload"  src="/audio/Retro Party！！.mp3"></audio>'),
(10, 'Crazy Rabbit`s Laugh', 'ジャズ', '/patch/Crazy Rabbit`s Laugh.zip', 'ジャズ 騒がしい 楽しい ハイテンション コミカル ビッグバンド', '<audio controls controlsList="nodownload"  src="/audio/Crazy Rabbit`s Laugh.mp3"></audio>'),
(11, '気ままな人', 'ピアノ', '/patch/気ままな人.zip', 'ほのぼの 日常 かわいい 優雅 コミカル ピアノ', '<audio controls controlsList="nodownload"  src="/audio/気ままな人.mp3"></audio>'),
(12, 'フルート吹きの愉快な休日', '吹奏楽', '/patch/フルート吹きの愉快な休日.zip', 'ほのぼの 日常 かわいい コミカル フルート ピアノ', '<audio controls controlsList="nodownload"  src="/audio/フルート吹きの愉快な休日.mp3"></audio>'),
(13, 'Lux De Caelo', 'ロック', '/patch/Lux De Caelo.zip', 'ロック ゴシック かっこいい シリアス 戦闘 エレキギター バンドミュージック', '<audio controls controlsList="nodownload"  src="/audio/Lux De Caelo.mp3"></audio>'),
(14, '空虚', 'テクノ', '/patch/空虚.zip', 'テクノ アンビエント スタイリッシュ かっこいい シリアス 幻想 ピアノ', '<audio controls controlsList="nodownload"  src="/audio/空虚.mp3"></audio>'),
(15, 'Day Dream Fantasy', 'テクノ', '/patch/Day Dream Fantasy.zip', 'テクノ スタイリッシュ かわいい ポップス チルアウト シンセサイザー', '<audio controls controlsList="nodownload"  src="/audio/Day Dream Fantasy.mp3"></audio>'),
(16, '迫りくる恐怖', 'ホラー', '/patch/迫りくる恐怖.zip', 'シリアス ホラー 不安 肝試し 不協和音 ループ', '<audio controls controlsList="nodownload"  src="/audio/迫りくる恐怖.mp3"></audio>'),
(17, '乱れ雅', '和風ロック', '/patch/乱れ雅.zip', 'シリアス スタイリッシュ 和風 ロック バンドミュージック 都節 和洋折衷', '<audio controls controlsList="nodownload"  src="/audio/乱れ雅.mp3"></audio>'),
(18, 'メーワクなお偉いさん', 'バロック', '/patch/メーワクなお偉いさん.zip', 'コミカル ほのぼの 優雅 バロック ループ オーボエ', '<audio controls controlsList="nodownload"  src="/audio/メーワクなお偉いさん.mp3"></audio>');
(19, 'Blue Wave Rider', 'ロック', '/patch/Blue Wave Rider.zip', 'ロック 夏 テケテケ サーフミュージック 爽やか 暑い', '<audio controls controlsList="nodownload"  src="Blue Wave Rider Ver. No Loop.mp3"></audio>');