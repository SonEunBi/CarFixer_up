      <link rel="stylesheet" type="text/css" href="./css/main.css">
      <!-- <div id="main_img_bar"> -->
</div>

        <script type="text/javascript">
            $(document).ready(function(){
              $('.slider').slider();
          });
      </script>
<!-- slide container -->
    <div class="slideshow-container">
        <div class="myslide fade">
            <img src="/TermProject/img/slideimg1.jpeg" onclick="location.href='goods_view.php?goodsid=4'" style='width:100%;'>
        </div>
        <div class="myslide fade">
            <img src="/TermProject/img/slideimg2.jpeg" onclick="location.href='goods_view.php?goodsid=5'" style='width:100%;'>
        </div>
        <div class="myslide fade">
            <img src="/TermProject/img/slide4.jpeg" onclick="location.href='company.php'" style='width:100%;'>
        </div>
        <a class="prev" onclick="plusSlides(-2)">&#10094;</a>
        <a class="next" onclick="plusSlides(0)">&#10095;</a>
    </div>
    <br>
    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>

    </div>
    </div>
    <script type="text/javascript">
        var slideIndex = 1;
        showSlides(slideIndex);
        setInterval(showSlides, 6000); // Change image every 6 seconds

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }       

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("myslide");
        var dots = document.getElementsByClassName("dot");
        if (n < 1) {slideIndex = slides.length}
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        slideIndex++;
    }
    </script>
<style type="text/css">
    /* Hide the images by default */
.myslide {
  display: none;
}

.myslide img{
  cursor: pointer;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
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