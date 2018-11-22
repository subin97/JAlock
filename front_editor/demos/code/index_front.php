<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="google" value="notranslate">
    <title>JAlock</title>
    <link rel="stylesheet" href="style.css">
    <script src="/storage.js"></script>
    <script src="../../blockly_compressed.js"></script>
    <script src="../../blocks_compressed.js"></script>
    <script src="../../javascript_compressed.js"></script>
    <script src="../../java_compressed.js"></script>
    <script type="text/javascript" src="code.js"></script>
  <script type="text/javascript" src="test.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">

  </head>
<style>
body{
  font-family: 'Nanum Gothic', sans-serif;
}
#area{
    display: inline-block;
    padding:20px;
    padding-left:30px;
    overflow:scroll;
    height:35rem;
    padding-bottom: 55.33px;
  }
  #mycontent{
    background-color: white;
    height: 400px;
    width: 90%;
    padding:20px;
  }
  #content_javascript{
    visibility: hidden !important;
  }
  .tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black; /* If you want dots under the hoverable text */
}

/* Tooltip text */
.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    padding: 5px 0;
    border-radius: 6px;

    /* Position the tooltip text - see examples below! */
    position: absolute;
    z-index: 5;
}

/* Show the tooltip text when you mouse over the tooltip container */
.tooltip:hover .tooltiptext {
    visibility: visible;
}
</style>
<body onload="getPageId()">
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        학습 진행 상황
                    </a>
                </li>
                <li>
                    <a href="javascript:doDisplay(1);">01.자바 소개</a>
                </li>
                <div id="ch1" style="display:none;">
                  <li>
                    <a href="#">test1</a>
                  </li>
                  <li>
                    <a href="#">test1</a>
                  </li>
                  <li>
                    <a href="#">test1</a>
                  </li>
                  <li>
                    <a href="#">test1</a>
                  </li>
                </div>
                <li>
                    <a href="javascript:doDisplay(2);">02. 자바 프로그래밍 기초</a>
                </li>
                <div id="ch2" style="display:none;">
                  <li>
                    <a href="#">test2</a>
                  </li>
                  <li>
                    <a href="#">test2</a>
                  </li>
                  <li>
                    <a href="#">test2</a>
                  </li>
                  <li>
                    <a href="#">test2</a>
                  </li>
                </div>
                <li id="ch3">
                    <a href="#">03. 객체 지향 프로그래밍</a>
                </li>
                <li id="ch4">
                    <a href="#">04. 상속, 인터페이스</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
    </div>
    <!-- /wrapper -->
    <!-- mainbody -->
    <div class="row align-items-start">
        <!-- tutorial area -->
        <div class="col-4" id="area" style="background-color:rgb(209, 164, 175);" >
            <!--<h2><b>튜토리얼 영역</b></h2>-->
            <h4><img src="logo.png" height="70px"></img>
              <?php
                if( empty($_GET['id']) == false ) {
                  echo file_get_contents("tutorials/".$_GET['id'].".txt");
                }
              ?>
        </div>

        <!-- block area -->
        <div class="col-4" id="area" style="background-color:rgb(240,240,240);" >
            <!-- <h2>블록 영역</h2> -->
            <table width="100%" height="100%">
              <tr>
                <td>
                  <h2><b>
                    Block
                    <span id="title" display="hidden">...</span>
                  </h2></b>
                </td>
                <td class="farSide">
                  <select id="languageMenu"></select>
                </td>
              </tr>
              <tr>
                <td colspan=2>
                  <table width="100%">
                    <tr id="tabRow" height="1em">
                      <td id="tab_blocks" class="tabon">...</td>
                      <td class="tabmin">&nbsp;</td>
                      <!-- <td id="tab_xml" class="taboff">XML</td> -->
                      <td class="tabmax">
                        <button id="trashButton" class="notext" title="...">
                          <img src='../../media/1x1.gif' class="trash icon21">
                        </button>
                        <button id="linkButton" class="notext" title="...">
                          <img src='../../media/1x1.gif' class="link icon21">
                        </button>
                        <button id="runButton" class="notext primary" title="...">
                          <img src='../../media/1x1.gif' class="run icon21">
                        </button>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td height="100%" colspan=2 id="content_area">
                </td>
              </tr>
            </table>
            <div id="content_blocks" class="content"></div>
            <?php
              if( empty($_GET['id']) == false ) {
                echo file_get_contents("blocks/".$_GET['id'].".txt");
              }
            ?>
        </div>

        <!-- code area -->
        <div class="col-4"  id="area" style="background-color:rgb(209, 164, 175);" >
            <h2><b>JAVA code</b></h2>
            <table width="0%" height="0%">
              <tr>
                <td colspan=2>
                  <table width="0%">
                    <tr id="tabRow" height="1em">
                      <td id="tab_javascript" class="tabon">Java</td>
                       <!-- <td id="tab_java" class="tabon">Java</td> -->
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td height="100%" colspan=2 id="content_area">
                </td>
                <td height="100%" colspan=2 id="content_area">
                </td>
              </tr>
            </table>
            <pre id="content_javascript" class="content"></pre>

            <div id = "mycontent">

            <?php
              $conn = mysqli_connect("localhost", "root", "123456", "jalock", "3306");
              if (mysqli_connect_errno()){
                  echo "연결실패<br>".mysqli_connect_error();
              }
              $query = "SELECT * FROM answer1 WHERE num=".$_GET['id'];
              $result = mysqli_query($conn, $query);

              $row = mysqli_fetch_array($result);
              $escaped['num'] = htmlspecialchars($row['num']);
              $escaped['answer'] = htmlspecialchars($row['answer']);
              $escaped['java'] = htmlspecialchars($row['java']);

              $userAnswer = $_GET['code'];
            //  echo "usercode: ".$userAnswer."<br>";
            //  echo "answer: ".$escaped['answer']."<br>";

              if($userAnswer === $escaped['answer']){
                echo $escaped['java'];
              }
              else if($_GET['code']!==""){
                echo "오답입니다.";
              }
              else {
              }
            ?>
              <div id="pid" style="visibility: hidden"><?php echo $_GET['id'] ?></div>
            </div>
          </div>
    </div>
    <!-- /mainbody -->

    <!--get current id-->
        <?php
        if($_GET['id']==1) {
        		$id_bef = 1;
        	} else {
        		$id_bef = $_GET['id']-1;
        	}
        	if($_GET['id']==24) {
        	  // end page num
        		$id_aft = 24;
        	} else {
        		$id_aft = $_GET['id']+1;
        	}
        	?>
     <!-- bottom Navigation -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom" id="mainNav">
        <div class="col-sm-3">
            <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle"> <span class="navbar-toggler-icon"></span></a>
        </div>
        <div class="col-sm-3" style="text-align: center">
            <a href="/jalock/front_editor/demos/code/index_front.php?id=<?php echo $id_bef ?>&code=" class="btn btn-secondary">이전</a>
        </div>
        <div class="col-sm-3" style="text-align: center">
            <a href="/jalock/front_editor/demos/code/index_front.php?id=<?php echo $id_aft ?>&code=" class="btn btn-secondary">다음</a>
        </div>
      </nav>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    var bDisplay = true;
    function doDisplay(a){
        var con = document.getElementById("ch"+a);
        if(con.style.display=='none'){
            con.style.display = 'block';
        }else{
            con.style.display = 'none';
        }
    }


    </script>


</body>

</html>
