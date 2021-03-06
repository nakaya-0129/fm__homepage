<?php
/*
* Template Name: インタビュー
*/
?>
<!doctype html>                                                                                 
<html>
 <head>
  <link rel="stylesheet" href="<?= get_template_directory_uri();?>/static/css/reset.css" media="all">
  <link rel="stylesheet" href="<?= get_template_directory_uri();?>/static/css/interview.css" media="all">
  <meta charset ="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link href="<?= get_template_directory_uri();?>/static/js/slick/slick/slick-theme.css" rel="stylesheet" type="text/css">
  <link href="<?= get_template_directory_uri();?>/static/js/slick/slick/slick.css" rel="stylesheet" type="text/css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
  <script type="text/javascript" src="<?= get_template_directory_uri();?>/static/js/slick/slick/slick.min.js#"></script>
  <script>
    $(function(){                              
     $(".header__menu").on("click",function(){
     $(".header__hidden__list").addClass("active");
     $(".header__menu").css("display","none");
     $("main").css("opacity","0.6");
  });
  
   $(".close__btn").on("click",function(){
      $(".header__hidden__list").removeClass("active");
      $("main").css("opacity","1");
      $(".header__menu").css("display","block");   
    });
  });
 </script>  
</head>
<body>
<div id="wrapper">
<header>
 <ul class="header__main__list">
  <li class="logo"><a href="/トップページ">HUMAN BASE OKANO</a></li>
  <li><a href="/トップページ">TOP</a></li>
  <li><a href="/インフォメーション">INFORMATION</a></li>
  <li><a href="/店舗一覧">STORE INDEX</a></li>
  <li>RECRUTE</li>
 </ul>
 <div id="header__hidden__content">
   <div class="header__hidden__main">
     <div class="hidden__title">
       <h2>HUMAN BASE OKANO</h2>
     </div>
     <div class="header__menu">
      <div></div><div></div><div></div>
     </div>
   </div>

  <div class="header__hidden__list">
   <ul>
    <li class="close__btn">×</li>
    <li><a href="/トップページ">TOP</a><li>
    <li><a href="/インフォメーション">INFORMATION</a><li>
    <li><a href="/店舗紹介">STORE INDEX</a></li>
    <li>RECRUTE<li>
   </ul>
  </div>
 </div>
</header>

<main>
 <div id ="interview__content">
  <h1>INTERVIEW</h1>
  <div class="interview__top__content">
    <div class="interview__image__left"></div>
    <div class="interview__image__right"></div>
  </div>

   <div class="interview__title">
   <h2 class="main__subject">HUMAN BASE<span>FCA</span></h2>
    <p class="subject__text">~仕事の流儀~</p>
    <h2 class="first__text">FUTURE 未来</h2>
    <p>今と向き合い、明日を考える</p>
    <h2 class="second__text">CREATION 創造</h2>
    <p>小さな変化が大きな発展を生み出す</p>
    <h2 class="third__text">ADVANCE 前進</h2>
    <p>成長は小さな一歩の積み重ね</p>
   </div>
  </div>

   <div id="main__interview__screen">
    <h2>MANAGER INTERVIEW</h2>
    <div class="interview__screen__manager">
     <ul>
      <li><span><img src="<?=get_template_directory_uri();?>/static/images/fm7.jpg"></span><p>蒲生東町店店長 工藤義典</p><p>read more..</p></li>
      <li><span><img src="<?=get_template_directory_uri();?>/static/images/fm7.jpg"></span><p>三郷西インター店店長 </p><p>read more..</p></li>
     </ul>
    </div>

    <div class="interview__screen__staff">
     <h1>STAFF INTERVIEW</h1>
     <div class="member__index1">

      <div class="member__index1__left">
       <ul class="member__index__content">
        <li class="index1__img">
         <span><img src="<?=get_template_directory_uri();?>/static/images/fm7.jpg"></span>
         <p class="store__name">草加八幡町店</p>
         <p class="member__name">押田 武雄さん</p>
        </li>
       </ul>
      </div>

      <div class="member__index1__right">
       <h3>Q1 お店の魅力を教えてください</h3>
       <p></p>
       <h3>Q2 仕事で大変だったこと</h3>
       <p></p>
       <h3>最後に一言</h3>
       <p></p>
      </div>
     </div>

　　 <div class="member__index2">
      <div class="member__index2__left">
       <ul class="member__index__content">
        <li>
         <span><img src="<?=get_template_directory_uri();?>/static/images/fm5.jpg"></span>
         <p class="store__name">蒲生東町店</p>
         <p class="member__name">oさん</p>
       </ul>
      </div>

      <div class="member__index2__right">
        <h3>Q1 印象的なエピソードを教えてください</h3>
	<p></p>
        <h3>Q2 一番勉強になったことはなんですか？</h3>
	<p></p>
        <h3>Q3 仲間に伝えたいこと</h3>
	<p></p>
      </div>
     </div>

    <div class="member__index3">
     <div class="member__index3__left">
      <ul class="member__index__content">
       <li><span><img src="<?=get_template_directory_uri();?>/static/images/fm5.jpg"></span>
         <p class="store__name">三郷花和田店</p>
         <p class="member__name">aさん</p>
        </li>
      </ul>
     </div>

     <div class="member__index3__right">
      <h3>Q1 日常生活で役立った仕事経験</h3>
      <p></p>  
      <h3>Q2 仕事を通じて成長したところはありますか？</h3>
      <p></p>
      <h3>Q3 コンビニの魅力を一言で表現するなら？</h3>
      <p></p>
     </div>

    </div>

  
   </div>
  </div>

 </main>
 <footer>
　<div id="footer__content">
　　<div class="footer__info">
      <div class="footer__left__text">
        <p>企業の発展は社員の成長と共に</p>
        <p>誠実・謙虚・礼儀</p>
        <p>人間の基礎を大切にする会社</p>
       </div>
       <div class="footer__right__title">
         <h2>HUMAN BASE OKANO</h2>
       </div>
      </div>
      <div class="footer__list">
        <ul>
          <li><a href="/トップページ">TOP</a></li>
          <li><a href="/インフォメーション">INFOMATION</a></li>
          <li><a href="/店舗紹介">STORE INDEX</a></li>
          <li>BLOG</li>
        </ul>
       </div>
      <div class="footer__image">
      </div>
     </div>
   </footer>
 </div>
</body>
</html>
