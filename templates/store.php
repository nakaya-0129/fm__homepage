<?php
/*
* Template Name: 店舗紹介
*/
?>

<!doctype html>                                                                       
<html>
  <head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/static/css/reset.css" media="all">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/static/css/store.css" media="all">
    <meta charset ="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="<?php echo get_template_directory_uri();?>/static/js/slick/slick/slick-theme.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri();?>/static/js/slick/slick/slick.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/static/js/slick/slick/slick.min.js#"></script>
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
       <li><a href="/インタビュー">INTERVIEW</a></li>
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
        <li><a href="/インタビュー">INTERVIEW</a></li>
        <li>RECRUTE<li>
       </ul>
      </div>
     </div>
 </header>

     <main>
    <div id="store__index">
     <div class="store__index__top">
      <h2>STORE INTRODUCTION</h2>
      <h3>~運営店舗紹介~</h3>
      <div class="store__index__image"></div>
     </div>
     <div class="store__index__bottom">
      <div class="store__index__bottom__text">
       <h3 class="store__title">企業の発展は社員の成長と共に</h3>
       <p class="store__text">2021年現在、埼玉県内を中心に13店舗を運営しています。<br>
       店舗の運営は店長の裁量が大きく、各店舗において
       自由度の高い運営が可能です。<br>
       各エリアには店舗統括を常設しています。<br>
       課題や問題を共有し、改善策を見つけ出す仕組みがあります。</p>
      </div>
     </div>
    </div>

　　<div id="store__list">
     <h2>STORE INDEX</h2>
     <h3>~店舗一覧~</h3>
     <div class="store__list__content">
      <div class="store__area__souka">
       <h2>埼玉地区 草加・越谷・三郷エリア</h2>
       <h3>AREA MANAGER <span>押田 康幸</span></h3>
       <ul>
        <li><span><img src="<?=get_template_directory_uri();?>/static/images/fm3.jpg"></span><p class="store__name">草加八幡町店</p><p class="store__address">埼玉県草加市八幡町491-2</p><p class="store__tel">048-933-0266</p><p class="store__info">24時間営業  酒/煙草有</p><p class="store__recrute">応募情報</p></li>
        <li><span><img src="<?=get_template_directory_uri();?>/static/images/fm3.jpg"></span><p class="store__name">蒲生東町一丁目店</p><p class="store__address">埼玉県越谷市蒲生東町15-7</p><p class="store__tel">048-990-6000</p><p class="store__info">24時間営業　酒/煙草有</p><p class="store__recrute">応募情報</p></li>
        <li><span><img src="<?=get_template_directory_uri();?>/static/images/fm3.jpg"></span><p class="store__name">三郷西インター店</p><p class="store__address">埼玉県三郷市彦倉2-29</p><p class="store__tel">048-949-2480</p><p class="store__info">24時間営業 酒/煙草有</p><p class="store__recrute">応募情報</p></li>
        <li><span><img src="<?=get_template_directory_uri();?>/static/images/fm3.jpg"></span><p class="store__name">三郷花和田店</p><p class="store__address">埼玉県三郷市インター南1-7-2</p><p class="store__tel">048-949-2051</p><p class="store__info">24時間営業 酒/煙草有</p><p class="store__recrute">応募情報</p></li>
       </ul>
      </div>

     <div class="store__area__urawa">
      <h2>埼玉地区 さいたま・浦和区エリア</h2>
      <h3>AREA MANAGER<span>濱</span></h3>   
      <ul>
       <li><span><img src="<?=get_template_directory_uri();?>/static/images/fm3.jpg"></span><p class="store__name">中浦和駅前店</p><p class="store__address">埼玉県さいたま市南区1-1-9</p><p class="store__tel">048-861-9874</p><p class="store__info">24時間営業 酒/煙草有</p><p class="store__recrute">応募情報</p></li>
       <li><span><img src="<?=get_template_directory_uri();?>/static/images/fm3.jpg"></span><p class="store__name">さいたま田島9丁目店</p><p class="store__address">埼玉県さいたま市桜区田島9-15-17</p><p class="store__tel">048-844-5695</p><p class="store__info">24時間営業 酒/煙草有</p><p class="store__recrute">応募情報</p></li>
      </ul>
     </div>

     <div class="store__area__iwatuki">
      <h2>埼玉地区 岩槻・春日部エリア</h2>
      <h3>AREA MANAGER<span>大山 陽介</span></h3>
      <ul>
       <li><span><img src="<?=get_template_directory_uri();?>/static/images/fm3.jpg"></span><p class="store__name">岩槻東町一丁目店</p><p class="store__address">埼玉県岩槻区東町1-7-28</p><p class="store__tel">048-790-0331</p><p class="store__info">24時間営業 酒/煙草有</p><p class="store__recrute">応募情報</p></li>
       <li><span><img src="<?=get_template_directory_uri();?>/static/images/fm3.jpg"></span><p class="store__name">春日部増戸店</p><p class="store__address">埼玉県春日部市増戸328-1</p><p class="store__tel">048-753-3537</p><p class="store__info">24時間営業 酒/煙草有</p><p class="store__recrute">応募情報</p></li>
      </ul>
     </diV>
     <div class="store__area__oomiya">
      <h2>埼玉地区 大宮・上尾エリア</h2>
      <h3>AREA MANAGER<span>蛭沼</span></h3>
      <ul>
       <li><span><img src="<?=get_template_directory_uri();?>/static/images/fm3.jpg"></span><p class="store__name">大宮すずらん通り店</p><p class="store__address">埼玉県さいたま市大宮区大門町1-17</p><p class="store__tel">048-640-7022</p><p class="store__info">24時間営業 酒/煙草有</p><p class="store__recrute">応募情報</p></li>
       <li><span><img src="<?=get_template_directory_uri();?>/static/images/fm3.jpg"></span><p class="store__name">大宮大門町一丁目店</p><p class="store__address">埼玉県さいたま市大宮区大門町1-61-6</p><p class="store__tel">048-658-0150</p><p class="store__info">24時間営業 酒/煙草有</p><p class="store__recrute">応募情報</p></li>
     <li><span><img src="<?=get_template_directory_uri();?>/static/images/fm3.jpg"></span><p class="store__name">上尾小敷谷東店</p><p class="store__address">埼玉県上尾市小敷谷918-1</p><p class="store__tel">048-780-6007</p><p class="store__info">24時間営業 酒/煙草有</p><p class="store__recrute">応募情報</p></li>
      </ul>
     </div>

     <div class="store__area__tokyo">
      <h2>東京地区 東京・田無エリア</h2>
      <h3>AREA MANAGER<span>押田 康幸</span></h3>
      <ul>
       <li><span><img src="<?=get_template_directory_uri();?>/static/images/fm3.jpg"></span><p class="store__name">田無駅前店</p><p class="store__address">東京都西東京市田無町2-11-1</p><p class="store__tel">042-450-5620</p><p class="store__info">24時間営業 酒/煙草有</p><p class="store__recrute">応募情報</p></li>
       <li><span><img src="<?=get_template_directory_uri();?>/static/images/fm3.jpg"></span><p class="store__name">エミオ田無店</p><p class="store__address">東京都西東京市田無町4-1-3 エミオ田無1F</p><p class="store__tel">042-460-8660</p><p class="store__info">24時間営業 酒/煙草有</p><p class="store__recrute">応募情報</p></li>
      </ul>
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
         <li><a href="#wrapper">STORE INDEX</a></li>
         <li>BLOG</li>
       </ul>
      </div>
     <div class="footer__image">
     </div>
    </div>
  </footer>

   
  </diV>
 </body>
</html>
