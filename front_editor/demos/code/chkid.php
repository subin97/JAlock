<?php
// $conn = mysqli_connect("localhost", "root", "123456", "jalock", "3306");
$conn = mysqli_connect("localhost", "yes", "Seo123456789!", "jalock");
 if (mysqli_connect_errno()){
     echo "연결실패<br>".mysqli_connect_error();
 }
 $nickname = $_GET["nickname"];

 $query ="select * from user where nickname='".$nickname."'";
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
 $id_check = htmlspecialchars($row['nickname']);

 if($id_check==null)
  {
    echo $nickname."는 사용가능한 닉네임입니다.";
  }else{
    echo $nickname."는 이미 사용 중인 닉네임입니다.";
  }
?>
