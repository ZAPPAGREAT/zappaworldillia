<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ザッパワールディリア - Profile</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">    <link rel="stylesheet" href="https://unpkg.com/ress@4.0.0/dist/ress.min.css">
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
      <div class="profile-section">
        <div class="container">
          <h1>このページの主の自己紹介です</h1>
          <div class="profile-content">
            <div class="profile-content-left">
              <h3>ZAPPA</h3>
              <p>クリエイター 作曲 DJ ライティング 脚本 構成 たまに絵</p>
              <p>当サイト、ザッパワールディリアの主をしている音楽好きの男。</p>
              <p>作曲でもDJでも1つのジャンルに拘れずに、その時の雰囲気次第で様々なジャンルに手を出してしまう、気分屋。</p>
            </div>
            <div class="profile-content-right">
              <div class="right-1">
                <img class="portrait" src="/images/自画像 Web用.jpg">
                <p>自画像</p>
              </div>
              <div class="right-2">
                <img class="my-icon" src="/images/アイコン Web用.jpg">
                <p>アイコン</p>
              </div>
            </div>
          </div>
          <div class="social-links">
            <a href="https://www.youtube.com/channel/UC1NH0u7h7lPkliq3JXqB5Qg" target="_blank" rel="noopener noreferrer"><img src="/images/YouTube-icon.jpg" alt="YouTube"></a>
            <a href="https://www.nicovideo.jp/user/4019380" target="_blank" rel="noopener noreferrer"><img src="/images/niconico-icon.jpg" alt="niconico"></a>
            <a href="https://x.com/zappa_great" target="_blank" rel="noopener noreferrer"><img src="/images/X-icon.jpg" alt="X"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="history-section">
      <div class="container">
        <h2>経歴紹介</h2>
        <div class="timeline">
          <div class="timeline-item">
            <div class="year">2008年</div>
            <ul>
              <li>プログレッシヴメタルに衝撃を受け、エレキギター購入。同年にCUBASEも購入。</li>
              <li>この時は、特にどこへ投稿することもなく、プログレッシヴメタルやフォーク風など、インストメインの曲を作る。</li>
            </ul>
          </div>
          <div class="timeline-item">
            <div class="year">2009年</div>
            <ul>
              <li>ニコニコ動画で、別名義で東方アレンジ楽曲等を投稿。</li>
              <li>その時のジャンルは、モダンジャズ、ガバ、ハードコア。</li>
            </ul>
          </div>
          <!-- 他の年も同様に追加 -->
          <div class="timeline-item">
            <div class="year">2011年</div>
            <ul>
              <li>この期間までは実は絵師として活躍していたが、友人のアドバイスにより、音屋活動をメインとして、別名義を使わず「ZAPPA」として活動を行う決意をする。</li>
            </ul>
          </div>
          <div class="timeline-item">
            <div class="year">2013年</div>
            <ul>
              <li>第10回博麗神社例大祭で、音屋として初めての作品、「東方雑破音」を販売。</li>
            </ul>
          </div>
          <div class="timeline-item">
            <div class="year">2014年</div>
            <ul>
              <li>第11回博麗神社例大祭で、「東方雑破劇」を販売。</li>
            </ul>
          </div>
          <div class="timeline-item">
            <div class="year">2015年</div>
            <ul>
              <li>第12回博麗神社例大祭で、「東方雑破箱」を販売。</li>
              <li>音楽活動の幅を広げるため、DJ活動を開始する。</li>
              <li>DJの師匠中根氏と共に「DTMer交流会」を企画、2021年まで高円寺で定期的に行われる。</li>
            </ul>
          </div>
          <div class="timeline-item">
            <div class="year">2016年</div>
            <ul>
              <li>DJとして「R.I.Y」出演。</li>
              <li>第13回博麗神社例大祭で、番外作品「傀儡な私 / Desire Overdrive（ゲスト、風雅九弥氏作）」を販売。</li>
            </ul>
          </div>
          <div class="timeline-item">
            <div class="year">2017年</div>
            <ul>
              <li>第14回博麗神社例大祭で、「東方雑破祭」「東方雑破音 Re:MASTER」を販売。</li>
              <li>札幌ねっとテレビ作品、「超マウスマン」主題歌「毒とあたしのクアグマイアプレイ」を提供。</li>
              <li>DJとして「ODORIVA」出演</li>
            </ul>
          </div>
          <div class="timeline-item">
            <div class="year">2018年</div>
            <ul>
              <li>第15回博麗神社例大祭で、番外作品「非公式 TOHO×BEMANI」を販売。</li>
              <li>博麗神社秋季例大祭5で、「東方雑破月」「東方雑破劇Re:MASTER+」を販売。</li>
              <li>DJとして「ODORIVA」「Make Of Mess!!」「シンジバーシリーズ」「Shimanchuの料理会シリーズ」「たのしいDJ園シリーズ」出演</li>
              <li>「the 1stS」オーガナイズ及DJ出演</li>
              <li>iTunes、Amazon Music、レコチョクへ、「Nerd Man's Strike Back」、「Tyrant」ダウンロード配信</li>
            </ul>
          </div>
          <div class="timeline-item">
            <div class="year">2019年</div>
            <ul>
              <li>第16回博麗神社例大祭で、「東方雑破鋼」を販売。</li>
              <li>博麗神社秋季例大祭6で、「東方雑破揺」を販売。</li>
              <li>DJとして「たのしいDJ園シリーズ」「FREEY TOKYO」、「Dream Paracise」出演</li>
              <li>タレント、ニンジャHIROKI氏とのコラボユニット、「The Masked Ninja Bros」計画スタート</li>
            </ul>
          </div>
          <div class="timeline-item">
            <div class="year">2020年</div>
            <ul>
              <li>コスプレイヤー、ルナ氏主催のバンド、「ルナバンド(仮)」のベースとして加入</li>
              <li>博麗神社秋季例大祭6で、「東方雑破揺」を販売。「The Masked Ninja Bros」、林麗奈氏とコラボし、「The Masked Ninja Bros.R」も始動</li>
            </ul>
          </div>
          <div class="timeline-item">
            <div class="year">2021年</div>
            <ul>
              <li>「The Masked Ninja Bros.R」、楽曲「Whip Nunchaku & Hardcore」公開</li>
              <li>​アイドルグループ、桜小町へ「尾張名古屋手毬唄」詞曲提供</li>
              <li>フリーBGMを公開する</li>
              <li>タレント、ニンジャHIROKI氏とのコラボユニット、「The Masked Ninja Bros」計画スタート</li>
            </ul>
          </div>
          <div class="timeline-item">
            <div class="year">2022年</div>
            <ul>
              <li>2月1日、YouTubeで配信活動を始める</li>
              <li>6月1日、VOCALOID曲、「フライング☆炎天下」公開</li>
              <li>7月15日、VOCALOID曲、「惑」公開​</li>
              <li>8月29日、伊藤魔鬼監督アニメ映画作品「マウスマン ダークチャイルド」にて、音響編集および一部声の出演として参加する</li>
            </ul>
          </div>
          <div class="timeline-item">
            <div class="year">2023年</div>
            <ul>
              <li>12月、アッキー氏と、Vtuberへの楽曲提供当選企画を開始する</li>
            </ul>
          </div>
          <div class="timeline-item">
            <div class="year">2024年</div>
            <ul>
              <li>3月5日、楽曲提供企画当選者、風輝優氏へ「キミのそばに」詩曲提供</li>
              <li>4月1日、伊藤魔鬼監督アニメOVA作品「新・やらないか」にて、音響編集として参加する</li>
              <li>4月28日、同業者千鶴氏によるサークル『Chip cane』のM3-2024春出展作品、「Ambient Carnival」にて、『Iceberg』を提供</li>
              <li>11月29日、同業者quickoo氏によるサークル『q-square』のM3-2024秋出展作品、「Parallel Splash」にて、『Shell Breaker!』を提供</li>
            </ul>
          </div>
          <div class="timeline-item">
            <div class="year">2025年</div>
            <ul>
              <li>2月3日、単独歌唱ライブで、「RIYSP」出演</li>
              <li>4月27日、同業者quickoo氏によるサークル『q-square』のM3-2024秋出展作品、「Road's Leading to the Square Vol.2」にて、Boochan氏作詞作品『時のキャンパス』を作曲及び歌唱、作詞として『Defying Time』を提供</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="footer-visual">
        <h2>ザッパワールディリア</h2>
        <p>© 2025 ZAPPAWorldillia.tokyo, All Rights Reserved.</p>
      </div>
    </footer>
  </body>
</html>