<?php
$rno = $_POST['rno'];//댓글번호

$conn = mysqli_connect("localhost", "user1", "12345", "userdata");
$insert_query ="select * from reply where idx='".$rno."'";
$sql1 = mysqli_query($conn, $insert_query);
//reply테이블에서 idx가 rno변수에 저장된 값을 찾음
$reply = $sql1->fetch_array();

$num = $_POST['b_no']; //게시글 번호
$insert_query ="select * from board where num='".$num."'";
$sql2 = mysqli_query($conn, $insert_query);
//board테이블에서 idx가 bno변수에 저장된 값을 찾음
$board = $sql2->fetch_array();

$insert_query ="update reply set content='".$_POST['content']."' where idx = '".$rno."'";

$sql3 = mysqli_query($conn, $insert_query);//reply테이블의 idx가 rno변수에 저장된 값의 content를 선택해서 값 저장
?> 
<script type="text/javascript">alert('수정되었습니다.'); location.replace("board_view.php?idx=<?php echo $num; ?>");</script>