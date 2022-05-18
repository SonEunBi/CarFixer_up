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


    function chkprint(){
      var values = document.getElementByName("location");
      for(var i =0; i<values.length; i++){
        if(values[i].checked){
          // alert(values[i].value);
        }
      }
    }


//     function itemAvg(frm)
// {
//    var avg = 0;
//    var count = frm.chkbox.length;
//    for(var i=0; i < count; i++ ){
//        if( frm.chkbox[i].checked == true ){
//       sum += parseInt(frm.chkbox[i].value);
//       avg /=
//        }
//    }
//    frm.total_sum.value = sum;
// }
</script>
</head>
<style>
  table, th, td{
    border: 1px solid black;
    border-collapse: collapse;
  }
</style>

<body> 
<!-- <%
  String[] value = request.getParameterValues("")
-->
<header>
  <?php include "header.php";?>
</header>  
<br><br><br>
<div id="board_box"> 
  <h1 id="board_title"></h1>
  <h3>자료 검색</h3>
</div>


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

                 <button id="search_btn1" type="submit" value="검색" action="search_db.php" onclick="location.href='search_db.php'" style="background-color: black; color: whitesmoke; right:370px" >내부검색</button>
</form>

                 <center>
                  <table id='wrapper2'>
                    <tr height=60><th width= 200>부품 번호</th>&nbsp;
                      <td width =600> 

                        <form method="post" action="book_list.php">&nbsp;

                          <input id="search_view" type="text" name="partnum" action="book_list.php" placeholder="  부품 번호를 입력하세요">&nbsp;&emsp;&emsp;&emsp;


                          <button id="search_btn2" type="submit" value="부품검색" action="book_list.php" onclick="location.href='book_list.php'"style="background-color: black; color: whitesmoke;">부품검색</button>

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


