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
    if(!isset($_SESSION)) { 
      session_start(); 
    } 
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

    $("input:checkbox[name=chk]:checked").each(function(){
      var checkVal = $(this).val();
      console.log(checkVal);
    });


  // 낱개 아이템 - 전체선택 버튼 클릭시 체크박스 전체 선택
  //   $(document).ready(function() {
  //     $("#checkAll").click(function(){
  //       if($("#checkAll").is(":checked"))
  //         $("input[name=chk]").prop("checked", true);
  //       else 
  //         $("input[name=chk]").prop("checked", false);
  //     });


  //   // 전체 선택 중 한개의 체크박스 선택 해제 시 전체선택 체크박스 해제
  //   $("input[name=chk]").click(function(){
      // var total = $("input[name=chk]").length;
  //     var checked = $("input[name='chk']:checked").length;
  //     if(checked != total) $("#checkAll").prop("checked", false);
  //     else 
  //       $("#checkAll").prop("checked", true);
  //   });
  // });
</script>
</head>
<style>
  .search_btn{
    box-sizing: border-box;
    appearance: none;
    background-color: transparent;
    border: 2px solid $red;
    border-radius: 0.6em;
    color: $red;
    cursor: pointer;
    display: flex;
    align-self: center;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1;
    margin: 20px;
    padding: 1.2em 2.8em;
    text-decoration: none;
    text-align: center;
    text-transform: uppercase;
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;

  transition: box-shadow 300ms ease-in-out, color 300ms ease-in-out;
  /*&:hover {*/
    box-shadow: 0 0 40px 40px $red inset;
  /*}*/
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
                <tr height=60 ><th width= 200> 
                부품명</th>
                <td width =600> 
                  <label><input type="checkbox" name ="name" class="chk" value="Bumper">범퍼</label>&nbsp;
                  <label><input type="checkbox" name ="name" class="chk" value="FrontDoor">앞문</label>&nbsp;
                  <label><input type="checkbox" class="chk"name ="name" value="RearDoor">뒷문</label>&nbsp;
                  <label><input type="checkbox" class="chk"name ="name" value="trunk">트렁크도어</label>&nbsp;
                  <label><input type="checkbox" class="chk"name ="name" value="tire">타이어</label>&nbsp;   
                </td></tr>

                <tr height=60 ><th width= 200>위치</th></div>
                  <td width =600> 
                    <label><input type="checkbox" name="chk"name ="location">전면</label>&nbsp;
                    <label><input type="checkbox" name="chk"name ="location">후면</label>&nbsp;
                    <label><input type="checkbox" name="chk"name ="location">좌측면</label>&nbsp;
                    <label><input type="checkbox" name="chk"name ="location">우측면</label>&nbsp; 
                  </td></tr>


                  <tr height=60 ><th width= 200>제작사</th></div>
                    <td width =600> 
                     <!--  <label><input type="checkbox" id="checkAll"><b> 전체</b>&nbsp;</label> -->
                     <label><input type="checkbox" name="chk" name ="company">현대</label>&nbsp;
                     <label><input type="checkbox" name="chk" name ="company">기아</label>&nbsp;
                     <label><input type="checkbox" name="chk" name ="company">르노삼성</label>&nbsp;
                     <label><input type="checkbox" name="chk" name ="company">GM</label>&nbsp;
                     <label><input type="checkbox" name="chk" name ="company">쌍용</label>&nbsp;
                   </td></tr>


                   <tr height=60><th width= 200>지역</th>
                    <td width =600> 
                     <label><input type="checkbox" name="chk" name ="region">서울</label>&nbsp;
                     <label><input type="checkbox" name="chk" name ="region">경기도</label>&nbsp;
                     <label><input type="checkbox" name="chk" name ="region">충청도</label>&nbsp;
                     <label><input type="checkbox" name="chk" name ="region">전라도</label>&nbsp;
                     <label><input type="checkbox" name="chk" name ="region">강원도</label>&nbsp;
                     <label><input type="checkbox" name="chk" name ="region">경상도</label>&nbsp;
                   </td></tr>

                   <tr height=60><th width= 200>가격</th>
                    <td width =600> 
                      <input type="checkbox" id="chk">
                      <label for="part_car">현대</label>&nbsp;
                      <input type="checkbox" id="chk">
                      <label for="part_car">기아</label>&nbsp;
                      <input type="checkbox" id="chk">
                      <label for="part_car">르노삼성</label>&nbsp;
                      <input type="checkbox" id="chk">
                      <label for="part_car">GM</label>&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input id="search_btn" type="button" value="검색" action="price_list.php" onclick="location.href='price_list.php'">
                    </td></tr>
                  </table>
                </form>
              </td>
            </tr></table>

            <center>
              <table id='wrapper2'>
                <tr height=60><th width= 200>부품 번호</th>
                  <td width =600> 
                    <div method="post" action="price_list.php">
                      <input id="search_view" type="text" name="name" action="price_list.php" placeholder="  부품 번호를 입력하세요">&nbsp;
                      <input id="search_btn" type="button" value="검색" action="price_list.php" onclick="location.href='price_list.php'">
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


