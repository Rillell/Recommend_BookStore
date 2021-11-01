<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
html, body{ margin:0; padding:0; height:100%; background-color:#f6f6f6;}
.header{width:100%; height:5%; background:#a5a5a5;}
#log{float:right; margin-top:15px; margin-right:20%;}
.header a{text-decoration:none; }

.nav{margin-left:15%; margin-right:15%; width:70%; height:15%;}
#logo{ float:left; padding-left:15%; width:100px; height:95%;}
.logoimg{width:100%; height:100%;}
.search {
    float:left;
    display :inline;
    padding-left:15px;
    padding-top:50px;
    width:60%;
    height:23%;

  }
  
  .search-container {
    width: 100%;
    height:100%;
    display :inline;
    margin: 0 auto;
    
  }
  
  .search input[type=text] {
    
    margin: 0 auto;
    width: 100%;
    height: 100%;
    padding: 0 20px;
    font-size: 1rem;
    border: 3px solid #2d2e30;
    outline: none;
  }
  
  .search-icon {
    position: relative;
    float: right;
    width: 65px;
    height: 65px;
    top: -51px;
    right: -45px;
  }
  *{
    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;
}
  .mainMenu{
    width: 234.5px;
    display: block;
    overflow: hidden;
}
.nav{
    overflow: hidden;
	border-bottom:0px solid #a5a5a5;
}
.btn{
    display: block;
    padding: 15px 20px;
    background-color: #a5a5a5;
    color: #fff;
    position: relative;

}
.subMenu{
    background: #ddd;
    overflow: hidden;
    transition: max-height 0.7s;
    max-height: 0;
}
.subMenu a{
    display: block;
    padding: 15px 20px;
    color: #222;
    font-size: 14px;
    border-bottom: 1px solid #eaeaea;
    position: relative;
    
}
.subMenu a:after{
    content: '';
    opacity: 0;
    transition: opacity 0.3s;

}
.subMenu a:hover{
    background: #fafafa;
   transition: all 0.3s;
    border-bottom: 1px solid #c8c8c8;
}
.subMenu a:last-child{
    border:none;
}
.nav:target .subMenu{
    max-height: 10em;
}

.section{margin-left:15%; width:13%; height:80%;  float:left;}

.aside{float:left; width:57%; margin-right:15%; height:80%; background-color:white;}
.EngVoca-card h2{
  margin-top:3%;
  text-align:center;
}
.EngVoca-card h5{
  margin-top:3%;
  margin-left:5%;
  margin-bottom:3%;
}
.tb1{
  padding-left:7%;
  float:left;
}
.tb2{
  padding-left:7%;
  float:left;
}
.tb3{
  padding-left:7%;
  float:left;
}
.tb4{
  padding-left:7%;
  float:left;
}
.tb5{
  padding-left:7%;

}
.sub{
  height: 48px;
  width:10%;
  position: relative;
  margin-top:3%;
  margin-left:40%;
  background-color: #575757;
  color: #fff;
}
.sub:hover{
  background-color: #403f3f;
}


.footer{width:100%; height:5%; clear:both; background:#dcdce5;}
#foot{float:left;  margin-left:15%;}
</style>

<body>
<?php
session_start();
if(isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
else $userid = "";
if(isset($_SESSION["name"])) $name = $_SESSION["name"];
else $name = "";

if(!$userid){ echo "로그인이 안되셨네요?";
?>
<?php
}else{
  $logged = $name."(".$userid.")님";
?>
<header class="header">
<div id="log">
        <?=$logged?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="./logout.php">로그아웃</a>
    </div>
    </header>
    <nav class="nav">
    <div id="logo">
    <a href="./BeforeMain.php"><img src="./로고1.png" alt="로고" class="logoimg"></a>
    </div>
    <div class="search">
        <form class="search-container" method="post" action = "search.php">
          <input type="text" name = "search1" placeholder="책 제목을 입력해 주세요">
          <a href="./search.php"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
        </form>
      </div>
    </nav>
    <section class="section">
    <div id="wrap">
        <ul class="mainMenu">
            <li class="nav" id="mypage">
                <a href="#mypage" class="btn">마이페이지</a>
                <div class="subMenu">
                    <a href="./Mypage.php">회원정보</a>
                    <a href="./Mypage.php">내 서재</a>
                    <a href="./Mypage.php">내 단어장</a>
                </div>
            </li>
            <li class="nav" id="test">
                <a href="#test" class="btn">단어테스트</a>
                <div class="subMenu">
                    <a href="EngTest.php">영어 테스트</a>
                    <a href="javascript:alert('준비중 입니다.');" onfocus="this.blur()">일본어 테스트</a>
                    <a href="javascript:alert('준비중 입니다.');" onfocus="this.blur()">중국어 테스트</a>
                </div>
            </li>
            <li class="nav" id="books">
                <a href="#books" class="btn">도서 목록</a>
                <div class="subMenu">
                    <a href="./EngList.php">영어 도서</a>
                    <a href="javascript:alert('준비중 입니다.');" onfocus="this.blur()">일본어 도서</a>
                </div>
            </li>
        </ul>
    </div>
    </section>

    <aside class="aside">  
    <div class="EngVoca-card">
    <h2>영어 단어 테스트</h5><br>
    <h5>- 의미를 명확히 알고있는 단어를 체크해 주세요.</h4>
      <form name = "EngVoca_form" method = "post" action = "Result_insert.php">
      <table class="tb1">
      <?php
      $conn = mysqli_connect("localhost","cban","1234","sample");
      if (mysqli_connect_errno()){
      echo "연결실패<br>이유 : " . mysqli_connect_error();
      }

      $result = mysqli_query($conn,"SELECT word FROM voca WHERE num BETWEEN 1 AND 52 and ran='C' order by rand() limit 10");
      $n = 1;
      while($row = mysqli_fetch_array($result)){        
      echo "<tr>";
      echo "<td><input type='checkbox' name='chkbox1[]' value=". $row['word']."></td>";
      echo "<td><input type='hidden' name='allChk[]' value=". $row['word']."></td>"; 
      echo "<td><h3>". $row['word']. "</h3></td>";   
      echo "</tr>";
      $n++;
      }
      mysqli_close($conn);
      ?>
      </table>
      <table class="tb2">
      <?php
      $conn = mysqli_connect("localhost","cban","1234","sample");
      if (mysqli_connect_errno()){
      echo "연결실패<br>이유 : " . mysqli_connect_error();
      }

      $result = mysqli_query($conn,"SELECT word FROM voca WHERE num BETWEEN 53 AND 104 and ran='C' order by rand() limit 10");
      $n = 1;
      while($row = mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td><input type='checkbox' name='chkbox1[]' value=". $row['word']."></td>";
      echo "<td><input type='hidden' name='allChk[]' value=". $row['word']."></td>"; 
      echo "<td><h3>". $row['word'] . "</h3></td>";     
      echo "</tr>";
      $n++;
      }
      mysqli_close($conn);
      ?>
      </table>
      <table class="tb3">
      <?php
      $conn = mysqli_connect("localhost","cban","1234","sample");
      if (mysqli_connect_errno()){
      echo "연결실패<br>이유 : " . mysqli_connect_error();
      }

      $result = mysqli_query($conn,"SELECT word FROM voca WHERE num BETWEEN 1 AND 52 and ran='B' order by rand() limit 10");
      $n = 1;
      while($row = mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td><input type='checkbox' name='chkbox2[]' value=". $row['word']."></td>";
      echo "<td><input type='hidden' name='allChk[]' value=". $row['word']."></td>"; 
      echo "<td><h3>". $row['word']. "</h3></td>";     
      echo "</tr>";
      $n++;
      }
      mysqli_close($conn);
      ?>
      </table>
      <table class="tb4">
      <?php
      $conn = mysqli_connect("localhost","cban","1234","sample");
      if (mysqli_connect_errno()){
      echo "연결실패<br>이유 : " . mysqli_connect_error();
      }

      $result = mysqli_query($conn,"SELECT word FROM voca WHERE num BETWEEN 1 AND 52 and ran='B' order by rand() limit 10");
      $n = 1;
      while($row = mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td><input type='checkbox' name='chkbox2[]' value=". $row['word']."></td>";
      echo "<td><input type='hidden' name='allChk[]' value=". $row['word']."></td>"; 
      echo "<td><h3>". $row['word']. "</h3></td>";     
      echo "</tr>";
      $n++;
      }
      mysqli_close($conn);
      ?>
      </table>
      <table class="tb5">
      <?php
      $conn = mysqli_connect("localhost","cban","1234","sample");
      if (mysqli_connect_errno()){
      echo "연결실패<br>이유 : " . mysqli_connect_error();
      }

      $result = mysqli_query($conn,"SELECT word FROM voca WHERE ran='A' order by rand() limit 10");
      $n = 1;
      while($row = mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td><input type='checkbox' name='chkbox3[]' value=". $row['word']."></td>";
      echo "<td><input type='hidden' name='allChk[]' value=". $row['word']."></td>"; 
      echo "<td><h3>". $row['word']. "</h3></td>";     
      echo "</tr>";
      $n++;
      }
      mysqli_close($conn);
      ?>
      </table>
      <input type="submit" value="제출" class="sub">
      </form>
    </div>
    </aside>


    <footer class="footer">
    <div id="foot">
    &nbsp;
      <samll>(주)Book Store   |   대표 : 3조   |   E-mail: seoil@naver.com
    <br>
    &nbsp;&nbsp;&nbsp;서울시 중랑구 면목동 서일대학교</small>
    </div>
    </footer>
<?php
}
?>
</body>
</html>
