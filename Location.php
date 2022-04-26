<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>EB공공도서관</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/board.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">

  <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=7y6cx9njg6"></script>
</head>
<body> 
<header>
    <?php include "header.php";?>
</header>  
<style>
  h3 {
   padding-left: 5px;
   text-align: center;
}
</style>
    </div>
   	<div id="board_box">
     <h1 id="board_title"></h1>  


<h3>오시는 길</h3>

<br><br>
<div id="map" style="width:100%;height:400px;"></div>

<script>
var mapOptions = {
    center: new naver.maps.LatLng(36.7637013, 127.2819736),
    zoom: 14
};

var map = new naver.maps.Map('map', mapOptions);
</script>
<br>
<span font-weight="bold"><center>< 충청남도 천안시 동남구 병천면 충절로 1600 ></span>


</table>
  <h3 id="board_title"></h3>  
	</div> <!-- board_box -->

</section> 
<footer>
    <?php include "footer.php";?>
</footer>
</body>
</html>
