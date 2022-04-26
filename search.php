
<!DOCTYPE html>
<html>
<head> 
  <meta charset="utf-8">
  <title>EB공공도서관</title>
  <link rel="stylesheet" type="text/css" href="./css/common.css">
  <link rel="stylesheet" type="text/css" href="./css/board.css">

</head>
<body> 
  <header>
    <?php include "header.php";?>
  </header>  
  <div id="board_box"> 
    <h1 id="board_title"></h1>
    <h3>자료 검색</h3>

  </div>


  <style>
    h3{
      margin-bottom: -20px;
      text-align: center;
    }
    #search_btn{
      cursor: pointer;
      width:500px;
      height: 55px;
      border-radius: 84px;
      font-size: large;
    }
    #search_view{
      transition-duration: 0.4s;
      cursor: pointer;
      float: absolute;
      width:480px;
      border-radius: 32px;
      height: 55px;
      font-size:large;
    }
    .footerSc{
      bottom: 0;
      width:100%;
      margin-top: 390px;
    }
  </style> 
  <!-- 검색창 -->
  <div class="search" style="height: 100px; margin-top: 17px;">
    <br><br> <center>
      <form method="post" action="book_list.php" style="float=center;">
        <input id="search_view" type="text" name="name" action="book_list.php" placeholder="  검색어를 입력하세요"></center>
        <input id="search_btn" type="submit" value="검색" action="book_list.php" style="font-size:large; border-radius: 32px; height:59px; width:65px; position: absolute; right: 460px; top: 210px;"></div></form>

        <div>
          <h3 id="board_title"></h3>  
        </div> <!-- board_box -->
        <footer class="footerSc">
          <?php include "footer.php";?>
        </footer>
      </body>
      </html>


