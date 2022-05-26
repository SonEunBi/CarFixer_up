<!doctype html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>부셔진 차</title>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="./css/common.css">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <?php
        session_start();
        if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
        else $userid = "";
        if (isset($_SESSION["username"])) $username = $_SESSION["username"];
        else $username = "";
        ?>		
<script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class ="menu-top-home-fixed">
            <div class="container">
                <div class="col-xs-3">
                </div>
                <div class = "col-xs-9 align-right">
                    <ul class="menu-links"> 
                        <li><a class="logo" href="index.php"><img src="img/logo1.png"></a></li>
                        <li><a href="board_list.php">가격 공유</a></li>
                        <li><a href="inquiry_board_list.php">가격 문의</a></li>
                        <li><a href="free_board_list.php">자유게시판</a></li>        
                        <li><a href="search_db.php">데이터 분석 결과</a></li>
                        <li><a href="quote_personal.php">개인 비교</a></li>
                        <li><a href="quote_group.php">단체 비교</a></li>
                        <?php
                        if(!$userid) {
                            ?>                
                            <li><a data-toggle="modal" role="button" class="btn-danger" href="member_form.php">Sign up</a> </li>
                            <li> | </li>
                            <li><a class="btn-link" role="button" data-toggle="modal"  href="login_form.php">Login</a></li>
                            <?php
                        } else {
                            $logged = $username."".$userid."님";
                            ?>
                            <li><?=$logged?> </li>
                            <li> | </li>
                            <li><a href="logout.php">로그아웃</a> </li>
                            <li> | </li>
                            <li><a href="member_modify_form.php">정보 수정</a></li>
                            <?php
                        }   ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script> 


<<<<<<< HEAD
=======
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
>>>>>>> 3f92f5e75ce760eca1af3a012c41c1fd1e44891b
</body>
</html>