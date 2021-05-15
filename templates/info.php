<?php
/*
* Template Name: インフォメーション
*/
?>
<!doctype html>                                                                       
<html>
 <head>
  <link rel="stylesheet" href="<?= get_template_directory_uri();?>/static/css/reset.css" media="all">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/static/css/info.css ?ver=<?php echo date('U'); ?>">
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
  <div id ="wrapper">
  <header>
     <ul class="header__main__list">
       <li class="logo"><a href="/トップページ">HUMAN BASE OKANO</a></li>
       <li><a href="/トップページ">TOP</a></li>
       <li><a href="/店舗紹介">STORE INDEX</a></li>
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
        <li><a href="/店舗紹介">STORE INDEX</a><li>
	<li><a href="/インタビュー">INTERVIEW</a></li>
        <li>RECRUTE<li>
       </ul>
      </div>
     </div>
   </header>

      <main>
    <div id="main__corpolate">
     <div class="corpolate__image">
      <div class="corpolate__title">
        <h2>CORPOLATE INFORMATION</h2>
        <h3>会社案内</h3>
      </diV>
     </div>

      <div class="corpolate__top">
       <div class="corpolate__top__image"></div>
       <div class="corpolate__top__text">
          <h2>ABOUT</h2>
	  <h3>~事業の目的~</h3>
	<p><strong>社員一人一人の成長と自立</strong><br>店舗数の拡大だけではなく、次代の人材育成や事業の安定を重視しています。<br>社員には希望があれば独立のための支援はおしみません。<br>
自由な運営とそれを支える安定した経営基盤によって自由と自立を叶える環境を用意しています。</p>
       </div>
      </div>

      <div class="corpolate__bottom">
       <div class="corpolate__bottom__image"></div>
       <div class="corpolate__bottom__text">
        <h2>FUTURE</h2>
	<h3>~未来へ~</h3>
	<p>東京都など都心部への出店計画を進行中(2店舗出店中)<br>
	次代を担う人材の積極雇用・新卒採用の強化<br>
	パート・アルバイトスタッフの社員雇用推進<br>
	扶養・副業・独立・シニア雇用・幅広く対応しています。</p>
       </div>
      </div>
    </div>
    <div id="corpolate__overview">
     <h2>CORPOLATE OVERVIEW</h2>
     <h3>~企業概要~</h3>
      <ul>
       <li>商号<span class="two__line">株式会社ヒューマンベース オカノ</span></li>
       <li>設立年<span class="three__line">2010年(平成22年)</span></li>
       <li>資本金<span class="three__line">1000万円</span></li>
       <li>事業内容<span class="fourth__line">ファミリーマートFC事業</span></li>
       <li>従業員数<span class="fourth__line">100名</span></li>
       <li>代表取締役<span class="fivth__line">岡野 弘</span></li>
      </ul>
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
          <li><a href="#wrapper">INFOMATION</a></li>
          <li><a href="/店舗紹介">STORE INDEX</a></li>
          <li>BLOG</li>
        <ul>
     </div>
     <div class="footer__image">
     </div>
    </div>
   </footer>
  </div>
 </body>
</html>



