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
		<h3><center>검색 결과</center></h3>
	</div>
	<style>
		.footerSc{

			bottom:140px;
			bottom: 0;
			width:100%;
			margin-top: 320px;
		}
		table{
			width:53%;
			border-top:1px solid black;

			background-color: #929292;}
			th, td{

				border-bottom: 1px solid black;
				padding:8px;
				text-align: center;
				background-color: white;
			}
			td:nth-child(1){width: 100px;}
			td:nth-child(2){width: 170px;}
			td:nth-child(3){width: 170px;}
			td:nth-child(4){width: 170px;}
			td:nth-child(5){width: 170px;}
		</style>
		<center>
			<table class="search_result" border ="1" align="center">

				<tr>
					<th width="100">부품번호</th><th width="170">부품명</th><th width="170">차종</th><th width="170">카센터 위치</th><th width="170">가격</th>
				</tr><br>

			</table>
		</center>

		<?php
		if(isset($_POST["partnum"]))
			$partnum = $_POST["partnum"];
		else{
			$partnum=null;
			echo "<br>   <br>";
		}
		$con = mysqli_connect("localhost", "user1", "12345", "carinfo");
		$sql = "select * from usercar WHERE partnum = '$partnum%' order by partnum";     

		$result = mysqli_query($con, $sql);
		$row=mysqli_fetch_array($result);
  	$total_record = mysqli_num_rows($result); // 전체 글 수
  	$num_match = mysqli_num_rows($result);


  	if(!$num_match) 
  	{
  		echo("
  			<script>
  			window.alert('등록되지 않은 데이터입니다!')
  			history.go(-1)
  			</script>
  			");
  	}
  	else{
  		?>
  		<?php
  		for ($i = 0;  $i < $num_match; $i++) {
  			mysqli_data_seek($result, $i);
               // 가져올 레코드로 위치(포인터) 이동
  			$row = mysqli_fetch_array($result);
               // 하나의 레코드 가져오기
  			$partnum        = $row["partnum"];
  			$partname        = $row["partname"];
  			$cartype    = $row["cartype"];
  			$location   = $row["location"];
  			$price    = $row["price"];
  			
  			?>

  			<center><br>
  				<table class="search_result2" border ="0" style="height: 100px;">
  					<tr>
  						<td><?= $partnum ?></td>
  						<td><mark><?= $partname ?></mark></td>
  						<td><mark><?= $location ?></mark></td>
  						<td><mark><?= $cartype ?></mark></td>
  						<td><?= $price?></td>
  					</tr>
  				</table>
  			</center>
  			<?php
  		}
  	}
  	mysqli_close($con);

  	?>
  </ul>

  <center>
  	<br><br><br>
  	<form method="post" action="book_list.php">&nbsp;
  		<input id="search_view" type="text" name="partnum" action="book_list.php" placeholder="부품 번호를 입력하세요">&nbsp;&emsp;&emsp;&emsp;

  		<button id="search_btn2" type="submit" value="부품검색" action="book_list.php" onclick="location.href='book_list.php'"style="background-color: black; color: whitesmoke;">부품검색</button>

  	</td></tr>
  </table></form>
  <!-- main_content -->

  <footer class="footerSc">
  	<?php include "footer.php";?>
  </footer>
</body>
</html>