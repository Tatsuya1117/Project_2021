<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>株式会社テストカンパニー コーポレートサイト</title>
    <meta name="description" content="テストカンパニーはテストを追求します。">
    <meta name="keywords" content="株式会社テストカンパニー,testcompany,コーポレートサイト,企業情報,会社案内,採用情報">
    <meta property="og:title" content="株式会社テストカンパニー コーポレートサイト">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://test.com">
    <meta property="og:url" content="https://test.com">
    <meta property="og:description" content="テストカンパニー">
    <meta name="twitter:card" content="summary">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- テスト用jQuery　ここから -->
<script>
  $(function() {
    var h = $(window).height();
    
    $('#wrap').css('display','none');
    $('#loader-bg ,#loader').height(h).css('display','block');
  });
    
  $(window).load(function () { //全ての読み込みが完了したら実行
    $('#loader-bg').delay(900).fadeOut(800);
    $('#loader').delay(600).fadeOut(300);
    $('#wrap').css('display', 'block');
  });
    
  //10秒たったら強制的にロード画面を非表示
  $(function(){
    setTimeout('stopload()',10000);
  });
    
  function stopload(){
    $('#wrap').css('display','block');
    $('#loader-bg').delay(900).fadeOut(800);
    $('#loader').delay(600).fadeOut(300);
  }
  </script>
<!-- テスト用jQuery　ここまで -->
</head>

<body>
<!-- jQueryのテストコード　ここから -->
<div id="loader-bg">
  <div id="loader">
    <img src="/image/load_img.gif" width="80" height="80" alt="Now Loading" />
    <p>● ● ● TEST COMPANY</p>
  </div>
</div>
<div id="wrap">

<!-- テストスライダー　ここから -->
<div class="main_imgBox">
  <h2>テストスライダー</h2>
  <div class="main_img" style="background-image: url(https://f.uploader.xzy.pw/eu-prd/upload/20191108160744_61514c415a.jpg)">
  </div>
  <div class="main_img" style="background-image: url(https://f.uploader.xzy.pw/eu-prd/upload/20191108160418_5165755153.jpg)">
  </div>
  <div class="main_img" style="background-image: url(https://f.uploader.xzy.pw/eu-prd/upload/20191108160539_6f73696931.jpg)">
  </div>
  <div class="main_img" style="background-image: url(https://f.uploader.xzy.pw/eu-prd/upload/20191108160447_6f6d664c4f.jpg)">
  </div> 
  <div class="main_img" style="background-image: url(https://f.uploader.xzy.pw/eu-prd/upload/20191108161055_374e67765a.jpg)">
  </div>
  <div class="main_img" style="background-image: url(https://f.uploader.xzy.pw/eu-prd/upload/20191108161128_42466f414a.jpg)">
  </div>
</div>
<!-- テストスライダー　ここまで -->

<div class="l-page"><header class="l-header l-header--top">
  <p class="l-header__logo">
    <a href="/">
      <svg class="l-header__logo-co" width="154" height="13"><use xlink:href="/assets/images/sprite.symbol.svg#logo"></use></svg>
    </a>
  </p>

  <div class="change-language">
    <ul class="change-language__box">
      <li class="language-list">
        <a href="/" class="js-language language-txt is-active">JP</a>
      </li>
      <li class="language-list">
        <a href="/en" class="js-language language-txt">EN</a>
      </li>
    </ul>
  </div><!-- /.change-language -->

  <button class="l-header__menu-trigger" data-g-menu-trigger>
    <span class="line-wrap">
      <span class="line"></span>
      <span class="line"></span>
      <span class="line"></span>
    </span>
    <span class="text">
      <span class="text__open">MENU</span>
      <span class="text__close">CLOSE</span>
    </span>
  </button>
</header>

<header class="l-header l-header--fixed">
  <p class="l-header__logo">
    <a href="/">
      <svg class="l-header__logo-co" width="154" height="13"><use xlink:href="/assets/images/sprite.symbol.svg#logo"></use></svg>
    </a>
  </p>

  <nav class="l-header__nav u-d-none u-d-md-block">
    <ul class="nav-list">
      <li class="nav-list__item">
        <button data-nav-target="js-nav-company">企業情報</button>
      </li>
      <li class="nav-list__item">
        <a href="/product_service/">商品＆サービス</a>
      </li>
      <li class="nav-list__item">
        <a href="/ir/">IR情報</a>
      </li>
      <li class="nav-list__item">
        <a href="https://info.sanwacompany.co.jp/recruit/" target="_blank" id="H_RECRUIT">採用情報</a>
      </li>
      <li class="nav-list__item">
        <a href="/contact/" target="_blank" id="H_CONTACT">お問い合わせ</a>
      </li>
    </ul>
  </nav>

  <p class="l-header__store-button u-d-none u-d-md-block">
    <a href="https://www.sanwacompany.co.jp/shop/" target="_blank" id="H_EC">
      ONLINE STORE
      <svg width="8" height="8"><use xlink:href="/assets/images/sprite.symbol.svg#blank"></use></svg>
    </a>
  </p>

  <button class="l-header__menu-trigger" data-g-menu-trigger>
    <span class="line-wrap">
      <span class="line"></span>
      <span class="line"></span>
      <span class="line"></span>
    </span>
    <span class="text">
      <span class="text__open">MENU</span>
      <span class="text__close">CLOSE</span>
    </span>
  </button>

  <div class="l-nav-content" id="js-lower-nav">
    <div class="l-container">
      <div class="l-nav-content__item" id="js-nav-company">
        <h3 class="l-nav-content__heading">
          <span class="en">
            COMPANY<br>INFO
          </span>
          <span class="ja">企業情報</span>
        </h3>
        <div class="l-nav-content__low">
          <ul class="low-nav-list">
            <li class="low-nav-list__item">
              <a href="/company/aboutus/">
                サンワカンパニーについて
                <svg width="15" height="9"><use xlink:href="/assets/images/sprite.symbol.svg#arrow"></use></svg>
              </a>
            </li>
            <li class="low-nav-list__item">
              <a href="/company/info/">
                会社概要
                <svg width="15" height="9"><use xlink:href="/assets/images/sprite.symbol.svg#arrow"></use></svg>
              </a>
            </li>
            <li class="low-nav-list__item">
              <a href="/company/sponsor/">
                協賛企業
                <svg width="15" height="9"><use xlink:href="/assets/images/sprite.symbol.svg#arrow"></use></svg>
              </a>
            </li>
            <li class="low-nav-list__item">
              <a href="/company/showroom/">
                ショールーム
                <svg width="15" height="9"><use xlink:href="/assets/images/sprite.symbol.svg#arrow"></use></svg>
              </a>
            </li>
            <li class="low-nav-list__item">
              <a href="/company/history/">
                沿革
                <svg width="15" height="9"><use xlink:href="/assets/images/sprite.symbol.svg#arrow"></use></svg>
              </a>
            </li>
            <li class="low-nav-list__item">
              <a href="/company/csr/">
                ＣＳＲ
                <svg width="15" height="9"><use xlink:href="/assets/images/sprite.symbol.svg#arrow"></use></svg>
              </a>
            </li>
          </ul>
        </div>
      </div><!-- .l-nav-content__item -->
    </div>
  </div><!-- .l-nav-content -->
</header>

<div class="l-menu" id="js-g-menu">
  <p class="l-header__logo">
    <a href="/">
      <svg class="l-header__logo-co" width="154" height="13"><use xlink:href="/assets/images/sprite.symbol.svg#logo"></use></svg>
    </a>
  </p>

  <div class="l-menu__buttons">
    <div class="change-language change-language--another">
      <ul class="change-language__box">
        <li class="language-list">
          <a href="/" class="js-language language-txt is-active">JP</a>
        </li>
        <li class="language-list">
          <a href="/en" class="js-language language-txt">EN</a>
        </li>
      </ul>
    </div><!-- /.change-language -->

    <button class="l-header__menu-trigger" data-g-menu-trigger>
      <span class="line-wrap">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </span>
      <span class="text">
        <span class="text__open">MENU</span>
        <span class="text__close">CLOSE</span>
      </span>
    </button>
  </div>


  <div class="l-menu__inner">
    <div class="l-sitemap l-container">
      <div class="l-sitemap__inner">
        <div class="l-sitemap__category">
          <h3 class="l-sitemap__heading l-sitemap__button js-moblie-accordion">
            <a href="/company/aboutus/">
              <span>ABOUT US</span>
              <span class="ja u-d-md-none">サンワカンパニーについて</span>
            </a>
          </h3>
          <ul class="l-sitemap__content">
            <li class="l-sitemap__item u-d-md-none"><a href="/company/aboutus/">サンワカンパニーについて TOP</a></li>
            <li class="l-sitemap__item"><a href="/company/aboutus/#/Message" data-scroll>代表メッセージ</a></li>
            <li class="l-sitemap__item"><a href="/company/aboutus/#/Philosophy" data-scroll>経営理念</a></li>
            <li class="l-sitemap__item"><a href="/company/aboutus/#/Strength" data-scroll>当社の強み</a></li>
            <li class="l-sitemap__item"><a href="/company/aboutus/#/BusinessModel" data-scroll>ビジネスモデル</a></li>
          </ul>
        </div>
        <div class="l-sitemap__category">
          <h3 class="l-sitemap__heading l-sitemap__button js-moblie-accordion">
            <a href="/product_service/">
              <span>PRODUCTS & SERVICE</span>
              <span class="ja u-d-md-none">商品＆サービス</span>
            </a>
          </h3>
          <ul class="l-sitemap__content">
            <li class="l-sitemap__item u-d-md-none"><a href="/product_service/">商品＆サービス TOP</a></li>
            <li class="l-sitemap__item"><a href="/product_service/madejapan/">自社開発のこだわり</a></li>
            <li class="l-sitemap__item"><a href="/product_service/select/">選び抜かれた海外輸入商品</a></li>
            <li class="l-sitemap__item"><a href="/product_service/#Products">取り扱い商品</a></li>
            <li class="l-sitemap__item"><a href="/product_service/#Award">デザイン賞受賞</a></li>
            <li class="l-sitemap__item"><a href="https://www.sanwacompany.co.jp/shop/app/products/clasco/" target="_blank" id="H_GN01">モジュラー建築クラスコ</a></li>
            <li class="l-sitemap__item"><a href="https://www.sanwacompany.co.jp/shop/app/products/totalplanning/" target="_blank" id="H_GN02">トータルプランニングサービス</a></li>
            <li class="l-sitemap__item"><a href="https://www.sanwacompany.co.jp/shop/app/support/cozi_concierge/" target="_blank" id="H_GN03">Coziコンシェルジュ</a></li>
          </ul>
        </div>
        <div class="l-sitemap__category">
          <h3 class="l-sitemap__heading l-sitemap__button js-moblie-accordion">
            <span class="inner">
              <span>COMPANY</span>
              <span class="ja u-d-md-none">会社情報</span>
            </span>
          </h3>
          <ul class="l-sitemap__content">
            <li class="l-sitemap__item"><a href="/company/info/">会社概要</a></li>
            <li class="l-sitemap__item"><a href="/company/sponsor/">協賛企業</a></li>
            <li class="l-sitemap__item"><a href="/company/showroom/">ショールーム</a></li>
            <li class="l-sitemap__item"><a href="/company/history/">沿革</a></li>
            <li class="l-sitemap__item"><a href="/company/csr/">CSR</a></li>
          </ul>
        </div>
        <div class="l-sitemap__category">
          <h3 class="l-sitemap__heading l-sitemap__button js-moblie-accordion">
            <a href="/ir/">
              <span>IR</span>
              <span class="ja u-d-md-none">IR情報</span>
            </a>
          </h3>
          <ul class="l-sitemap__content">
            <li class="l-sitemap__item u-d-md-none"><a href="/ir/">IR TOP</a></li>
            <li class="l-sitemap__item"><a href="/ir/news.html">IRニュース</a></li>
            <li class="l-sitemap__item"><a href="/ir/business.html">個人投資家の皆様へ</a></li>
            <li class="l-sitemap__item"><a href="/ir/tanshin.html">IRライブラリー</a></li>
            <li class="l-sitemap__item"><a href="/ir/highlight.html">財務ハイライト</a></li>
            <li class="l-sitemap__item"><a href="/ir/stock.html">株式について</a></li>
            <li class="l-sitemap__item"><a href="/ir/calendar.html">ＩRカレンダー</a></li>
            <li class="l-sitemap__item"><a href="/ir/governance.html">コーポレート・ガバナンス</a></li>
            <li class="l-sitemap__item"><a href="/ir/faq.html">よくあるご質問</a></li>
            <li class="l-sitemap__item"><a href="/ir/koukoku.html">電子公告</a></li>
            <li class="l-sitemap__item"><a href="/ir/disclaimer.html">免責事項</a></li>
          </ul>
        </div>
        <div class="l-sitemap__buttons">
          <p class="l-sitemap__button">
            <a href="/news/">
              <span>NEWS</span>
              <span class="ja u-d-md-none">ニュース</span>
              <svg width="15" height="9"><use xlink:href="/assets/images/sprite.symbol.svg#arrow"></use></svg>
            </a>
          </p>
          <p class="l-sitemap__button">
            <a href="https://info.sanwacompany.co.jp/recruit/" target="_blank" class="blank" id="H_GN_RECRUIT">
              <span>RECRUIT</span>
              <span class="ja u-d-md-none">採用情報</span>
            </a>
          </p>
          <p class="l-sitemap__button">
            <a href="/contact/" target="_blank" id="H_GN_CONTACT">
              <span>CONTACT</span>
              <span class="ja u-d-md-none">お問い合わせ</span>
              <svg width="15" height="9"><use xlink:href="/assets/images/sprite.symbol.svg#arrow"></use></svg>
            </a>
          </p>
        </div>
        <div class="l-sitemap__right">
          <div class="l-sitemap__category l-sitemap__category--blog">
            <h3 class="l-sitemap__heading l-sitemap__button js-moblie-accordion">
              <span class="inner">
                <span>BLOG</span>
                <span class="ja u-d-md-none">ブログ</span>
              </span>
            </h3>
            <ul class="l-sitemap__content">
              <li class="l-sitemap__item"><a href="/blog/" target="_blank" id="H_GN04">オフィシャルブログ</a></li>
              <li class="l-sitemap__item"><a href="https://www.yamanetaro.com/" target="_blank" id="H_GN05">社長ブログ</a></li>
            </ul>
          </div>

          <div class="l-sitemap__category l-sitemap__category--special">
            <h3 class="l-sitemap__heading l-sitemap__button js-moblie-accordion">
              <span class="inner">
                <span>SPECIAL CONTENTS</span>
                <span class="ja u-d-md-none">スペシャルコンテンツ</span>
              </span>
            </h3>
            <ul class="l-sitemap__content">
              <li class="l-sitemap__item"><a href="https://info.sanwacompany.co.jp/40th/" target="_blank" id="H_GN06">40周年記念サイト</a></li>
              <li class="l-sitemap__item"><a href="https://info.sanwacompany.co.jp/designaward/" target="_blank" id="H_GN07">サンワカンパニーデザインアワード</a></li>
              <li class="l-sitemap__item"><a href="https://info.sanwacompany.co.jp/salone2020/" target="_blank" id="H_GN08">2020ミラノサローネ国際家具見本市</a></li>
            </ul>
          </div>

          <p class="online-store">
            <a href="https://www.sanwacompany.co.jp/shop/" target="_blank" id="H_MENU_EC">
              ONLINE STORE
              <svg width="8" height="8"><use xlink:href="/assets/images/sprite.symbol.svg#blank"></use></svg>
            </a>
          </p>

          <ul class="other-links">
            <li class="other-links__item"><a href="https://www.sanwacompany.co.jp/shop/app/rules/privacypolicy/" target="_blank" id="H_GN09">プライバシーポリシー</a></li>
            <li class="other-links__item"><a href="https://www.sanwacompany.co.jp/shop/app/rules/cookiepolicy/" target="_blank" id="H_GN10">クッキーポリシー</a></li>
            <li class="other-links__item"><a href="https://www.sanwacompany.co.jp/shop/app/rules/use_social/" target="_blank" id="H_GN11">ソーシャルメディア利用規約</a></li>
            <li class="other-links__item"><a href="https://www.sanwacompany.co.jp/shop/app/rules/social_policy/" target="_blank" id="H_GN12">ソーシャルメディアポリシー</a></li>
          </ul>

          <ul class="sns-list">
            <li class="sns-list__item">
              <a href="https://twitter.com/sanwacompany" target="_blank" id="H_SNS01">
                <svg width="36" height="27"><use xlink:href="/assets/images/sprite.symbol.svg#twitter"></use></svg>
              </a>
            </li>
            <li class="sns-list__item">
              <a href="https://www.facebook.com/sanwacompany/" target="_blank" id="H_SNS02">
                <svg width="36" height="27"><use xlink:href="/assets/images/sprite.symbol.svg#facebook"></use></svg>
              </a>
            </li>
            <li class="sns-list__item">
              <a href="https://access.line.me/oauth2/v2.1/authorize?response_type=code&client_id=1587125327&redirect_uri=https://ext-auth.karte.io/oauth2/line/callback&bot_prompt=normal&state=https://info.sanwacompany.co.jp/:::::9483631f3c990f1329ef2e32508ee377&scope=profile%20openid&openExternalBrowser=1" target="_blank" id="H_SNS03">
                <svg width="36" height="27"><use xlink:href="/assets/images/sprite.symbol.svg#line"></use></svg>
              </a>
            </li>
            <li class="sns-list__item">
              <a href="https://www.instagram.com/sanwacompany/" target="_blank" id="H_SNS04">
                <svg width="36" height="27"><use xlink:href="/assets/images/sprite.symbol.svg#instagram"></use></svg>
              </a>
            </li>
            <li class="sns-list__item">
              <a href="https://www.pinterest.jp/sanwacompany/" target="_blank" id="H_SNS05">
                <svg width="36" height="27"><use xlink:href="/assets/images/sprite.symbol.svg#pinterest"></use></svg>
              </a>
            </li>
            <li class="sns-list__item">
              <a href="https://www.youtube.com/channel/UCy8vqZy1iyhQKAcyVqYaYtw" target="_blank" id="H_SNS06">
                <svg width="36" height="27"><use xlink:href="/assets/images/sprite.symbol.svg#youtube"></use></svg>
              </a>
            </li>
          </ul>
        </div>
      </div><!-- .l-sitemap__inner -->
    </div><!-- .l-sitemap -->
  </div>
</div><!-- .l-menu -->

<main class="l-main">
    <div class="mv" id="js-mv">
        <div class="mv__inner" data-parallax="{pc: 0.3, sp:0.3}" style="transform: translateY(34.92px);">
            <h1 class="mv__heading">くらしを楽しく、美しく。</h1>
            <div class="mv__bg mv01 is-animation">
                <div class="mv__bg-inner" data-parallax="{pc: -0.2, sp:-0.2}" style="transform: translateY(-21.8832px);">
                    <div data-parallax="{pc: 0.2, sp:0.2}" style="transform: translateY(22.7585px);">
            </div>
        </div>
    </div>

<div class="mv__bg mv02 is-active is-animation">
<div class="mv__bg-inner" data-parallax="{pc: -0.2, sp:-0.2}" style="transform: translateY(-21.8832px);">
<div data-parallax="{pc: 0.2, sp:0.2}" style="transform: translateY(22.7585px);"></div></div></div>

<div class="mv__bg mv03">
<div class="mv__bg-inner" data-parallax="{pc: -0.2, sp:-0.2}" style="transform: translateY(-21.8832px);">
<div data-parallax="{pc: 0.2, sp:0.2}" style="transform: translateY(22.7585px);"></div></div></div>

<div class="mv__bg mv04">
<div class="mv__bg-inner" data-parallax="{pc: -0.2, sp:-0.2}" style="transform: translateY(-21.8832px);">
<div data-parallax="{pc: 0.2, sp:0.2}" style="transform: translateY(22.7585px);"></div></div></div></div>

<div class="mv__scroll u-d-none u-d-md-block">
<button class="mv__scroll-button" data-scroll="#anc">
<div class="mv__scroll-inner">SCROLL DOWN</div>
</button>
</div>
</div>

<!-- .mv -->
<div class="l-container">
<div class="pickup-news">
<h2 class="pickup-news__heading">NEWS</h2>
<div class="swiper-container swiper-container-fade swiper-container-initialized swiper-container-horizontal" id="js-pickup-news-slider">
<div class="swiper-wrapper" style="transition-duration: 0ms;">
<div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 820px; transition-duration: 0ms; opacity: 0; transform: translate3d(0px, 0px, 0px);">
<a href="/news/detail/?id=304&amp;">
<p class="date">2020.09.14</p>
<p class="text">監査役人事内定に関するお知らせ</p></a></div>

<div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" style="width: 820px; transition-duration: 0ms; opacity: 0; transform: translate3d(-820px, 0px, 0px);">
<a href="/news/detail/?id=302&amp;">
<p class="date">2020.09.15</p>
<p class="text">【プレスリリース】2021年ミラノサローネ出展見送りのお知らせ</p></a></div>

<div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" style="width: 820px; transition-duration: 0ms; opacity: 1; transform: translate3d(-1640px, 0px, 0px);">
<a href="/news/detail/?id=305&amp;">
<p class="date">2020.09.15</p>
<p class="text">『住まいの設計』に≪エレガンススクエア≫≪センシー洗面≫≪グラッド45≫が掲載されました</p></a></div>

<div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" style="width: 820px; transition-duration: 0ms; opacity: 0; transform: translate3d(-2460px, 0px, 0px);">
    <a href="/news/detail/?id=303&amp;">
    <p class="date">2020.09.14</p>
    <p class="text">組織変更及び人事異動のお知らせ</p>
    </a>
</div>

<div class="swiper-slide" data-swiper-slide-index="3" style="width: 820px; transition-duration: 0ms; opacity: 0; transform: translate3d(-3280px, 0px, 0px);">
<a href="/news/detail/?id=304&amp;"><p class="date">2020.09.14</p>
<p class="text">監査役人事内定に関するお知らせ</p></a></div>

<div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" style="width: 820px; transition-duration: 0ms; opacity: 0; transform: translate3d(-4100px, 0px, 0px);"><a href="/news/detail/?id=302&amp;"><p class="date">2020.09.15</p>
<p class="text">【プレスリリース】2021年ミラノサローネ出展見送りのお知らせ</p></a></div></div>

<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

<div class="pickup-news__ui"><button class="pickup-news__prev" tabindex="0" role="button" aria-label="Previous slide"><svg width="15" height="9"><use xlink:href="/assets/images/sprite.symbol.svg#arrow"></use></svg></button>

<div class="pickup-news__pagination swiper-pagination-fraction">
<span class="swiper-pagination-current">2</span> / <span class="swiper-pagination-total">4</span></div>

<button class="pickup-news__next" tabindex="0" role="button" aria-label="Next slide">
<svg width="15" height="9">
<use xlink:href="/assets/images/sprite.symbol.svg#arrow"></use></svg></button></div></div>

<!-- .pickup-news -->
</div>
<!-- .l-container -->
<div id="anc"></div>
<section class="sec-highlight">
<div class="l-container l-container--wide">
<h2 class="sec-highlight__heading c-heading js-scroll-active is-active">HIGHLIGHT</h2>
<ul class="highlight-list" id="js-highlight">
<li class="highlight-list__item js-scroll-active is-active">
<a href="https://www.sanwacompany.co.jp/shop/app/pages/ar/" target="_blank">
<article class="highlight">
<figure class="highlight__figure">
<img src="/lacne/news/upload/ar_thum.jpg" alt="" data-object-fit=""></figure>
<div class="highlight__content">
<h3 class="highlight__title">システムキッチンのwebARを導⼊</h3>
<p class="highlight__description">スマホで⼿軽にキッチンの設置イメージを確認できる「webAR」を導入。ご自身のお宅や設置したい場所で、サンワカンパニーのキッチンのサイズや色を確認することができます。</p>
<p class="highlight__more">MORE <svg width="15" height="9"><use xlink:href="/assets/images/sprite.symbol.svg#arrow"></use></svg></p></div></article></a></li><li class="highlight-list__item js-scroll-active is-active"><a href="https://info.sanwacompany.co.jp/designaward/" target="_blank"> <article class="highlight"><figure class="highlight__figure"><img src="/lacne/news/upload/designaward2020.gif" alt="" data-object-fit=""></figure><div class="highlight__content"><h3 class="highlight__title">「サンワカンパニーデザインアワード2020」作品募集</h3><p class="highlight__description">未来のくらしを美しく快適なものに変えていく、プロダクトデザインや施工事例を大募集。応募期間は10月31日まで。皆様のご応募をお待ちしております。</p><p class="highlight__more">MORE <svg width="15" height="9"><use xlink:href="/assets/images/sprite.symbol.svg#arrow"></use></svg></p></div></article></a></li><li class="highlight-list__item js-scroll-active is-active"><a href="/news/detail/?id=254&amp;"> <article class="highlight"><figure class="highlight__figure"><img src="/lacne/news/upload/if2020_thum2.png" alt="" data-object-fit=""></figure><div class="highlight__content"><h3 class="highlight__title">「iFデザイン賞2020」を6商品で受賞いたしました。</h3><p class="highlight__description">サンワカンパニーは世界3大デザイン賞のひとつである「iFデザイン賞2020」を6商品で受賞。本賞の受賞は6年連続となります。ワールドデザインインデクスはトップ10にランクインいたしました。</p><p class="highlight__more">MORE <svg width="15" height="9"><use xlink:href="/assets/images/sprite.symbol.svg#arrow"></use></svg></p></div></article></a></li></ul><button class="sec-highlight__more c-button c-button--more" id="js-highlight-trigger" style="display: none;">MORE</button></div></section><!-- .sec-highlight --><section class="sec-about"><div class="l-container l-container--wide"><h2 class="sec-about__heading c-heading js-scroll-active is-active">ABOUT US</h2></div><div class="sec-about__inner"><div class="sec-about__content"><div class="sec-about__content-inner"><p class="lead js-scroll-active is-active"><strong>私たちは、<br>あなたの理想をカタチにする<br>空間のスタイリストです。</strong></p><p class="text">空間に対するこだわりは、十人十色。 デザインの美学や、理想の暮らしは人によって異なります。 だからこそ、シンプルでミニマルなものを私たちは追求します。<br>ディティールを生かす意匠、シンプルな形状は、 あなたの個性を自由に演出することができるからです。 思わず誰かを招きたくなるような、スタイリッシュなデザインは、 見る人の感性を刺激し、創造力を高めてくれます。<br>毎日を、自分らしく、豊かに生きる。 そんな幸せがある空間の創造を、お手伝いいたします。</p><p class="more"><a href="/company/aboutus/" class="c-button c-button--white">MORE <svg width="15" height="9"><use xlink:href="/assets/images/sprite.symbol.svg#arrow"></use></svg></a></p><div class="sec-about__content-bg" data-parallax="{pc: -0.2, sp: 0}" style="transform: translateY(73.2725px);"></div></div></div><figure class="sec-about__figure"><picture><source media="(min-width: 768px)" srcset="/assets/images/pages/index/about_figure_md.jpg"><img src="/assets/images/pages/index/about_figure.jpg" alt="" data-object-fit="" data-parallax="{pc: -0.2, sp: -0.9}" style="transform: translateY(73.2725px);"></picture></figure></div></section><!-- .sec-about --><section class="sec-product"><div class="sec-product__content js-scroll-active is-active"><h2 class="sec-product__heading c-heading"><span>PRODUCTS</span><span> &amp; </span><span>SERVICE</span></h2><p class="text">キッチン、洗面台、バス、建具などの住宅設備の他、タイル、レンガ、床材、天然石、ガラスなどの建築資材を豊富に取り揃えております。<br class="u-d-none u-d-md-block">あなたの空間づくりへのこだわりを実現できるアイテムがきっと見つかります。</p><p class="more"><a href="/product_service/" class="c-button">MORE <svg width="15" height="9"><use xlink:href="/assets/images/sprite.symbol.svg#arrow"></use></svg></a></p></div><div class="l-container l-container--wide"><div class="showroom js-scroll-active is-active"><a href="/company/showroom/"><div class="showroom__image"><div class="showroom__bg showroom__bg--01 is-animation"></div><div class="showroom__bg showroom__bg--02 is-active is-animation"></div><div class="showroom__bg showroom__bg--03"></div><div class="showroom__bg showroom__bg--04"></div><div class="showroom__bg showroom__bg--05"></div></div><div class="showroom__content"><h3 class="showroom__heading">SHOWROOM</h3><p class="text">ショールームのご案内</p><div class="more">MORE <svg width="15" height="9"><use xlink:href="/assets/images/sprite.symbol.svg#arrow"></use></svg></div></div></a></div></div></section><!-- .sec-product --><div class="sec-small-wrap"><section class="sec-company sec-small"><figure class="sec-small__figure"><img src="/assets/images/pages/index/company_figure.jpg" alt=""></figure><div class="sec-small__content js-scroll-active is-active"><h2 class="sec-small__heading"><span>COMPANY</span> <span>INFO</span></h2><p class="ja">会社概要</p><p class="more"><a href="/company/info/" class="c-button c-button--white">MORE <svg width="15" height="9"><use xlink:href="/assets/images/sprite.symbol.svg#arrow"></use></svg></a></p></div></section><!-- .sec-company --><section class="sec-ir sec-small"><figure class="sec-small__figure"><img src="/assets/images/pages/index/ir_figure.jpg" alt=""></figure><div class="sec-small__content js-scroll-active is-active"><h2 class="sec-small__heading"><span>INVESTOR</span> <span>RELATIONS</span></h2><p class="ja">IR情報</p><p class="more"><a href="/ir/" class="c-button c-button--white">MORE <svg width="15" height="9"><use xlink:href="/assets/images/sprite.symbol.svg#arrow"></use></svg></a></p></div></section><!-- .sec-ir --></div><!-- sec-small-wrap --><section class="sec-news"><div class="l-container"><h2 class="sec-news__heading c-heading js-scroll-active is-active">NEWS</h2><div id="js-tab"><div class="tab-list c-tab-selector u-d-none u-d-md-block"><div class="c-tab-selector__button-wrap"><button class="c-tab-selector__button is-active" data-tab-target="tab-all">ALL</button> <button class="c-tab-selector__button" data-tab-target="tab-info">INFO</button> <button class="c-tab-selector__button" data-tab-target="tab-media">MEDIA</button> <button class="c-tab-selector__button" data-tab-target="tab-press">PRESS</button> <button class="c-tab-selector__button" data-tab-target="tab-recruit">RECRUIT</button></div><div class="c-tab-selector__select"><select class="js-tab-select"><option value="tab-all">ALL</option><option value="tab-info">INFO</option><option value="tab-media">MEDIA</option><option value="tab-press">PRESS</option><option value="tab-recruit">RECRUIT</option></select></div></div><!-- .c-tab-selector --><div class="tab-wrap js-tab-wrapper"><div class="tab-content is-active" id="tab-all"><ul class="c-news-list js-scroll-active is-active"><li class="c-news-list__item"><a href="/news/detail/?id=302&amp;" class="news"><p class="news__date">2020.09.15</p><p class="news__category">PRESS</p><p class="news__text">【プレスリリース】2021年ミラノサローネ出展見送りのお知らせ</p></a></li><li class="c-news-list__item"><a href="/news/detail/?id=305&amp;" class="news"><p class="news__date">2020.09.15</p><p class="news__category">MEDIA</p><p class="news__text">『住まいの設計』に≪エレガンススクエア≫≪センシー洗面≫≪グラッド45≫が掲載されました</p></a></li><li class="c-news-list__item"><a href="/news/detail/?id=303&amp;" class="news"><p class="news__date">2020.09.14</p><p class="news__category">INFO</p><p class="news__text">組織変更及び人事異動のお知らせ</p></a></li><li class="c-news-list__item"><a href="/news/detail/?id=304&amp;" class="news"><p class="news__date">2020.09.14</p><p class="news__category">INFO</p><p class="news__text">監査役人事内定に関するお知らせ</p></a></li><li class="c-news-list__item"><a href="/news/detail/?id=301&amp;" class="news"><p class="news__date">2020.09.11</p><p class="news__category">MEDIA</p><p class="news__text">『マイナビニュース』にサンワカンパニーが掲載されました</p></a></li></ul></div><!-- .tab-content --><div class="tab-content" id="tab-info"><ul class="c-news-list js-scroll-active"><li class="c-news-list__item"><a href="/news/detail/?id=303&amp;" class="news"><p class="news__date">2020.09.14</p><p class="news__category">INFO</p><p class="news__text">組織変更及び人事異動のお知らせ</p></a></li><li class="c-news-list__item"><a href="/news/detail/?id=304&amp;" class="news"><p class="news__date">2020.09.14</p><p class="news__category">INFO</p><p class="news__text">監査役人事内定に関するお知らせ</p></a></li><li class="c-news-list__item"><a href="/news/detail/?id=296&amp;" class="news"><p class="news__date">2020.08.03</p><p class="news__category">INFO</p><p class="news__text">『全国賃貸住宅新聞』にサンワカンパニーが掲載されました</p></a></li><li class="c-news-list__item"><a href="https://info.sanwacompany.co.jp/blog/detail/?id=115&amp;page=1" target="_blank" class="news"><p class="news__date">2020.07.28</p><p class="news__category">INFO</p><p class="news__text">【ブログ更新】「サンワカンパニーデザインアワード2020」審査通過のポイントを紹介</p></a></li><li class="c-news-list__item"><a href="/news/detail/?id=273&amp;" class="news"><p class="news__date">2020.07.28</p><p class="news__category">INFO</p><p class="news__text">【重要】緊急事態宣言解除による今後の対応について</p></a></li></ul></div><!-- .tab-content --><div class="tab-content" id="tab-media"><ul class="c-news-list js-scroll-active"><li class="c-news-list__item"><a href="/news/detail/?id=305&amp;" class="news"><p class="news__date">2020.09.15</p><p class="news__category">MEDIA</p><p class="news__text">『住まいの設計』に≪エレガンススクエア≫≪センシー洗面≫≪グラッド45≫が掲載されました</p></a></li><li class="c-news-list__item"><a href="/news/detail/?id=301&amp;" class="news"><p class="news__date">2020.09.11</p><p class="news__category">MEDIA</p><p class="news__text">『マイナビニュース』にサンワカンパニーが掲載されました</p></a></li><li class="c-news-list__item"><a href="/news/detail/?id=300&amp;" class="news"><p class="news__date">2020.09.11</p><p class="news__category">MEDIA</p><p class="news__text">『新建ハウジング』にサンワカンパニーが掲載されました</p></a></li><li class="c-news-list__item"><a href="/news/detail/?id=297&amp;" class="news"><p class="news__date">2020.08.01</p><p class="news__category">MEDIA</p><p class="news__text">『リフォーム楽々通信コレクション』に≪タオルウォーマー≫が掲載されました</p></a></li><li class="c-news-list__item"><a href="/news/detail/?id=295&amp;" class="news"><p class="news__date">2020.07.30</p><p class="news__category">MEDIA</p><p class="news__text">『SUUMOリフォーム』に≪DRAW A LINE≫が掲載されました</p></a></li></ul></div><!-- .tab-content --><div class="tab-content" id="tab-press"><ul class="c-news-list js-scroll-active"><li class="c-news-list__item"><a href="/news/detail/?id=302&amp;" class="news"><p class="news__date">2020.09.15</p><p class="news__category">PRESS</p><p class="news__text">【プレスリリース】2021年ミラノサローネ出展見送りのお知らせ</p></a></li><li class="c-news-list__item"><a href="/news/detail/?id=299&amp;" class="news"><p class="news__date">2020.09.09</p><p class="news__category">PRESS</p><p class="news__text">【プレスリリース】サンワカンパニーがLIFULL Social Fundingと業務提携</p></a></li><li class="c-news-list__item"><a href="/news/detail/?id=283&amp;" class="news"><p class="news__date">2020.07.03</p><p class="news__category">PRESS</p><p class="news__text">【プレスリリース】システムキッチンにwebARを導入</p></a></li><li class="c-news-list__item"><a href="/news/detail/?id=281&amp;" class="news"><p class="news__date">2020.07.01</p><p class="news__category">PRESS</p><p class="news__text">【プレスリリース】サンワカンパニーデザインアワード2020開催</p></a></li><li class="c-news-list__item"><a href="/news/detail/?id=276&amp;" class="news"><p class="news__date">2020.06.11</p><p class="news__category">PRESS</p><p class="news__text">【プレスリリース】米国市場進出に向け一歩前進「HOMMA ONE」完成</p></a></li></ul></div><!-- .tab-content --><div class="tab-content" id="tab-recruit"><p class="no_search">新しい情報はありません。</p></div><!-- .tab-content --></div><!-- tab-wrap --></div><div class="more"><a href="/news/" class="c-button">MORE <svg width="15" height="9"><use xlink:href="/assets/images/sprite.symbol.svg#arrow"></use></svg></a></div></div></section><!-- .sec-news --><div class="blog-links"><div class="l-container"><p class="blog-links__item"><a href="https://www.yamanetaro.com/" target="_blank" id="C_BLOG01"><span class="text"><span class="main">TARO</span> <span class="main">BLOG</span> <span class="sub">社長ブログ<svg width="8" height="8"><use xlink:href="/assets/images/sprite.symbol.svg#blank"></use></svg></span></span><picture><source media="(min-width: 768px)" srcset="/assets/images/pages/index/blog_president_md.jpg"><img src="/assets/images/pages/index/blog_president.jpg" alt="" class="image"></picture></a></p><p class="blog-links__item"><a href="/blog/" target="_blank" id="C_BLOG02"><span class="text"><span class="main">OFFICIAL</span> <span class="main">BLOG</span> <span class="sub">オフィシャルブログ<svg width="8" height="8"><use xlink:href="/assets/images/sprite.symbol.svg#blank"></use></svg></span></span><picture><source media="(min-width: 768px)" srcset="/assets/images/pages/index/blog_official_md.jpg"><img src="/assets/images/pages/index/blog_official.jpg" alt="" class="image"></picture></a></p></div></div></main>

</div>
<!-- jQueryのテストコード　ここまで -->

</body>
</html>


