<!-- php폴더에 regiupdate.php 회원정보를 입력하기 위한 문서 -->
<?php
  include('./dbconn.php');

  $mb_id = trim($_POST['mb_id']);
  $mb_pw = trim($_POST['mb_pw']);
  $mb_name = trim($_POST['mb_name']);
  date_default_timezone_set('Asia/Seoul');
  $mb_datetime = date('Y-m-d H:i:s', time());

  // 전달받은 값을 출력해보기
  echo $mb_id."<br>";
  echo $mb_pw."<br>";
  echo $mb_name."<br>";
  echo $mb_datetime."<br>";

  // $sql = "select PASSWORD('$mb_pw') as pass"; // php 8.0이하 구버전
  // $result = mysqli_query($conn, $sql);
  // $row = mysqli_fetch_assoc($result);
  // $mb_pw = $row['pass'];

  $mb_pw = PASSWORD_HASH('$mb_pw', PASSWORD_DEFAULT); // php 8.1이상

  //변수값을 데이터 sql쿼리문을 작성하여 데이터베이스에 자료 입력한다.
  $sql = "insert into korair_member(mb_id, mb_pw, mb_name, mb_datetime) values('$mb_id', '$mb_pw', '$mb_name', '$mb_datetime')";

  $result = mysqli_query($conn, $sql); //데이터베이스에 자료입력한 결과를 변수에 담음

  if($result){
    echo "<script>alert('회원가입이 완료되었습니다.');</script>";
    echo "<script>location.replace('./login.php');</script>";
    exit;
  }else{
    echo '회원가입 실패 : '.mysqli_error($conn);
    mysqli_close($conn); //데이터베이스 접속종료
  }
?>