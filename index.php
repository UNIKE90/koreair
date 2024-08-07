<?php
  include('./php/dbconn.php');

  $mb_id = $_SESSION['ss_mb_id']??''; //세션 아이디가 있을 경우에 세션아이디 아니면 ''
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./images/app_icon.jpg" type="image/x-icon">
  <meta name="keywords" content="스카이패스, 사전좌석 배정, 항공권 예매, 수하물 안내">
  <meta name="Description" content="항공 스케줄, 스카이패스, 할인 항공권, 여행상품안내">
  <meta name="Robots" content="Index, Follow">
  <meta http-equiv="Subject" content="국내, 해외 여행정보, 좌석예매">
  <meta http-equiv="Title" content="대한항공">
  <title>대한항공 - 모바일웹(앱)</title>
  <!-- CSS초기화 -->
  <link rel="stylesheet" href="./css/reset.css" type="text/css">
  <!-- swiper서식 -->
  <!-- <link rel="stylesheet" href="./css/swiper.css" type="text/css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- common서식 -->
  <link rel="stylesheet" href="./css/common.css" type="text/css">
  <!-- main서식 -->
  <link rel="stylesheet" href="./css/main.css" type="text/css">
</head>
<body>
  <!-- 상단헤더영역 -->
  <header>
    <h1><a href="index.php" title="상단로고"><img src="./images/txt_logo.png" alt="상단로고"></a></h1>
    <!-- 
      토글버튼 클릭시 nav나오세 하기 
      1. css로 체크박스에 체크하면 nav나오게하기
      2. javascript, jquery = span태그(햄버거 아이콘) 클릭시 nav나오게하기
    -->
    <label for="toggle_gnb" class="gnb_open">gnb열기</label>
    <input type="checkbox" name="toggle_gnb" id="toggle_gnb">
    <div class="gnb_wrap">
      <nav class="gnb">
        <img src="./images/txt_logo.png" alt="gnb로고">
        <?php 
          if(isset($_SESSION['ss_mb_id'])){
        ?>
          <a href="./php/logout.php" title="로그아웃" class="logout">로그아웃</a>
        <?php
          }else{
        ?>
          <a href="./php/login.php" title="로그인" class="logout">로그인</a>
        <?php
          }
        ?>
        <ul>
          <li><a href="#" title="메뉴1">메뉴1</a></li>
          <li><a href="#" title="메뉴2">메뉴2</a></li>
          <li><a href="#" title="메뉴3">메뉴3</a></li>
          <li><a href="#" title="메뉴4">메뉴4</a></li>
          <li><a href="#" title="메뉴5">메뉴5</a></li>
          <li><a href="#" title="메뉴6">메뉴6</a></li>
          <li><a href="#" title="메뉴7">메뉴7</a></li>
        </ul>
      </nav>
      <label for="toggle_gnb" class="gnb_close">gnb닫기</label>
    </div>
    <?php 
      if(isset($_SESSION['ss_mb_id'])){
    ?>
      <p class="login_txt"><?php echo $mb_id ?>님 반갑습니다.</p>
    <?php
      }else{
    ?>
        <a href="./php/login.php" title="로그인" class="login_btn">로그인하기</a>
    <?php
      }
    ?>
  </header>

  <!-- 메인콘텐츠영역 -->
  <main>
    <section class="main_grid">
      <article class="main_slide">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><a href="#" title="스와이퍼1"><img src="./images/banner01.jpg" alt="배너1"></a></div>
            <div class="swiper-slide"><a href="#" title="스와이퍼2"><img src="./images/banner02.jpg" alt="배너2"></a></div>
            <div class="swiper-slide"><a href="#" title="스와이퍼3"><img src="./images/banner03.jpg" alt="배너3"></a></div>
            <div class="swiper-slide"><a href="#" title="스와이퍼4"><img src="./images/banner04.jpg" alt="배너4"></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </article>

      <article class="btn1"><a href="#" title="국내선 예매"><img src="./images/m_img01.jpg" alt="국내선 예매"></a></article>
      <article class="btn2"><a href="#" title="국제선 예매"><img src="./images/m_img02.jpg" alt="국제선 예매"></a></article>
      <article class="btn3"><a href="#" title="예약 관리"><img src="./images/m_img03.jpg" alt="예약 관리"></a></article>
      <article class="btn4"><a href="#" title="채크인"><img src="./images/m_img04.jpg" alt="체크인"></a></article>
      <article class="btn5"><a href="#" title="스케줄/출도착"><img src="./images/m_img05.jpg" alt="스케줄/출도착"></a></article>

    </section>

    <article><a href="#" title="스카이패스 바로가기"><img src="./images/skypass.jpg" alt="스카이패스" class="skypass"></a></article>
  </main>

  <!-- 하단푸터영역 -->
  <footer>
    <ul class="f_lnb">
      <li><a href="#" title="개인정보취급방침">개인정보취급방침</a></li>
      <li><a href="#" title="PC버전보기">PC버전보기</a></li>
      <li><a href="#" title="앱다운로드">앱다운로드</a></li>
    </ul>
    <address>Copyright&copy;KOREAN_AIR all rights reserved.<br>사업자등록번호 : 0000-000-000000 통신판매업 신고번호 : 강서 000-0000</address>
  </footer>

  <!-- 스와이퍼 스크립트 -->
  <!-- <script src="./script/swiper.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".mySwiper", {
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
</body>
</html>