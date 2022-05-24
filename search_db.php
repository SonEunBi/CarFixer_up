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

   border: 1px solid black;
   border-collapse: collapse;
 }
</style>

<body> 
  <header>
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
          <form action="price_list.php" name="searchform" method="POST">
            <center>
              <table style="border: 2px solid #444;" id="wrapper">
                <tr height=80 style="border:1px solid #444;"><th width= 200> 
                부품명</th>
                <td width =600> &nbsp;
                  <label><input type="checkbox" id="checkAll" name ="partname"><b>전체</b></label>&emsp;
                  <label><input type="checkbox" name ="partname[]" class="chk" value="범퍼" checked>범퍼</label>&emsp;
                  <label><input type="checkbox" name ="partname[]" class="chk" value="보넷">보넷</label>&emsp;
                  <label><input type="checkbox" class="chk"name ="partname[]" value="트렁크">트렁크</label>&emsp;
                  <label><input type="checkbox" class="chk"name ="partname[]" value="루프">루프</label>&emsp; 
                  <label><input type="checkbox" class="chk"name ="partname[]" value="도어">도어</label>&emsp; 
                  <label><input type="checkbox" class="chk"name ="partname[]" value="스테프">스테프</label>&emsp;
                  <label><input type="checkbox" class="chk"name ="partname[]" value="휀더">휀더</label>&emsp;
                  <label><input type="checkbox" class="chk"name ="partname[]" value="기타">기타</label>&emsp;
                </td></tr>


                <tr height=80 ><th width= 200>차종</th></div>&nbsp;
                  <td width =600> &nbsp;
                    <label><input type="checkbox" name ="cartype[]" value="세단">세단</label>&emsp;
                    <label><input type="checkbox" name ="cartype[]" value="쿠페">쿠페</label>&emsp;
                    <label><input type="checkbox" name ="cartype[]" value="왜건">왜건</label>&emsp;
                    <label><input type="checkbox" name ="cartype[]" value="SUV" checked>SUV</label>&emsp; 
                    <label><input type="checkbox" name ="cartype[]" value="컨버터블">컨버터블</label><br><br>  &nbsp;
                    <label><input type="checkbox" name ="cartype[]" value="해치백">해치백</label>&emsp; 
                    <label><input type="checkbox" name ="cartype[]" value="리무진">리무진</label>&emsp; 
                    <label><input type="checkbox" name ="cartype[]" value="밴">밴</label>&emsp; 
                    <label><input type="checkbox" name ="cartype[]" value="픽업트럭">픽업트럭</label>&emsp; 
                  </td></tr>


                  <tr height=80 ><th width= 200>카센터 위치</th></div>
                    <td width =600> &nbsp;
                     <label><input type="checkbox" name ="location[]" value="서울" checked>서울</label>&nbsp;
                     <label><input type="checkbox" name ="location[]" value="부산">부산</label>&nbsp;
                     <label><input type="checkbox" name ="location[]" value="대구">대구</label>&nbsp;
                     <label><input type="checkbox" name ="location[]" value="인천">인천</label>&nbsp;
                     <label><input type="checkbox" name ="location[]" value="광주">광주</label>&nbsp;
                     <label><input type="checkbox" name ="location[]" value="대전">대전</label>&nbsp;
                     <label><input type="checkbox" name ="location[]" value="울산">울산</label>&nbsp;
                     <label><input type="checkbox" name ="location[]" value="강원">강원</label>&nbsp;<br><br>&nbsp;
                     <label><input type="checkbox" name ="location[]" value="경기">경기</label>&nbsp;
                     <label><input type="checkbox" name ="location[]" value="경남">경남</label>&nbsp;
                     <label><input type="checkbox" name ="location[]" value="경북">경북</label>&nbsp;
                     <label><input type="checkbox" name ="location[]" value="전남">전남</label>&nbsp;
                     <label><input type="checkbox" name ="location[]" value="전북">전북</label>&nbsp;
                     <label><input type="checkbox" name ="location[]" value="제주">제주</label>&nbsp;
                     <label><input type="checkbox" name ="location[]" value="충남">충남</label>&nbsp;
                     <label><input type="checkbox" name ="location[]" value="충북">충북</label>&nbsp;
                   </td></tr>
                 </table></center>

                 <button id="search_btn" type="submit" value="검색" action="price_list.php" onclick="location.href='price_list.php'" style="background-color: black; color: whitesmoke; right:370px" >검색</button>
               </form>

               <center>
                <table id='wrapper2'>
                  <tr height=60><th width= 200>부품 번호</th>&nbsp;
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


