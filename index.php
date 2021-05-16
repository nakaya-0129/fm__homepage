<?php
/*
* Template Name: fm_homepage
*/
?>
<!doctype html>
<html>
<head>
 <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/static/css/reset.css" media="all">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" />
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


$(function(){
$("#main__screen").slick({
   autoplay:true,
   autoplaySpeed:2000,
   dots:true,
});
});

</script>

</head>

<body>
 <div id="wrapper">
  <header>
   <ul class="header__main__list">
     <li class="logo"><a href="/トップページ">HUMAN BASE OKANO</a></li>
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
      <li><a href="/インフォメーション">INFORMATION</a><li>
      <li><a href="/店舗紹介">STORE INDEX</a><li>
      <li><a href="/インタビュー">INTERVIEW</a></li>
      <li>RECRUTE<li>
     </ul>
    </div>
   </div>
 </header>

 <main>
   <div id="main__screen"><img src="<?= get_template_directory_uri();?>/static/images/fm3.jpg"><img src ="<?= get_template_directory_uri();?>/static/images/fm6.jpg"><img src="<?= get_template_directory_uri();?>/static/images/fm10.jpg"></div>

   <div id="about__screen">
       <h1>BUSINESS & PHILOSOPHY</h1>
     <div class="about__top">
       <div class="about__top__image"></div>

       <div class="about__top__text">
        <h3>BUSINESS</h3>
	<p class="text__eng">~事業内容~</p>
    <p>コンビニエンスチェーンファミリーマートのFC事業を展開。<br>
埼玉県内を中心に2021年現在13店舗を経営しています。<br>
	<p>店舗同士が高め合いよりよい店舗運営を目指して、日々切磋琢磨しています。</p>
	<div class="more__btn">
	 <h2><a href="/インフォメーション">MORE INFO</a></h2>
	</div>

       </div>
    </div>

    <div class="about__bottom">
     <div class="about__bottom__image"></div>

     <div class="about__bottom__text">
       <h3>PHILOSOPHY</h3>
       <p class="text__eng">~理念・価値観~</p>
       <p>「接客」「教育」「管理」店舗を運営することは、
       その全てに携わり、追求していくことです。<br>
       私達は、社員が社会人として成長できる場所を提供し、
       共に目標を達成できる企業を目指しています。</p>
      <div class="more__btn">
        <h2>MORE RECRUTE</h2>
      </div>
     </div>
    </div>
   </div>

   <div id="company__info">
     <h1>GREETING</h1>
    <div class="company__selection">

     <div class="interview__top">
        <div class="interview__top__img"></div>
       <div class="interview__top__text">
        <h2>Greeting From President</h2>
	<h3>~代表挨拶~</h3>
	<p class="company__name">代表取締CEO 岡野 弘</p>	
        <p class="company__text">ヒューマンベース創設から10数年が経過しました。<br>
                                 昨年から続くcovid-19の世界的な流行によって小売り業界にも新しい変化の時代が訪れようとしています。<br>
                                 この時代の転換期において私達の事業が持つ役割は小さいものかもしれません。<br>
                                 しかし、人々の生活になくてならない<strong>「コンビニ」</strong>という存在はこれからの時代にも必須のものであると私は考えています。<br>
                   	         いつ、どんな変化が訪れても柔軟かつ合理的に課題を解決する。<br>
	                         私達は事業を通じて人間力を高め、社会に貢献できる人材を育成し、
	                         よりよい未来を創造することを事業の目的としています。</p>
       </div>
     </div>

       <div class="interview__bottom">
         <div class="interview__bottom__img"></div>
	<div class="interview__bottom__text">
	 <h2>Greeting From Officer</h2>
	 <h3>~役員挨拶~</h3>
	 <p class="company__officer">執行役員・店舗統括 押田 康幸</p>
         <p class="company__text__bottom">店舗を総括する立場で仕事に関わっています。<br>
                                      店舗指導や社員教育を通じて事業に貢献できるよう日々力を尽くしています。<br>
                                      コロナ禍という状況下のおいて、
                                      社員・スタッフをはじめ多くの方々に支えられ営業を継続できております。<br>
                                      支援に対して心からの感謝の気持ちを忘れず仲間と共に日々成長していくため
                                      精進してまいります。</p>
          <div class="more__btn">
           <h2><a href="/インタビュー">MORE INTERVIEW</a></h2>
          </div>
	<div>
       </div>

      </div>
     </diV>    　　　
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
         <li><a href="#wrapper">TOP</a></li>
         <li><a href="/インフォメーション">INFOMATION</a></li>
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
