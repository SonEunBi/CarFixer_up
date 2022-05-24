<?php
$rno = $_POST['rno']; 
$con = mysqli_connect("localhost", "user1", "12345", "userdata");
$sql = "select * from reply where idx='".$rno."'";
//reply테이블에서 idx가 rno변수에 저장된 값을 찾음
$result = mysqli_query($con, $sql);
$reply = $result->fetch_array();

$num = $_POST['b_no'];
$sql2 = "select * from board where num='".$num."'";
//board테이블에서 idx가 num변수에 저장된 값을 찾음
$result1 = mysqli_query($con, $sql2);
$board = $result1->fetch_array();

 $page   = $_GET["page"];
$pwk = $_POST['pw'];
$bpw = $reply['pw'];

if(password_verify($pwk, $bpw)) 
	{
		$sql2 = "delete from reply where idx='".$rno."'";
$result2 = mysqli_query($con, $sql2);
		 ?>
		 
	<script type="text/javascript">alert('댓글이 삭제되었습니다.'); location.replace("/web/board_view.php?idx=<?php echo $board["num"]; ?>");</script>
	<?php 
	}else{ ?>
		<script type="text/javascript">alert('비밀번호가 틀립니다');history.back();</script>
	<?php } ?>