<!DOCTYPE html>
<html>
<head> 
  <meta charset="utf-8">
  <title>비교 견적 사이트</title>
  <link rel="stylesheet" type="text/css" href="./css/common.css">
  <link rel="stylesheet" type="text/css" href="./css/board.css">
  <link rel="stylesheet" type="text/css" href="./css/search.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="./js/search.js"></script>
</head>
<style>
  table, th, td{
   border-collapse: collapse;
   text-align: left;
   line-height: 1.5;
   background-color: white;

   border: 1px solid black;
   border-collapse: collapse;
 }

</style>
<body> 
  <header>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <?php include "header.php";?>
  </header>  
  <br><br><br>
  <div id="board_box"> 
    <h1 id="board_title"></h1>
    <h3>자료 검색</h3>
  </div>

  <br><br> 

  <div id="btn_group" style="margin-left:40%"><br><br>
    <button id="search_case1" onclick='find_normal()'>일반검색</button>
    <button id="search_case2" onclick='find_num()'>부품번호로 검색</button>
  </div>


  <br><br>
  <div id="checkbox_form">
    <form action="search_list_norm.php" name="searchform" method="POST">
      <center>
        <table style="border: 2px solid #444;" id="wrapper">
          <tr height=80 style="border:1px solid #444;"><th width= 200> <center>
          부품명</th></center>
          <td width =600> &nbsp;
            <input type="checkbox" id="ch_chk"id="checkAll" name ="partname"><label for id="checkAll"><b>전체</b></label>&emsp;
           <input type="checkbox" id="ch_chk"name ="partname[]" class="chk" value="bumper" checked> <label for id="ch_chk"><label for id="ch_chk">범퍼</label>&emsp;
           <input type="checkbox" id="ch_chk"name ="partname[]" class="chk" value="bonnet"><label for id="ch_chk">보넷</label>&emsp;
           <input type="checkbox" id="ch_chk"class="chk"name ="partname[]" value="trunk"><label for id="ch_chk">트렁크</label>&emsp;
           <input type="checkbox" id="ch_chk"class="chk"name ="partname[]" value="loop"><label for id="ch_chk">루프</label>&emsp; 
           <input type="checkbox" id="ch_chk"class="chk"name ="partname[]" value="door"><label for id="ch_chk">도어</label>&emsp; 
           <input type="checkbox" id="ch_chk"class="chk"name ="partname[]" value="staff"><label for id="ch_chk">스테프</label>&emsp;
           <input type="checkbox" id="ch_chk"class="chk"name ="partname[]" value="fender"><label for id="ch_chk">휀더</label>&emsp;
           <input type="checkbox" id="ch_chk"class="chk"name ="partname[]" value="etc"><label for id="ch_chk">기타</label>&emsp;
          </td></tr>


          <tr height=80 ><th width= 200><center>차종</center></th></div>&nbsp;
            <td width =600> &nbsp;
             <input type="checkbox" id="ch_chk"name ="cartype[]" value="sedan"><label for id="ch_chk">세단</label>&emsp;
             <input type="checkbox" id="ch_chk"name ="cartype[]" value="coupe"><label for id="ch_chk">쿠페</label>&emsp;
             <input type="checkbox" id="ch_chk"name ="cartype[]" value="wagon"><label for id="ch_chk">왜건</label>&emsp;
             <input type="checkbox" id="ch_chk"name ="cartype[]" value="suv" checked>SUV</label>&emsp; 
             <input type="checkbox" id="ch_chk"name ="cartype[]" value="convertible"><label for id="ch_chk">컨버터블</label><br><br>  &nbsp;
             <input type="checkbox" id="ch_chk"name ="cartype[]" value="hatchback"><label for id="ch_chk">해치백</label>&emsp; 
             <input type="checkbox" id="ch_chk"name ="cartype[]" value="limousine"><label for id="ch_chk">리무진</label>&emsp; 
             <input type="checkbox" id="ch_chk"name ="cartype[]" value="van"><label for id="ch_chk">밴</label>&emsp; 
             <input type="checkbox" id="ch_chk"name ="cartype[]" value="pickuptrunk"><label for id="ch_chk">픽업트럭</label>&emsp; 
            </td></tr>


            <tr height=80 ><th width= 200><center>카센터 위치</center></th></div>
              <td width =600> &nbsp;
              <input type="checkbox" id="ch_chk"name ="location[]" value="1" checked><label for id="ch_chk">서울</label>&nbsp;
              <input type="checkbox" id="ch_chk"name ="location[]" value="2"><label for id="ch_chk">부산</label>&nbsp;
              <input type="checkbox" id="ch_chk"name ="location[]" value="3"><label for id="ch_chk">대구</label>&nbsp;
              <input type="checkbox" id="ch_chk"name ="location[]" value="4"><label for id="ch_chk">인천</label>&nbsp;
              <input type="checkbox" id="ch_chk"name ="location[]" value="5"><label for id="ch_chk">광주</label>&nbsp;
              <input type="checkbox" id="ch_chk"name ="location[]" value="6"><label for id="ch_chk">대전</label>&nbsp;
              <input type="checkbox" id="ch_chk"name ="location[]" value="7"><label for id="ch_chk">울산</label>&nbsp;
              <input type="checkbox" id="ch_chk"name ="location[]" value="8"><label for id="ch_chk">강원</label>&nbsp;<br><br>&nbsp;
              <input type="checkbox" id="ch_chk"name ="location[]" value="9"><label for id="ch_chk">경기</label>&nbsp;
              <input type="checkbox" id="ch_chk"name ="location[]" value="10"><label for id="ch_chk">경남</label>&nbsp;
              <input type="checkbox" id="ch_chk"name ="location[]" value="11"><label for id="ch_chk">경북</label>&nbsp;
              <input type="checkbox" id="ch_chk"name ="location[]" value="12"><label for id="ch_chk">전남</label>&nbsp;
              <input type="checkbox" id="ch_chk"name ="location[]" value="13"><label for id="ch_chk">전북</label>&nbsp;
              <input type="checkbox" id="ch_chk"name ="location[]" value="14"><label for id="ch_chk">제주</label>&nbsp;
              <input type="checkbox" id="ch_chk"name ="location[]" value="15"><label for id="ch_chk">충남</label>&nbsp;
              <input type="checkbox" id="ch_chk"name ="location[]" value="16"><label for id="ch_chk">충북</label>&nbsp;
             </td></tr>
           </table></center>

           <button id="search_btn" type="submit" value="검색" action="search_list_norm.php" onclick="location.href='search_list_norm.php'" style="background-color: black; color: whitesmoke; right:370px" >검색</button>
         </form>

         <center>
          <table id='wrapper2'>
            <tr height=60><th width= 200><center>부품 번호</center></th>&nbsp;
              <td width =600> 

                <form method="post" action="search_list_part.php">&nbsp;

                  <input id="search_view" type="text" name="partnum" action="search_list_part.php" placeholder="  부품 번호를 입력하세요">&nbsp;&emsp;&emsp;


                  <button id="search_btn2" type="submit" value="부품검색" height = "80px"action="search_list_part.php" onclick="location.href='search_list_part.php'"style="background-color: black; color: whitesmoke;">부품 검색</button>

                </td></tr>
              </table></center></div></form>


              <div>
                <h3 id="board_title"></h3>  
              </div> <!-- board_box -->
              <footer class="footerSc">
                <?php include "footer.php";?>
              </footer>
            </body>
            </html>


