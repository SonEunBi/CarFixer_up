
<link rel="stylesheet" type="text/css" href="./css/common.css?ver=1">

<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
    if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $userlevel = "";
    if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
    else $userpoint = "";
?>		



        <div id="top">
            <h3>
                <a href="index.php">EB공공도서관</a>
            </h3>
            <ul id="top_menu">  


<?php
    if(!$userid) {
?>                
                <li><a href="member_form.php">회원 가입</a> </li>
                <li> | </li>
                <li><a href="login_form.php">로그인</a></li>
<?php
    } else {
                $logged = $username."(".$userid.")님[Level:".$userlevel.", Point:".$userpoint."]";
?>
                <li><?=$logged?> </li>
                <li> | </li>
                <li><a href="logout.php">로그아웃</a> </li>
                <li> | </li>
                <li><a href="member_modify_form.php">정보 수정</a></li>
<?php
    }
?>
<?php
    if($userlevel==1) {
?>
                <li> | </li>
                <li><a href="admin.php">관리자 모드</a></li>
<?php
    }
?>
            </ul>
        </div>

        <div id="menu_bar">

            <ul id="main-menu"> 
                <li class="side"><a href="#" >견적 비교</a>
                  <ul class="sub">
                    <li><a href="search.php"> 자료 검색</a></li>
                    </ul>
                </li>

       <li>|</li>
              <li class="side" ><a href="#">자유게시판</a>
                   <ul class="sub">
                         <li><a href="board_list.php">자료 신청</a></li>
                         <li><a href="message_form.php">건의 사항</a></li>
                    </ul>
                </li>
       <li>|</li>
                 <li class="side" ><a href="#">데이터베이스</a> 
                <ul class="sub">
                   <li><a href="search.php"> 자료 검색</a></li>
                  <li><a href="admin.php">관리자 페이지</a></li>
                    </ul>
                </li>


                 <li> | </li>  
              <li class="side" ><a href="#">비교 게시판</a> 
                <ul class="sub">
             <li><a href="board_list.php">개인 비교</a></li>
              <li><a href="board_list.php">단체 비교</a></li>
                    </ul>
                </li>
  
            </ul>
        </div>
