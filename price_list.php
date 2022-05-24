<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<title>비교 견적 사이트</title>
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
		table.search_result{
			border-collapse: collapse;
			text-align: left;
			
			vertical-align: middle;
			line-height: 1.5;
			width:60%;
		}
		table.search_result	th, thead{
			padding: 10px;
			font-weight: bold;
			vertical-align: middle;
			color: #369;
			border-bottom: 3px solid #036;
		}
		table.search_result	tbody{
			width: 150px;
			padding: 10px;
			font-weight: bold;
			vertical-align: middle;
			border-bottom: 1px solid #ccc;
			background: white;
			/*padding:8px;
			text-align: center;
			background-color: white;*/
		}
		table.search_result	td{
			width: 350px;
			height: 70px;
			padding: 10px;
			vertical-align: top;
			border-bottom: 1px solid #ccc;
		}
		td:nth-child(1){width: 100px;}
		td:nth-child(2){width: 170px;}
		td:nth-child(3){width: 170px;}
		td:nth-child(4){width: 170px;}
		td:nth-child(5){width: 170px;}

		td:nth-child(6){width: 170px;}
	</style>


	<center>
		<table class="search_result" align="center">
			<thead>
				<tr>
					<th width="100">부품번호</th><th width="170">부품명</th><th width="170">차종</th><th width="170">카센터 위치</th><th width="170">가격</th>
				</tr><br>
			</thead>
		</center>

		<?php

		if(isset($_POST['partname'] , $_POST['cartype'] , $_POST['location'])){

			for($k=0; $k<count($_POST['partname']); $k++){
				$rspartname = $_POST['partname'][$k];
			}
			for($j=0; $j<count($_POST['location']); $j++){
				$rslocation = $_POST['location'][$j];
			}
			for($i=0; $i<count($_POST['cartype']); $i++){
				$rscartype = $_POST['cartype'][$i];
			}

		}
		// $partnum = array($_POST["partnum"]);
		else{
			$name=null;
			echo "<br>   <br>";
		}
		$con = mysqli_connect("localhost", "user1", "12345", "carinfo");
		$sql = "select * from usercar where location = '$rslocation' and partname = '$rspartname' and cartype = '$rscartype'";

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
  				<table class="search_result" border ="0" style="height: 100px;">
  					<tbody>
  						<tr>
  							<td><?= $partnum ?></td>
  							<td><mark><?= $partname ?></mark></td>
  							<td><mark><?= $cartype ?></mark></td>
  							<td><mark><?= $location ?></mark></td>
  							<td><?= $price?></td>
  						</tr>
  				</table>
  			</center>
  			<?php
  		}
  	}
  	mysqli_close($con);


  	$con = mysqli_connect("localhost", "user1", "12345", "carinfo");
  	$sql = "select round(avg(price),0) as avg 
  	from usercar 
  	where location = '$rslocation' and cartype='$rscartype' and partname='$rspartname'";

  	$result = mysqli_query($con, $sql);
  	$row=mysqli_fetch_array($result);

  	?>

  	<center>

  		<table class="search_result" border ="0" align="center">
  			<thead>
  			<tr>
  				<th width="100">부품번호</th><th width="170">부품명</th><th width="170">차종</th><th width="170">카센터 위치</th><th width="170">평균값</th>
  			</tr><br>
  			</thead>
  	</center>

  <center><br>
  	<table class="search_result" border ="0" style="height: 100px;">
  		<tr>
  			<?php

  			$image = array("01.jpg", "02.jpg", "03.jpg", "04.jpg", "05.jpg", "06.jpg", "07.jpg", "08.jpg");

  			if(isset($_POST['partname'])){
  				for($k=1; $k<=count($_POST['partname']); $k++){  
  					$rspartname = $_POST['partname'][$k]; 					
  					break;
  				} 		


  			}
  			?>
<tbody>
  			<td><img src = "/img/<?=$image[$k]?>" 
  				width="80", height="80" /></td>
  				<td><mark><?= $partname ?></mark></td>
  				<td><mark><?= $cartype ?></mark></td>
  				<td><mark><?= $location ?></mark></td>
  				<td><?= $row['avg']?></td>
  			</tr>
  			</tbody>
  		</table>
  	</center>
  	<?php

  	mysqli_close($con);

  	?>
  </ul>


  <center>
  	<br><br><br>
  	<form class="search_view" method="post" action="price_list.php">
  		<input type="text" name="name" placeholder="부품명"> 
  		<input class="search_btn" type="submit" value="재검색" action="price_list.php"> </form> </center>



  		<br><br><br>
  	</div> <!-- main_content -->

  	<footer class="footerSc">
  		<?php include "footer.php";?>
  	</footer>
  </body>
  </html>