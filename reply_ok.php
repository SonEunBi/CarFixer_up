<script type="text/javascript" src="/js/common.js"></script>
<?php
	 
    $num = $_GET['bno'];
    $userpw = password_hash($_POST['dat_pw'], PASSWORD_DEFAULT);
    
    if($num && $_POST['dat_user'] && $userpw && $_POST['content']){


 $conn = mysqli_connect("localhost", "user1", "12345", "userdata");
       $insert_query ="insert into reply(con_num,name,pw,content) values('".$num."','".$_POST['dat_user']."','".$userpw."','".$_POST['content']."')";
    $sql = mysqli_query($conn, $insert_query);

        echo "<script>alert('댓글이 작성되었습니다.'); 
        location.href=board_view.php?num=<?=$num?>';</script>";
    }else{
        echo "<script>alert('댓글 작성에 실패했습니다.'); 
        history.back();</script>";
    }
    mysqli_close($conn);
	
?>