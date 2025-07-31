<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ザッパワールディリア</title>
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
    <main class="main-content">
      <div class="links-container">
        <h1>お世話になっている愉快な皆様です。</h1>
        <div class="links-grid">
          <a href="https://www.hirokijapan.com/" class="link-card" target="_blank" rel="noopener noreferrer">
            <div class="link-image">
              <img src="/images/Hiroki.jpg" alt="ヌンチャクアーティスト『ニンジャHIROKI』リンクカード">
            </div>
            <div class="link-content">
              <h2>ニンジャHIROKI</h2>
              <h3>ヌンチャクアーティスト</h3>
              <p>メンバー入りしているユニット、The Masked Ninja Bros としてお世話になっている、ヌンチャク名人なタレントさんです。</p>
              <p>僕のサイトのプロフィール欄で、今後の活躍を書き上げます。</p>
            </div>
          </a>
          <a href="https://animetokyo12.jimdofree.com/" class="link-card" target="_blank" rel="noopener noreferrer">
            <div class="link-image">
              <img src="/images/animetokyo.png" alt="アニメ制作会社『合同会社あにめ東京』リンクカード">
            </div>
            <div class="link-content">
              <h2>合同会社あにめ東京</h2>
              <h3>アニメ制作会社</h3>
              <p>伊藤魔鬼監督と長い付き合いのアニメ制作会社です。</p>
              <p>これまで、声の出演や音響編集などを携わらせていただいております。</p>
            </div>
          </a>
        </div>
      </div>
    </main>
    <footer>
        <div class="footer-visual">
          <h2>ザッパワールディリア</h2>
          <p>© 2025 ZAPPAWorldillia, All Rights Reserved.</p>
        </div>
      </footer>
    </body>
  </html>