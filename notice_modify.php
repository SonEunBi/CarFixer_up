<?php
session_start();
if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
       else $userlevel = "";
       if ( $userlevel != 1 )
    {
        echo("
                    <script>
                    alert('관리자가 아닙니다! 공지 사항 관리는 관리자만 가능합니다!');
                    history.go(-1)
                    </script>
        ");
    exit;
    }
    $num = $_GET["num"];
    $page = $_GET["page"];

    $subject = $_POST["subject"];
    $content = $_POST["content"];
          
    $con = mysqli_connect("localhost", "user1", "12345", "sample");
    $sql = "update notice set subject='$subject', content='$content' ";
    $sql .= " where num=$num";
    mysqli_query($con, $sql);

    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'notice_list.php?page=$page';
	      </script>
	  ";
?>

   
