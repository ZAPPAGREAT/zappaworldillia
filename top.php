<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ザッパワールディリア</title>
    <meta name="description" content="ザッパワールディリアでは、作曲、DJ、音響編集などのご依頼を受付中。フリーBGMも配布中。お気軽にご利用・ご相談ください。">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">    <link rel="stylesheet" href="https://unpkg.com/ress@4.0.0/dist/ress.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/responsive.css">
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
        "@type": "Organization",
        "name": "ZAPPA Worldillia",
        "url": "https://zappaworldillia.com", 
        "logo": "https://zappaworldillia.com/images/ZAPPA-Worldillia-logo.png",
        "description": "ザッパワールディリアでは、作曲、DJ、音響編集などのご依頼を受付中。フリーBGMも配布中。お気軽にご利用・ご相談ください。",
        "sameAs": [
          "https://note.com/zappaworldillia",
          "https://X.com/zappa_great", 
          "https://youtube.com/@thezappagreat" 
        ],
        "contactPoint": {
          "@type": "ContactPoint",
          "contactType": "customer support",
          "availableLanguage": ["ja"]
        }
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
      window.addEventListener('load', function() {
        const logos = document.querySelectorAll('.top-logo');
        logos.forEach((logo, index) => {
          setTimeout(() => {
            logo.classList.add('fade-in');
          }, 100 + index * 100); // 少しずつ時間ずらす場合
        });
      });
      document.addEventListener("DOMContentLoaded", function () {
        const hamburger = document.getElementById("hamburger");
        const navMenu = document.getElementById("nav-menu");

        hamburger.addEventListener("click", function () {
          navMenu.classList.toggle("active");
        });
      });
    </script>

    <div class="top-wrapper">
      <div class="container">
        <img class="top-logo logo-character" src="/images/zappaworldillia-character.png" alt="ザッパワールディリア公式ロゴ">
        <img class="top-logo top-logo-height" src="/images/ZAPPA Worldillia logo.png" alt="ザッパワールディリア公式ロゴ">
      </div>
    </div>
    <div class="news-wrapper">
      <div class="container">
        <h2 class="section-title">更新情報</h2>
        <div class="news-container">
          <div class="news-list">
            <div class="news-item">
              <span class="news-date">2025年07/30日(wed)</span>
              <p>【Top】サイト名とロゴに動きを付けて、背景も追加しました。</p>
            </div>
            <div class="news-item">
              <span class="news-date">2025年07/28日(mon)</span>
              <p>【Profile】自己紹介に自画像とアイコンを追加しました。</p>
            </div>
            <div class="news-item">
              <span class="news-date">2025年07/27日(sun)</span>
              <p>【Free BGM DL】Blue Wave Rider を追加しました。</p>
            </div>
            <div class="news-item">
              <span class="news-date">2025年07/23日(wed)</span>
              <p>新たなドメインで公式サイトを再公開しました。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="schedule-wrapper">
      <div class="container">
        <h2 class="section-title">スケジュール</h2>
        <div class="schedule-list">
          <p>2025年7月20日(土) RIYSP@高円寺サウンドスタジオドム DJ出演</p>
        </div>
        <p class="schedule-notice">現在、DJ出演、ライブ音響(MA、PA)など募集可能です。</p>
        <a href="commission.php" class="btn">お仕事のご依頼はこちらへ</a>
      </div>
    </div>
    <div class="blog-wrapper">
      <div class="container">
        <h2 class="section-title">ブログ</h2>
        <div class="blog-links">
          <a href="https://note.com/zappaworldillia" class="blog-link" target="_blank" rel="noopener noreferrer">
            <img class="blog-link-icon" src="/images/note-icon.jpg" alt="メディアプラットフォーム『note』ロゴ">
            <p>noteでブログを書いています</p>
          </a>
        </div>
      </div>
    </div>
    <footer>
      <div class="footer-visual">
        <h2>ザッパワールディリア</h2>
        <p>© 2025 ZAPPAWorldillia, All Rights Reserved.</p>
      </div>
    </footer>
  </body>
</html>
