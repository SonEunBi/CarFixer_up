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

<section>
	<!-- <div id="main_img_bar"> -->
       <center><img src="./img/main2.png"></center> 
    </div>
   	<div id="board_box">
  <h1 id="board_title"></h1>  


<h3>예약 안내</h3>

<table>
<style>
  h3 {
   padding-left: 5px;
   text-align: center;
}
  <br><br>
	table{border-collapse:collapse; width : 800px;} 
	td{border:solid 1px gray; text-align:center; padding:5px;}
</style> 
<br>
<table border=3>

  <tr height=50><th width= 500>자료실</th><th width =500>개관시간</th><th width= 500>이용 가능 시간</th></tr>
<td>스터디룸</td><td>월요일~금요일 09:00~20:00</td><td>2시간</td></tr>
<td>회의실</td><td>월요일~금요일 09:00~20:00<p></td><td>2시간</td>

</table>

<?php
echo "<br>※예약은 홈페이지에서 가능하며, 예약 번호는 이용증에 적혀져 있는 번호를 기재하시기 바랍니다.<br>";
?>
 <!--  <h3 id="board_title"></h3>   -->
	</div> <!-- board_box -->

</section> 
<footer>
    <?php include "footer.php";?>
</footer>
</body>
</html>
