<?php
  include('./dbconn.php');

  $mb_id = trim($_POST['mb_id']);

  if($mb_id != NULL){
    $sql = "select * from korair_member where mb_id = '$mb_id'";
    $result = mysqli_query($conn, $sql);
    $mb = mysqli_fetch_assoc($result);

    if(isset($mb['mb_id'])){ //동일한 아이디가 존재한다면
      echo "존재하는 아이디입니다.";
    }else{ //그렇지 않다면
      echo "존재하지 않는 아이디입니다.";
    }
  }

?>