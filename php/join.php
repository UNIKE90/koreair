<?php  ?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>대한항공 = 회원가입</title>
  <style>
    .id_check{color:#f00;}
  </style>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script>
    $(document).ready(function(){
      //id에 키보드를 누르면 바로 함수가 실행됨
      $('#mb_id').on('keyup', function(){ 
        let self = $(this);
        let mb_id;

        //id가 일치하면(아이디 입력폼에 id값이 일치하면)
        if(self.attr("id") === "mb_id"){
          mb_id = self.val(); //입력한 값을 변수에 담는다.
        }
        $.post(
          "./id_check.php", 
          {mb_id:mb_id},
          function(data){
            if(data){
              self.parent().parent().find('div').html(data);
              self.parent().parent().find('div').addClass('id_check');
            }
          }
        )
      });
    });
  </script>
</head>
<body>
  <main>
    <section>
      <h2>회원가입</h2>
      <form name="join" method="post" action="regiupdate.php" onsubmit="return form_check();">
        <!-- no, mb_id, mb_pw, mb_name, mb_date -->
        <p>
          <label for="mb_id">아이디 : </label>
          <input type="text" name="mb_id" id="mb_id" maxlength="16" placeholder="아이디">
          <!-- <input type="button" value="중복확인" id="id_check"> -->
          <div id="id_check">아이디가 실시간으로 검사됩니다.</div>
        </p>
        <p>
          <label for="mb_pw">패스워드 : </label>
          <input type="password" name="mb_pw" id="mb_pw" maxlength="16" placeholder="패스워드">
        </p>
        <p>
          <label for="mb_name">이름 : </label>
          <input type="text" name="mb_name" id="mb_name" maxlength="16" placeholder="이름">
        </p>

        <p>
          <input type="submit" value="가입하기" id="sub_btn">
          <input type="reset" value="취소하기" id="reset_btn">
        </p>
      </form>
    </section>
  </main>
  <script>
    function form_check(){
      let id = document.getElementById('mb_id').value;
      let pw = document.getElementById('mb_pw').value;
      let name = document.getElementById('mb_name').value;
      if(id.length<1){
        alert('아이디를 입력하지 않았습니다.');
        return false;
      }else if(pw.length<1){
        alert('패스워드를 입력하지 않았습니다.');
        return false;
      }else if(name.length<1){
        alert('이름을 입력하지 않았습니다.');
        return false;
      }
      return true;
    }
  </script>
</body>
</html>