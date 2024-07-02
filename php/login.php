<?php 
  include('./dbconn.php');
?>

  <html lang="ko">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, intial-scale=1">
      <link rel="shortcut icon" href="./images/app_icon.jpg" type="image/x-icon">
      <meta name="keywords" content="스카이패스, 사전좌석 배정, 항공권 예매, 수하물 안내">
      <meta name="Description" content="항공 스케줄, 스카이패스, 할인 항공권, 여행상품안내">
      <meta name="Robots" content="Index, Follow">
      <meta http-equiv="Subject" content="국내, 해외 여행정보, 좌석예매">
      <meta http-equiv="Title" content="대한항공">
      <title>대한항공 - 로그인</title>
      <!-- CSS초기화 -->
      <link rel="stylesheet" href="../css/reset.css" type="text/css">
      <!-- swiper서식 -->
      <!-- <link rel="stylesheet" href="./css/swiper.css" type="text/css"> -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

      <!-- common서식 -->
      <link rel="stylesheet" href="../css/common.css" type="text/css">
    </head>
    <body>
      <header>
        <h1><a href="../index.php" title="상단로고"><img src="../images/txt_logo.png" alt="상단로고"></a></h1>
        <!-- 
          토글버튼 클릭시 nav나오세 하기 
          1. css로 체크박스에 체크하면 nav나오게하기
          2. javascript, jquery = span태그(햄버거 아이콘) 클릭시 nav나오게하기
        -->
        <label for="toggle_gnb" class="gnb_open">gnb열기</label>
        <input type="checkbox" name="toggle_gnb" id="toggle_gnb">
        <div class="gnb_wrap">
          <nav class="gnb">
            <img src="../images/txt_logo.png" alt="gnb로고">
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

      <main>
        <section>
          <h2>로그인</h2>
          <form name="login" action="login_check.php" method="post" onsubmit="return form_check();">
            <div class="login">
              <p>
                <label for="mb_id">아이디</label>
                <input type="text" name="mb_id" id="mb_id">
              </p>

              <p>
                <label for="mb_pw">패스워드</label>
                <input type="password" name="mb_pw" id="mb_pw">
              </p>

              <p>
              <input type="checkbox" name="id_save" id="id_save">
              <label for="id_save">아이디저장</label>
              </p>

              <p>
                <input type="submit" value="로그인" id="login_btn">
              </p>

              <p>
                <a href="../index.php" title="메인화면으로">메인화면으로</a>
                <a href="id_search" title="아이디찾기">아이디찾기</a>
                <a href="pw_search" title="비번찾기">비번찾기</a>
                <a href="join.php" title="회원가입">회원가입</a>
              </p>

              <h3>SNS로그인</h3>
              <a href="#" title="카카오 로그인">카카오 로그인</a>
              <a href="#" title="네이버 로그인">네이버 로그인</a>
              <a href="#" title="구글 로그인">구글 로그인</a>
            </div>
          </form>
        </section>
      </main>
      <footer>
        <ul class="f_lnb">
          <li><a href="#" title="개인정보취급방침">개인정보취급방침</a></li>
          <li><a href="#" title="PC버전보기">PC버전보기</a></li>
          <li><a href="#" title="앱다운로드">앱다운로드</a></li>
        </ul>
        <address>Copyright&copy;KOREAN_AIR all rights reserved.<br>사업자등록번호 : 0000-000-000000 통신판매업 신고번호 : 강서 000-0000</address>
      </footer>

      <script>
        function form_check(){
          let id = document.getElementById('mb_id').value;
          let pw = document.getElementById('mb_pw').value;
          if(id.length<1){
            alert('아이디를 입력하지 않았습니다.');
            return false;
          }else if(pw.length<1){
            alert('패스워드를 입력하지 않았습니다.');
            return false;
          }
          return true;
        }
      </script>
    </body>
  </html>
