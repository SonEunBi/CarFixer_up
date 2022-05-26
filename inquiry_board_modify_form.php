<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>부셔진 차</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/board.css">
<script>
  function check_input() {
      if (!document.inquiry_board_form.subject.value)
      {
          alert("제목을 입력하세요!");
          document.inquiry_board_form.subject.focus();
          return;
      }
      if (!document.inquiry_board_form.content.value)
      {
          alert("내용을 입력하세요!");    
          document.inquiry_board_form.content.focus();
          return;
      }
      document.inquiry_board_form.submit();
   }
</script>
</head>
<body> 
<header>
    <?php include "header.php";?>
</header> 
<section> 
    </div>
   	<div id="inquiry_board_box">
	    <h3 id="inquiry_board_title">
	    		게시판 > 글쓰기
		</h3>
<?php
	$num  = $_GET["num"];
	$page = $_GET["page"];
	
	$con = mysqli_connect("localhost", "user1", "12345", "sample");
	$sql = "select * from inquiryboard where num=$num";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);
	$name       = $row["name"];
	$subject    = $row["subject"];
	$content    = $row["content"];		
	$file_name  = $row["file_name"];
?>
	    <form  name="inquiry_board_form" method="post" action="inquiry_board_modify.php?num=<?=$num?>&page=<?=$page?>" enctype="multipart/form-data">
	    	 <ul id="inquiry_board_form">
				<li>
					<span class="col1">이름 : </span>
					<span class="col2"><?=$name?></span>
				</li>		
	    		<li>
	    			<span class="col1">제목 : </span>
	    			<span class="col2"><input name="subject" type="text" value="<?=$subject?>"></span>
	    		</li>	
                 
                 
                 
                 
                  <li>
	    			<span class="col1">부위 : </span>
	    			<select name="partname" >

                                    <option>-선택-</option>

                                    <option value='all'>전체</option>

                                    <option value='bumper'>범퍼</option>

                                    <option value='bonnet'>보넷</option>

                                    <option value='trunk'>트렁크</option>

                                    <option value='loop'>루프</option>

                                    <option value='door'>도어</option>

                                    <option value='staff'>스테프</option>

                                    <option value='fender'>휀더</option>

                                    <option value='etc'>기타</option>

                                </select>
	    		</li>	
                 <li>
	    			<span class="col1">차종 : </span>
	    			<select name="cartype" >

                                    <option>-선택-</option>

                                    <option value='sedan'>세단</option>

                                    <option value='coupe'>쿠페</option>

                                    <option value='wagon'>왜건</option>

                                    <option value='suv'>SUV</option>

                                    <option value='convertible'>컨버터블</option>

                                    <option value='hatchback'>해치백</option>

                                    <option value='limousine'>리무진</option>

                                    <option value='van'>밴</option>

                                    <option value='pickuptrunk'>픽업트럭</option>

                                </select>
                        
	    		</li>	
                 
                
                
                    <li>
	    			<span class="col1">부품번호: </span>
	    			<span class="col2"><input name="subject" type="text"></span>
	    		</li>
                 
                 
                 
	    		<li id="text_area">	
	    			<span class="col1">내용 : </span>
	    			<span class="col2">
	    				<textarea name="content"><?=$content?></textarea>
	    			</span>
	    		</li>
	    		<li>
			        <span class="col1"> 첨부 파일 : </span>
			        <span class="col2"><?=$file_name?></span>
			    </li>
	    	    </ul>
	    	<ul class="buttons">
				<li><button type="button" onclick="check_input()">수정하기</button></li>
				<li><button type="button" onclick="location.href='inquiry_board_list.php'">목록</button></li>
			</ul>
	    </form>
	</div> <!-- board_box -->
</section> 
<footer>
    <?php include "footer.php";?>
</footer>
</body>
</html>
=======
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>부셔진 차</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/board.css">
<script>
  function check_input() {
      if (!document.inquiry_board_form.subject.value)
      {
          alert("제목을 입력하세요!");
          document.inquiry_board_form.subject.focus();
          return;
      }
      if (!document.inquiry_board_form.content.value)
      {
          alert("내용을 입력하세요!");    
          document.inquiry_board_form.content.focus();
          return;
      }
      document.inquiry_board_form.submit();
   }
</script>
</head>
<body> 
<header>
    <?php include "header.php";?>
</header> 
<section> 
    </div>
   	<div id="inquiry_board_box">
	    <h3 id="inquiry_board_title">
	    		게시판 > 글쓰기
		</h3>
<?php
	$num  = $_GET["num"];
	$page = $_GET["page"];
	
	$con = mysqli_connect("localhost", "user1", "12345", "sample");
	$sql = "select * from inquiryboard where num=$num";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);
	$name       = $row["name"];
	$subject    = $row["subject"];
	$content    = $row["content"];		
	$file_name  = $row["file_name"];
?>
	    <form  name="inquiry_board_form" method="post" action="inquiry_board_modify.php?num=<?=$num?>&page=<?=$page?>" enctype="multipart/form-data">
	    	 <ul id="inquiry_board_form">
				<li>
					<span class="col1">이름 : </span>
					<span class="col2"><?=$name?></span>
				</li>		
	    		<li>
	    			<span class="col1">제목 : </span>
	    			<span class="col2"><input name="subject" type="text" value="<?=$subject?>"></span>
	    		</li>	
                 
                 
                 
                 
                  <li>
	    			<span class="col1">부위 : </span>
	    			<select name="partname" >

                                    <option>-선택-</option>

                                    <option value='all'>전체</option>

                                    <option value='bumper'>범퍼</option>

                                    <option value='bonnet'>보넷</option>

                                    <option value='trunk'>트렁크</option>

                                    <option value='loop'>루프</option>

                                    <option value='door'>도어</option>

                                    <option value='staff'>스테프</option>

                                    <option value='fender'>휀더</option>

                                    <option value='etc'>기타</option>

                                </select>
	    		</li>	
                 <li>
	    			<span class="col1">차종 : </span>
	    			<select name="cartype" >

                                    <option>-선택-</option>

                                    <option value='sedan'>세단</option>

                                    <option value='coupe'>쿠페</option>

                                    <option value='wagon'>왜건</option>

                                    <option value='suv'>SUV</option>

                                    <option value='convertible'>컨버터블</option>

                                    <option value='hatchback'>해치백</option>

                                    <option value='limousine'>리무진</option>

                                    <option value='van'>밴</option>

                                    <option value='pickuptrunk'>픽업트럭</option>

                                </select>
                        
	    		</li>	
                 
                
                
                    <li>
	    			<span class="col1">부품번호: </span>
	    			<span class="col2"><input name="subject" type="text"></span>
	    		</li>
                 
                 
                 
	    		<li id="text_area">	
	    			<span class="col1">내용 : </span>
	    			<span class="col2">
	    				<textarea name="content"><?=$content?></textarea>
	    			</span>
	    		</li>
	    		<li>
			        <span class="col1"> 첨부 파일 : </span>
			        <span class="col2"><?=$file_name?></span>
			    </li>
	    	    </ul>
	    	<ul class="buttons">
				<li><button type="button" onclick="check_input()">수정하기</button></li>
				<li><button type="button" onclick="location.href='inquiry_board_list.php'">목록</button></li>
			</ul>
	    </form>
	</div> <!-- board_box -->
</section> 
<footer>
    <?php include "footer.php";?>
</footer>
</body>
</html>
>>>>>>> 3f92f5e75ce760eca1af3a012c41c1fd1e44891b
