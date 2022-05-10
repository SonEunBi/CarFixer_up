<?php
    $id   = $_POST["name"];
    $pass = $_POST["location"];
    $name = $_POST["company"];
    $email1  = $_POST["region"];
    $email2  = $_POST["price"];

    // $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

              
    $con = mysqli_connect("localhost", "user1", "12345", "carinfo");

  $sql = "insert into members(name, location, company, region, price) ";
  $sql .= "values('$name', '$location', '$company', '$region', '$price')";

  mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con);     

    echo "
        <script>
            location.href = 'index.php';
        </script>
    ";
?>

   
