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

    <script src="code.js"></script>
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
    padding:20px;
    padding-left:30px;
    overflow:scroll;
    height:550px;
  }
  #content_javascript{
    visibility: hidden !important;
  }
</style>
<body>
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
                    <a href="#">01.자바 소개</a>
                </li>
                <li>
                    <a href="#">02. 자바 프로그래밍 기초</a>
                </li>
                <li>
                    <a href="#">03. 객체 지향 프로그래밍</a>
                </li>
                <li>
                    <a href="#">04. 상속, 인터페이스</a>
                </li>
                <li>
                    <a href="#">05. 여러 가지 클래스</a>
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
                  echo file_get_contents($_GET['id'].".txt");
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
            <xml id="toolbox" style="display: none">
              <category name="%{BKY_CATLOGIC}" colour="%{BKY_LOGIC_HUE}">
                <block type="controls_if"></block>
                <block type="logic_compare"></block>
                <block type="logic_operation"></block>
                <block type="logic_negate"></block>
                <block type="logic_boolean"></block>
                <block type="logic_null"></block>
                <block type="logic_ternary"></block>
              </category>
              <category name="%{BKY_CATLOOPS}" colour="%{BKY_LOOPS_HUE}">
                <block type="controls_repeat_ext">
                  <value name="TIMES">
                    <shadow type="math_number">
                      <field name="NUM">10</field>
                    </shadow>
                  </value>
                </block>
                <block type="controls_whileUntil"></block>
                <block type="controls_for">
                  <value name="FROM">
                    <shadow type="math_number">
                      <field name="NUM">1</field>
                    </shadow>
                  </value>
                  <value name="TO">
                    <shadow type="math_number">
                      <field name="NUM">10</field>
                    </shadow>
                  </value>
                  <value name="BY">
                    <shadow type="math_number">
                      <field name="NUM">1</field>
                    </shadow>
                  </value>
                </block>
                <block type="controls_forEach"></block>
                <block type="controls_flow_statements"></block>
              </category>
              <category name="%{BKY_CATMATH}" colour="%{BKY_MATH_HUE}">
                <block type="math_number">
                  <field name="NUM">123</field>
                </block>
                <block type="math_arithmetic">
                  <value name="A">
                    <shadow type="math_number">
                      <field name="NUM">1</field>
                    </shadow>
                  </value>
                  <value name="B">
                    <shadow type="math_number">
                      <field name="NUM">1</field>
                    </shadow>
                  </value>
                </block>
                <block type="math_single">
                  <value name="NUM">
                    <shadow type="math_number">
                      <field name="NUM">9</field>
                    </shadow>
                  </value>
                </block>
                <block type="math_trig">
                  <value name="NUM">
                    <shadow type="math_number">
                      <field name="NUM">45</field>
                    </shadow>
                  </value>
                </block>
                <block type="math_constant"></block>
                <block type="math_number_property">
                  <value name="NUMBER_TO_CHECK">
                    <shadow type="math_number">
                      <field name="NUM">0</field>
                    </shadow>
                  </value>
                </block>
                <block type="math_round">
                  <value name="NUM">
                    <shadow type="math_number">
                      <field name="NUM">3.1</field>
                    </shadow>
                  </value>
                </block>
                <block type="math_on_list"></block>
                <block type="math_modulo">
                  <value name="DIVIDEND">
                    <shadow type="math_number">
                      <field name="NUM">64</field>
                    </shadow>
                  </value>
                  <value name="DIVISOR">
                    <shadow type="math_number">
                      <field name="NUM">10</field>
                    </shadow>
                  </value>
                </block>
                <block type="math_constrain">
                  <value name="VALUE">
                    <shadow type="math_number">
                      <field name="NUM">50</field>
                    </shadow>
                  </value>
                  <value name="LOW">
                    <shadow type="math_number">
                      <field name="NUM">1</field>
                    </shadow>
                  </value>
                  <value name="HIGH">
                    <shadow type="math_number">
                      <field name="NUM">100</field>
                    </shadow>
                  </value>
                </block>
                <block type="math_random_int">
                  <value name="FROM">
                    <shadow type="math_number">
                      <field name="NUM">1</field>
                    </shadow>
                  </value>
                  <value name="TO">
                    <shadow type="math_number">
                      <field name="NUM">100</field>
                    </shadow>
                  </value>
                </block>
                <block type="math_random_float"></block>
              </category>
              <category name="%{BKY_CATTEXT}" colour="%{BKY_TEXTS_HUE}">
                <block type="text"></block>
                <block type="text_join"></block>
                <block type="text_append">
                  <value name="TEXT">
                    <shadow type="text"></shadow>
                  </value>
                </block>
                <block type="text_length">
                  <value name="VALUE">
                    <shadow type="text">
                      <field name="TEXT">abc</field>
                    </shadow>
                  </value>
                </block>
                <block type="text_isEmpty">
                  <value name="VALUE">
                    <shadow type="text">
                      <field name="TEXT"></field>
                    </shadow>
                  </value>
                </block>
                <block type="text_indexOf">
                  <value name="VALUE">
                    <block type="variables_get">
                      <field name="VAR">{textVariable}</field>
                    </block>
                  </value>
                  <value name="FIND">
                    <shadow type="text">
                      <field name="TEXT">abc</field>
                    </shadow>
                  </value>
                </block>
                <block type="text_charAt">
                  <value name="VALUE">
                    <block type="variables_get">
                      <field name="VAR">{textVariable}</field>
                    </block>
                  </value>
                </block>
                <block type="text_getSubstring">
                  <value name="STRING">
                    <block type="variables_get">
                      <field name="VAR">{textVariable}</field>
                    </block>
                  </value>
                </block>
                <block type="text_changeCase">
                  <value name="TEXT">
                    <shadow type="text">
                      <field name="TEXT">abc</field>
                    </shadow>
                  </value>
                </block>
                <block type="text_trim">
                  <value name="TEXT">
                    <shadow type="text">
                      <field name="TEXT">abc</field>
                    </shadow>
                  </value>
                </block>
                <block type="text_print">
                  <value name="TEXT">
                    <shadow type="text">
                      <field name="TEXT">abc</field>
                    </shadow>
                  </value>
                </block>
                <block type="text_prompt_ext">
                  <value name="TEXT">
                    <shadow type="text">
                      <field name="TEXT">abc</field>
                    </shadow>
                  </value>
                </block>
              </category>
              <category name="%{BKY_CATLISTS}" colour="%{BKY_LISTS_HUE}">
                <block type="lists_create_with">
                  <mutation items="0"></mutation>
                </block>
                <block type="lists_create_with"></block>
                <block type="lists_repeat">
                  <value name="NUM">
                    <shadow type="math_number">
                      <field name="NUM">5</field>
                    </shadow>
                  </value>
                </block>
                <block type="lists_length"></block>
                <block type="lists_isEmpty"></block>
                <block type="lists_indexOf">
                  <value name="VALUE">
                    <block type="variables_get">
                      <field name="VAR">{listVariable}</field>
                    </block>
                  </value>
                </block>
                <block type="lists_getIndex">
                  <value name="VALUE">
                    <block type="variables_get">
                      <field name="VAR">{listVariable}</field>
                    </block>
                  </value>
                </block>
                <block type="lists_setIndex">
                  <value name="LIST">
                    <block type="variables_get">
                      <field name="VAR">{listVariable}</field>
                    </block>
                  </value>
                </block>
                <block type="lists_getSublist">
                  <value name="LIST">
                    <block type="variables_get">
                      <field name="VAR">{listVariable}</field>
                    </block>
                  </value>
                </block>
                <block type="lists_split">
                  <value name="DELIM">
                    <shadow type="text">
                      <field name="TEXT">,</field>
                    </shadow>
                  </value>
                </block>
                <block type="lists_sort"></block>
              </category>
              <category name="%{BKY_CATCOLOUR}" colour="%{BKY_COLOUR_HUE}">
                <block type="colour_picker"></block>
                <block type="colour_random"></block>
                <block type="colour_rgb">
                  <value name="RED">
                    <shadow type="math_number">
                      <field name="NUM">100</field>
                    </shadow>
                  </value>
                  <value name="GREEN">
                    <shadow type="math_number">
                      <field name="NUM">50</field>
                    </shadow>
                  </value>
                  <value name="BLUE">
                    <shadow type="math_number">
                      <field name="NUM">0</field>
                    </shadow>
                  </value>
                </block>
                <block type="colour_blend">
                  <value name="COLOUR1">
                    <shadow type="colour_picker">
                      <field name="COLOUR">#ff0000</field>
                    </shadow>
                  </value>
                  <value name="COLOUR2">
                    <shadow type="colour_picker">
                      <field name="COLOUR">#3333ff</field>
                    </shadow>
                  </value>
                  <value name="RATIO">
                    <shadow type="math_number">
                      <field name="NUM">0.5</field>
                    </shadow>
                  </value>
                </block>
              </category>
              <sep></sep>
              <category name="%{BKY_CATVARIABLES}" colour="%{BKY_VARIABLES_HUE}" custom="VARIABLE"></category>
              <category name="%{BKY_CATFUNCTIONS}" colour="%{BKY_PROCEDURES_HUE}" custom="PROCEDURE"></category>
            </xml>
        </div>

        <!-- code area -->
        <div class="col-4"  id="area" style="background-color:rgb(209, 164, 175);" >
            <h2><b>JAVA code</b></h2>
            <table width="50%" height="50%">
              <tr>
                <td colspan=2>
                  <table width="50%">
                    <tr id="tabRow" height="1em">
                      <td id="tab_javascript" class="tabon">JavaScript</td>
                      <!-- <td id="tab_java" class="tabon">Java</td> -->
                    </tr>

                  </table>
                </td>
              </tr>
              <tr>
                <td height="100%" colspan=2 id="content_area">
                </td>
                <!-- <td height="100%" colspan=2 id="content_area">
                </td> -->
              </tr>
            </table>
            <pre id="content_javascript" class="content"></pre>
            <?php
              echo "code: ".$_GET['code'];
              ?>
            <!-- <pre id="content_java" class="content"></pre> -->


            <!-- mysql DB connection, pop-up -->
            <?php
            $userAnswer = "answer";

            $conn = mysqli_connect("localhost","root","123456", "jalock", "3306");

            if (mysqli_connect_errno()){
                echo "연결실패<br>".mysqli_connect_error();
            }

            $query = "SELECT * FROM answer1 WHERE id=1";
            $result = mysqli_query($conn, $query);

            $row = mysqli_fetch_array($result);
            $escaped['id'] = htmlspecialchars($row['id']);
            $escaped['answer'] = htmlspecialchars($row['answer']);

            if($userAnswer == $escaped['answer'])
            {
            ?>
            <script language="javascript">
              var correct = window.open('', 'popup', 'width=300, height=200, scrollbars=0, toolbar=0, menubar=no');
              correct.document.write("<p align = 'center'> 정답입니다! </p>");
            </script>
            <?php
            }
            else
            {
            ?>
            <script language="javascript">
              var wrong = window.open('', 'popup', 'width=300, height=200, scrollbars=0, toolbar=0, menubar=no');
              wrong.document.write("<p align = 'center'> 오답입니다! </p>");
            </script>
            <?php
            }
            ?>
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
            <a href="/jalock/front_editor/demos/code/index_front.php?id=<?php echo $id_bef ?>" class="btn btn-secondary">이전</a>
        </div>
        <div class="col-sm-3" style="text-align: center">
            <a href="/jalock/front_editor/demos/code/index_front.php?id=<?php echo $id_aft ?>" class="btn btn-secondary">다음</a>
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
    </script>

</body>

</html>
