<<<<<<< HEAD
<?php

    $num   = $_GET["num"];
    $page   = $_GET["page"];

    $con = mysqli_connect("localhost", "user1", "12345", "userdata");
    $sql = "select * from inquiryboard where num = $num";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    $copied_name = $row["file_copied"];

    if ($copied_name)
    {
        $file_path = "./data/".$copied_name;
        unlink($file_path);
    }

    $sql = "delete from inquiryboard where num = $num";
    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
         <script>
             location.href = 'inquiry_board_list.php?page=$page';
         </script>
       ";
=======
<?php

    $num   = $_GET["num"];
    $page   = $_GET["page"];

    $con = mysqli_connect("localhost", "user1", "12345", "sample");
    $sql = "select * from board where num = $num";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    $copied_name = $row["file_copied"];

	if ($copied_name)
	{
		$file_path = "./data/".$copied_name;
		unlink($file_path);
    }

    $sql = "delete from board where num = $num";
    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
	     <script>
	         location.href = 'inquiry_board_list.php?page=$page';
	     </script>
	   ";
>>>>>>> 3f92f5e75ce760eca1af3a012c41c1fd1e44891b
?>