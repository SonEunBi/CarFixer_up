      <link rel="stylesheet" type="text/css" href="./css/main.css">
      <!-- <div id="main_img_bar"> -->
</div>

        <script type="text/javascript">
            $(document).ready(function(){
              $('.slider').slider();
          });
      </script>
<style type="text/css">
    .slider .indicators .indicator-item {
  background-color: #666666;
  border: 3px solid #ffffff;
  -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}
.slider .indicators .indicator-item.active {
  background-color: #ffffff;
}
.slider {
  width: 900px;
  margin: 0 auto;
}
.slider .indicators {
  bottom: 60px;
  z-index: 100;
  /* text-align: left; */
}
</style>

<div class="slider">
    <ul class="slides">
      <li>
        <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>


      <br><br><br><br>
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