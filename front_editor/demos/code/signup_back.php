<?php
  $conn = mysqli_connect("localhost", "root", "123456", "jalock", "3306");
  if (mysqli_connect_errno()){
      echo "연결실패<br>".mysqli_connect_error();
  }

	$nickname = $_POST["nickname"];
	$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

  $query ="insert into user (nickname, password, current) values ('$nickname', '$password', 1)";
  $result = mysqli_query($conn, $query);

?>
<meta charset="utf-8" />
<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
<meta http-equiv="refresh" content="0 url=/jalock/front_editor/demos/code/index_front.php?id=1&code=">
