<?php
  $conn = mysqli_connect("localhost", "root", "123456", "jalock", "3306");
  if (mysqli_connect_errno()){
      echo "연결실패<br>".mysqli_connect_error();
  }
	//include "../db.php";
	//include "../password.php";

	$email = $_POST['email'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	//  $adress = $_POST['adress'];
  //	$email = $_POST['email'].'@'.$_POST['emadress'];

  $sql = mq("insert into user (email, password) values('".$email."','".$password."')");
?>
<meta charset="utf-8" />
<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
<meta http-equiv="refresh" content="0 url=/">
