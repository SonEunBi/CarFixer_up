<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <title>견적 비교 사이트</title>
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
        td:nth-child(1){width: 170px;}
        td:nth-child(2){width: 170px;}
        td:nth-child(3){width: 170px;}
        td:nth-child(4){width: 170px;}
        td:nth-child(5){width: 170px;}
    </style>
    <center>
        <table class="search_result" border ="1" align="center">

            <tr>
                <th width="170">청구번호</th><th width="170">도서명</th><th width="170">저자</th><th width="170">대출가능</th><th width="170">출판사</th>
            </tr><br>

        </table>
    </center>

    <?php
    if(isset($_POST["name"]) && isset($_POST["location"] &&
        isset($_POST["cartype"]) && isset($_POST["name"]) &&
        isset($_POST["name"])){
    }
    else{
        $name=null;
        echo "<br>   <br>";
    }
    $con = mysqli_connect("localhost", "user1", "12345", "carinfo");
    $sql = "select * from books WHERE name LIKE '%$name%' order by id asc";           
    $result = mysqli_query($con, $sql);
    $row=mysqli_fetch_array($result);
    $total_record = mysqli_num_rows($result); // 전체 글 수
           // $total_rows=$row[0];
    $num_match = mysqli_num_rows($result);



    if(!$num_match) 
    {
        echo("
            <script>
            window.alert('등록되지 않은 도서입니다!')
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
            $id          = $row["id"];
            $name        = $row["name"];
            $author   = $row["author"];
            $leftover    = $row["leftover"];
            $publisher    = $row["publisher"];
            ?>

            <center>
                <table class="search_result" border ="1">
                    <tr>
                        <td><?= $id ?></td>
                        <td><mark><?= $name ?></mark></td>
                        <td><?= $author ?></td>
                        <td><?= $leftover ?></td>
                        <td><?= $publisher?></td>
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
    <form class="search_view" method="post" action="book_list.php">
        <input type="text" name="name" placeholder="도서명"> 
        <input class="search_btn" type="submit" value="재검색" action="book_list.php"> </form> </center>
        <br><br><br>
    </div> <!-- main_content -->

    <footer class="footerSc">
        <?php include "footer.php";?>
    </footer>
</body>
</html>