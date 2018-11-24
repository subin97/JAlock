<?php
  $conn = mysqli_connect("localhost", "root", "123456", "jalock", "3306");
  if (mysqli_connect_errno()){
      echo "연결실패<br>".mysqli_connect_error();
  }

	$nickname = $_POST["nickname"];
	$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

  $query ="select * from user where nickname='".$nickname."'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
  $id_check = htmlspecialchars($row['nickname']);

  if($id_check != null){
    echo "<script>alert('아이디가 중복됩니다.'); history.back();</script>";
  }
  else{
    $query ="insert into user (nickname, password, current) values ('$nickname', '$password', 1)";
    $result = mysqli_query($conn, $query);
?>
<meta charset="utf-8" />
<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
<meta http-equiv="refresh" content="0 url=/jalock/front_editor/demos/code/signin.php">
<?php
}
?>
