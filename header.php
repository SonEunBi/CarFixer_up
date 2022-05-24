<!doctype html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Simplest jQuery Dropdown Nav Demo</title>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="./css/common.css">

        <link rel="stylesheet" type="text/css" href="./css/fiixed_header.css">
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
                <a href="index.php">비교 견적 사이트</a>
            </h3>
            <ul id="top_menu">  


                <?php
                if(!$userid) {
                    ?>                
                    <li><a href="member_form.php">Sign up</a> </li>
                    <li> | </li>
                    <li><a href="login_form.php">Login</a></li>
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

        <style>
            html { box-sizing: border-box; }

            *, *:before, *:after { box-sizing: inherit; }


            a { text-decoration: none; }

            .container {
              width: 1000px;
              margin-top:   80px;

          }

          h1 { text-align:center; margin-top:80px;}

/* Navigation Styles */

nav { background:#ffffff; 
    position: relative;
    top: 70px;
    padding-top: 10px;
    width: 100%;
    left : 180px;
    z-index : 9999;
}

nav ul {
  font-size: 0;
  margin: 0;
  padding: 0;
}

nav ul li {
  font-weight: bold;
  display: inline-block;
  position: relative;

}

nav ul li a {
  display: block;
  font-size: 14px;

  padding: 10px 14px;
  transition: 0.3s linear;
}

nav ul li:hover { background: #ffffff; color: white; }

nav ul li ul {
  border-bottom: 5px solid #000000;
  display: none;
  position: absolute;
  width: 250px;
}

nav ul li ul li {
  border-top: 1px solid #444;
  display: block;
}

nav ul li ul li:first-child { border-top: none; }

nav ul li ul li a {
  background: #000000;
  display: block;
  color: whitesmoke;
  padding: 10px 14px;
}

nav ul li ul li a:hover { background:#ffffff; }

nav .fa.fa-angle-down { margin-left: 6px; }

</style>
</head>

<body>
    <nav>
        <div id="container" style="z-index: 999;">
            <ul> 
                <li class="side"><a href="#" >견적 게시판</a>
                  <ul class="sub">
                    <li><a href="share_board.php"> 견적 정보 공유</a></li>
                    <li><a href="inquiry_board.php"> 견적 정보 문의</a></li>
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
         <li><a href="search_db.php"> 자료 검색</a></li>
         <li><a href="admin.php">관리자 페이지</a></li>
     </ul>
 </li>


 <li> | </li>  
 <li class="side" ><a href="#">파손 비교</a> 
    <ul class="sub">
       <li><a href="quote_personal.php">개인 비교</a></li>
       <li><a href="quote_group.php">단체 비교</a></li>
   </ul>
</li>
</ul>
</div>
</nav>
<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script> 
<script>
    $('nav li').hover(
      function() {
          $('ul', this).stop().slideDown(200);
      },
      function() {
        $('ul', this).stop().slideUp(200);
    }
    );
</script>
</body>
</html>