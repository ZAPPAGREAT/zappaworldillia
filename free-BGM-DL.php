<?php
// データベース接続
$host = 'localhost';
$dbname = 'xs138301_zappaworldillia';
$user = 'xs138301_root';
$pass = '283zappa';

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // BGMトラックの取得
  $stmt = $pdo->query("SELECT * FROM tracks");
  $tracks = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // コメントの取得（新しい順）
  $stmt = $pdo->query("SELECT * FROM comments ORDER BY time_stamp DESC");
  $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
  echo "データベース接続エラー: " . $e->getMessage();
  exit;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フリーBGM無料配布 | 商用利用OK | ザッパワールディリア</title>
    <meta name="description" content="無料・商用利用可能なフリーBGMを配布中。映像制作、ゲーム、配信などに使える高品質な音源をご試聴・ダウンロードいただけます。ガイドラインの範囲内でご自由にご利用ください。">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="https://unpkg.com/ress@4.0.0/dist/ress.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/stylesheet.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <script>
      window.addEventListener('load', function() {
        const logo = document.querySelector('.top-logo');
        setTimeout(() => {
          logo.classList.add('fade-in');
        }, 100);
      });
    </script>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "CollectionPage",
        "name": "フリーBGM無料配布 | 商用利用OK | ザッパワールディリア",
        "description": "無料・商用利用可能なフリーBGMを配布中。映像制作、ゲーム、配信などに使える高品質な音源をご試聴・ダウンロードいただけます。ガイドラインの範囲内でご自由にご利用ください。",
        "url": "https://zappaworldillia.com/free-BGM-DL.php",
        "creator": {
          "@type": "Person",
          "name": "ZAPPA",
          "url": "https://zappaworldillia.com/top.php"
        },
        "hasPart": [
          {
            "@type": "MusicRecording",
            "name": "Pop Step！",
            "url": "https://zappaworldillia.com/audio/Pop Step！.mp3",
            "inLanguage": "ja",
            "duration": "PT4M02S",
            "datePublished": "2025-07-23",
            "license": "https://zappaworldillia.com/free-BGM-DL.php"
         },
          {
            "@type": "MusicRecording",
            "name": "気ままな人",
            "url": "https://zappaworldillia.com/audio/気ままな人.mp3",
            "inLanguage": "ja",
            "duration": "PT1M55S",
            "datePublished": "2025-07-23",
            "license": "https://zappaworldillia.com/free-BGM-DL.php"
          }
        ]
      }
    </script>

  </head>
  <body>
  <header>
    <div class="container">
      <div class="header-left">
        <img src="/images/ZAPPA-Worldillia-logo.png" alt="ザッパワールディリア公式ロゴ">
      </div>

      <!-- ハンバーガーアイコン -->
      <div class="hamburger" id="hamburger">
        <i class="fa fa-bars"></i>
      </div>

      <!-- メニュー本体 -->
      <nav class="header-right" id="nav-menu">
        <a href="top.php"><ruby>TOP<rp>(</rp><rt>トップ</rt><rp>)</ruby></a>
        <a href="profile.php"><ruby>Profile<rp>(</rp><rt>ZAPPAの紹介</rt><rp>)</ruby></a>
        <a href="works.php"><ruby>Works<rp>(</rp><rt>作品紹介</rt><rp>)</ruby></a>
        <a href="free-BGM-DL.php"><ruby>Free BGM DL<rp>(</rp><rt>無料BGM配布</rt><rp>)</ruby></a>
        <a href="commission.php"><ruby>Commission & Contact<rp>(</rp><rt>ご依頼はこちらから</rt><rp>)</ruby></a>
        <a href="links.php"><ruby>Links<rp>(</rp><rt>リンク</rt><rp>)</ruby></a>
      </nav>
    </div>
  </header>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const hamburger = document.getElementById("hamburger");
      const navMenu = document.getElementById("nav-menu");

      hamburger.addEventListener("click", function () {
        navMenu.classList.toggle("active");
      });
    });
  </script>
    
    <div class="main-content">
      <h1>フリーBGM無料ダウンロードリストです。</h1>
      <div class="container">
        <div class="container-header">
          <h2>フリーBGMリスト</h2>
        </div>
        <div class="BGM-table-wrapper">
          <div class="table-head">
            <span>曲名</span>
            <span>ジャンル</span>
            <span>キーワード</span>
            <span>視聴</span>
            <span>ダウンロード</span>
          </div>
          <ul class="table-body">
          <?php foreach ($tracks as $track): ?>
            <li>
              <div class="item-data">
                <span><?= $track['title'] ?></span>
                <span><?= $track['genre'] ?></span>
                <span><?= $track['keywords'] ?></span>
                <span><?= $track['player'] ?></span>
                <span>
                  <a href="#" class="download-btn"
                    data-track-id="<?= htmlspecialchars($track['id']) ?>"
                    data-track-title="<?= htmlspecialchars($track['title']) ?>"
                    data-file-path="<?= htmlspecialchars($track['file_path']) ?>">ダウンロード</a>
                </span>
              </div>
            </li>
          <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
    <section class="comment-section">
      <div class="container">
        <h2>コメントはこちらから</h2>
        <p>ダウンロードされた曲と使用用途などのご記入のご協力をよろしくお願いします！</p>
        <p style="color: red; margin-bottom: 1em;">
          ※ 公序良俗に反する書き込みや個人情報の投稿は禁止です。
        </p>
        
        <form method="POST" action="/comments">
          <div class="form-group">
            <label>お名前</label>
            <input type="text" name="name" required>
          </div>
          <div class="form-group">
            <label>曲名</label>
            <input type="text" name="name_bgm" required>
          </div>
          <div class="form-group">
            <label>コメント</label>
            <textarea name="message" rows="4" required></textarea>
          </div>
          <button type="submit" class="submit-btn">投稿する</button>
        </form>
      </div>
    </section>
    <section class="comment-list-section">
      <div class="comment-container">
        <h3>みなさんのコメント</h3>
        <ul class="comment-list">
          <?php foreach ($comments as $comment): ?>
            <li>
              <strong><?= $comment['name'] ?>「<?= $comment['name_bgm'] ?>」：</strong><?= $comment['message'] ?><?= $comment['time_stamp'] ?>
            </li>
           <?php endforeach; ?>
        </ul>
      </div>
    </section>
    
    
    
    

    <!-- 利用規約ポップアップ -->
    <div id="termsModal" class="modal">
      <div class="modal-content">
        <h2>ご利用について</h2>
        
        <div class="terms-section">
          <h3>☆ご利用の範囲</h3>
          <ul>
            <li>営利(商用)、非営利、個人、法人での制作物内の「背景音楽」(BGM)</li>
            <li>一部加工（エフェクト、ピッチシフト、タイムストレッチ、一部分のカット）</li>
            <li>原曲を流用しないアレンジ及びリミックス(申請が必要です)</li>
          </ul>
          
          <h3>【利用例】</h3>
          <ul>
            <li>テレビ番組、CM</li>
            <li>舞台(演劇、朗読)</li>
            <li>映像コンクール出品作品</li>
            <li>YouTube、ニコニコ生放送、WEBラジオ、その他配信及び生放送</li>
            <li>店舗、結婚式、広告、イベント</li>
            <li>有償及び無償のアプリ、ゲーム、DVD</li>
            <li>プレゼンテーション</li>
          </ul>
          <h3>クレジット表記例</h3>
          <p>「(曲名)」ザッパワールディリア https://zappaworldillia.com/</p>
        </div>
        
        <div class="terms-section">
          <h3>☆禁止事項</h3>
          <ul>
            <li>政治や宗教関係の制作物及びコンテンツへの利用</li>
            <li>日本法令に違反、公序良俗に反する制作物及びコンテンツでの利用</li>
            <li>音源の有料販売</li>
            <li>音源の楽譜を作成し、有料販売及び公開</li>
            <li>無許可でのアレンジ及びリミックス</li>
            <li>当サイト及び製作者の名誉や信用毀損、その恐れがあると判断される用途での利用</li>
          </ul>
        </div>
        
        <div class="terms-notice">
          <p>以上の項目を同意したものとみなして、音源をダウンロードさせていただきます。</p>
          <p>ご利用の際にいかなるトラブルが発生しても故意や重過失がない限り、一切の責任を負いません。</p>
          <p>ダウンロードの際は、下のコメント欄で、曲名とご利用用途とご感想のご記入をお願いします。</p>
          <p>※ご記入内容は公開いたします。</p>
        </div>
        
        <div class="modal-buttons">
          <button id="agreeBtn" class="agree-btn">同意してダウンロードする</button>
          <button id="cancelBtn" class="cancel-btn">キャンセル</button>
        </div>
      </div>
    </div>

    <footer>
      <div class="footer-visual">
        <h2>ザッパワールディリア</h2>
        <p>© 2025 ZAPPAWorldillia, All Rights Reserved.</p>
      </div>
    </footer>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        // モーダル関連の要素を取得
        const modal = document.getElementById('termsModal');
        const agreeBtn = document.getElementById('agreeBtn');
        const cancelBtn = document.getElementById('cancelBtn');
        let currentDownloadPath = null;
        let currentTrackTitle = null;

        // ダウンロードボタンのイベントリスナーを設定
        document.querySelectorAll('.download-btn').forEach(button => {
          button.addEventListener('click', function(e) {
            e.preventDefault();
            currentDownloadPath = this.dataset.filePath;
            currentTrackTitle = this.dataset.trackTitle;
            
            // モーダルのタイトルを更新
            const modalTitle = modal.querySelector('h2');
            modalTitle.textContent = `「${currentTrackTitle}」のご利用について`;
            
            // モーダルを表示
            modal.style.display = 'block';
            
            console.log('選択された曲:', currentTrackTitle);
            console.log('ダウンロードパス:', currentDownloadPath);
          });
        });

        // 同意ボタンのクリックイベント
        agreeBtn.addEventListener('click', function() {
          if (currentDownloadPath) {
            console.log(`「${currentTrackTitle}」のダウンロードを開始します...`);
            window.location.href = currentDownloadPath;
          }
          modal.style.display = 'none';
        });

        // キャンセルボタンのクリックイベント
        cancelBtn.addEventListener('click', function() {
          console.log('ダウンロードがキャンセルされました');
          currentDownloadPath = null;
          currentTrackTitle = null;
          modal.style.display = 'none';
        });

        // モーダルの外側をクリックした時の処理
        window.addEventListener('click', function(e) {
          if (e.target === modal) {
            console.log('ダウンロードがキャンセルされました');
            currentDownloadPath = null;
            currentTrackTitle = null;
            modal.style.display = 'none';
          }
        });
      });
    </script>
  </body>
</html>