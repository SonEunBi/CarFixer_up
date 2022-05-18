      <link rel="stylesheet" type="text/css" href="./css/main.css">
        <!-- <div id="main_img_bar"> -->
            <br><br><br><br><br><br><br><br><br><br><br>
         <br><br><br>

     </div>
     <div id="main_content">
        <div id="latest">
            <h4>공지사항</h4>
            <ul>
                <!-- 최근 게시 글 DB에서 불러오기 -->
                <?php
                $con = mysqli_connect("localhost", "user1", "12345", "userdata");
                $sql = "select * from notice order by num desc limit 5";
                $result = mysqli_query($con, $sql);
                
                if (!$result)
                    echo "공지 사항이 존재하지 않습니다!";
                else
                {
                    while( $row = mysqli_fetch_array($result) )
                    {
                        $regist_day = substr($row["regist_day"], 0, 10);
                        ?>
                        <li>
                            <span><?=$row["subject"]?></span>
                            <span><?=$row["name"]?></span>
                            <span><?=$regist_day?></span>
                        </li>
                        <?php
                    }
                }
                ?>
            </div>
            <div id="point_rank">
                <h4>자료 신청 순위</h4>
                <ul>
                    <!-- 포인트 랭킹 표시하기 -->
                    <?php
                    $rank = 1;
                    $sql = "select * from members order by point desc limit 5";
                    $result = mysqli_query($con, $sql);

                    if (!$result)
                        echo "아직 가입된 회원이 없습니다!";
                    else
                    {
                        while( $row = mysqli_fetch_array($result) )
                        {
                            $name  = $row["name"];        
                            $id    = $row["id"];
                            $point = $row["point"];
                            $name = mb_substr($name, 0, 1)." * ".mb_substr($name, 2, 1);
                            ?>
                            <li>
                                <span><?=$rank?></span>
                                <span><?=$name?></span>
                                <span><?=$id?></span>
                                <span><?=$point?></span>
                            </li>
                            <?php
                            $rank++;
                        }
                    }

                    mysqli_close($con);
                    ?>
                </ul>
            </div>
        </div>