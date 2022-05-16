<!DOCTYPE html>
<html>
<head> 
  <meta charset="utf-8">
  <title>비교 견적 사이트</title>
  <link rel="stylesheet" type="text/css" href="./css/common.css">
  <link rel="stylesheet" type="text/css" href="./css/board.css">
  <link rel="stylesheet" type="text/css" href="./css/search.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript">

  //낱개 아이템 - 전체선택 버튼 클릭시 체크박스 전체 선택
  $(document).ready(function() {
    $("#checkAll").click(function(){
      if($("#checkAll").is(":checked"))
        $("input[class=chk]").prop("checked", true);
      else 
        $("input[class=chk]").prop("checked", false);
    });


    // 전체 선택 중 한개의 체크박스 선택 해제 시 전체선택 체크박스 해제
    $("input[class=chk]").click(function(){
      var total = $("input[class=chk]").length;
      var checked = $("input[class='chk']:checked").length;
      if(checked != total) $("#checkAll").prop("checked", false);
      else 
        $("#checkAll").prop("checked", true);
    });
  });

      if(!isset($_SESSION)) { 
      session_start(); 
    } 
    //보이기, 안 보이기
    function find_normal()  {
      row1 = document.getElementById('wrapper2');
      row1.style.display = 'none';

      row1 = document.getElementById('wrapper');
      row1.style.display = '';

    }

    function find_num()  {
      row = document.getElementById('wrapper');
      row.style.display = 'none';

      row = document.getElementById('wrapper2');
      row.style.display = '';
    }
</script>
</head>
<style>
  table, th, td{
    border: 1px solid black;
    border-collapse: collapse;
  }
</style>

<body> 

  <header>
    <?php include "header.php";?>
  </header>  
  <br><br><br>
<!--   <div id="board_box"> 
    <h1 id="board_title"></h1>
    <h3>자료 검색</h3>
  </div> -->


  <!-- 검색창 -->
  <!-- <div class="search" style="height: 100px; margin-top: 17px; margin: auto;"> -->
<!--       <tr height=45><th width= 200>검색 방식</th>
        <td width =600> 
         
          
        </td></tr></form> -->
        <br><br> 

        <div id="btn_group" style="margin-left:40%"><br><br>
          <button id="search_case1" onclick='find_normal()'>일반검색</button>
          <button id="search_case2" onclick='find_num()'>부품번호로 검색</button>
        </div>
        <br><br>
        <div id="checkbox_form">
          <form action="" name="writeform" method="POST">
            <center>
              <table style="border: 2px solid #444;" id="wrapper">
                <tr height=80 style="border:1px solid #444;"><th width= 200> 
                부품명</th>
                <td width =600> &nbsp;
                  <label><input type="checkbox" id="checkAll" name ="name"><b>전체</b></label>&emsp;
                  <label><input type="checkbox" name ="name" class="chk" value="범퍼">범퍼</label>&emsp;
                  <label><input type="checkbox" name ="name" class="chk" value="보넷">보넷</label>&emsp;
                  <label><input type="checkbox" class="chk"name ="name" value="트렁크">트렁크</label>&emsp;
                  <label><input type="checkbox" class="chk"name ="name" value="루프">루프</label>&emsp; 
                  <label><input type="checkbox" class="chk"name ="name" value="도어">도어</label>&emsp; 
                  <label><input type="checkbox" class="chk"name ="name" value="스테프">스테프</label>&emsp;
                  <label><input type="checkbox" class="chk"name ="name" value="휀더">휀더</label>&emsp;
                  <label><input type="checkbox" class="chk"name ="name" value="기타">기타</label>&emsp;
                </td></tr>


                <tr height=80 ><th width= 200>차종</th></div>&nbsp;
                  <td width =600> &nbsp;
                    <label><input type="checkbox" name ="cartype" value="세단">세단</label>&emsp;
                    <label><input type="checkbox" name ="cartype" value="쿠페">쿠페</label>&emsp;
                    <label><input type="checkbox" name ="cartype" value="왜건">왜건</label>&emsp;
                    <label><input type="checkbox" name ="cartype" value="SUV">SUV</label>&emsp; 
                    <label><input type="checkbox" name ="cartype" value="컨버터블">컨버터블</label><br><br>  &nbsp;
                    <label><input type="checkbox" name ="cartype" value="해치백">해치백</label>&emsp; 
                    <label><input type="checkbox" name ="cartype" value="리무진">리무진</label>&emsp; 
                    <label><input type="checkbox" name ="cartype" value="밴">밴</label>&emsp; 
                    <label><input type="checkbox" name ="cartype" value="픽업트럭">픽업트럭</label>&emsp; 
                  </td></tr>


                  <tr height=80 ><th width= 200>카센터 위치</th></div>
                    <td width =600> &nbsp;
                     <label><input type="checkbox" name ="location" value="서울">서울</label>&nbsp;
                     <label><input type="checkbox" name ="location" value="부산">부산</label>&nbsp;
                     <label><input type="checkbox" name ="location" value="대구">대구</label>&nbsp;
                     <label><input type="checkbox" name ="location" value="인천">인천</label>&nbsp;
                     <label><input type="checkbox" name ="location">광주</label>&nbsp;
                     <label><input type="checkbox" name ="location">대전</label>&nbsp;
                     <label><input type="checkbox" name ="location">울산</label>&nbsp;
                     <label><input type="checkbox" name ="location">강원</label>&nbsp;<br><br>&nbsp;
                     <label><input type="checkbox" name ="location">경기</label>&nbsp;
                     <label><input type="checkbox" name ="location">경남</label>&nbsp;
                     <label><input type="checkbox" name ="location">경북</label>&nbsp;
                     <label><input type="checkbox" name ="location">전남</label>&nbsp;
                     <label><input type="checkbox" name ="location">전북</label>&nbsp;
                     <label><input type="checkbox" name ="location">제주</label>&nbsp;
                     <label><input type="checkbox" name ="location">충남</label>&nbsp;
                     <label><input type="checkbox" name ="location">충북</label>&nbsp;
                   </td></tr>


                   <tr height=80><th width= 200>가격</th>
                    <td width =600> &nbsp;
                      <input type="text" placeholder="가격" style="height: 40px;">
                      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;

                      <input id="search_btn" type="button" value="검색" action="price_list.php" onclick="location.href='price_list.php'" style="background-color: black; color: whitesmoke;">
                    </td></tr>
                  </table>
                </form>
              </td>
            </tr></table>

            <center>
              <table id='wrapper2'>
                <tr height=60><th width= 200>부품 번호</th>&nbsp;
                  <td width =600> 
                    <div method="post" action="price_list.php">&nbsp;
                      <input id="search_view" type="text" name="num" action="price_list.php" placeholder="  부품 번호를 입력하세요">&nbsp;&emsp;&emsp;&emsp;
                      <input id="search_btn" type="button" value="검색" action="price_list.php" onclick="location.href='price_list.php'"style="background-color: black; color: whitesmoke;">
                    </td></tr>
                  </table></center></div>



                  <div>
                    <h3 id="board_title"></h3>  
                  </div> <!-- board_box -->
                  <footer class="footerSc">
                    <?php include "footer.php";?>
                  </footer>
                </body>
                </html>


