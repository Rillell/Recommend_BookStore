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
.rst{
  margin-top:15%;
  text-align:center;
  font-size:44px;
}
.recommend{
  border:2px solid black;
  margin-top:15%;
  width : 90%;
  margin-left:5%;
  margin-right:5%;


  }
.cover{
  display:center;
  width:100px;
  height:150px;
  
}
.box{
  margin-top:5px;
  width:230px;
  float:left;
  display:inline;
}
.Mybook{
  color: #fff;
  background-color: #575757;
}
.now{
  color: #fff;
  background-color: #575757;
}
.Mybook:hover, .now:hover{
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

if(isset($_POST['chkbox1'])){
$word1= $_POST['chkbox1'];
}else{ $word1 = "";}
if(isset($_POST['chkbox2'])){
    $word2= $_POST['chkbox2'];
}else{ $word2 = "";}
if(isset($_POST['chkbox3'])){
    $word3= $_POST['chkbox3'];
}else{ $word3 = "";}



// $word1 = (isset($_POST['chkbox1']) && $_POST['chkbox1'])?$_POST['chkbox1']:NULL;
// $word2 = (isset($_POST['chkbox2']) && $_POST['chkbox2'])?$_POST['chkbox2']:NULL;
// $word3 = (isset($_POST['chkbox3']) && $_POST['chkbox3'])?$_POST['chkbox3']:NULL;

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

    <?php
    $conn = mysqli_connect("localhost","cban","1234","sample");
    if (mysqli_connect_errno()){
    echo "연결실패<br>이유 : " . mysqli_connect_error();
    }
    $result = mysqli_query($conn,"SELECT ranking FROM members where id='$userid'");
    ?>

    <div class="rst">
    Your Score is
    <?php
    $n = 1;
    while($row = mysqli_fetch_array($result)){
        echo "&#39;".$row['ranking'];
    }
    ?>&#39;
    </div>
    <?php
    $conn->close();
    ?>

    <div class="recommend">
    <h1>&nbsp;HOW ABOUT THIS?</h1>
    <?php
    $conn = mysqli_connect("localhost","cban","1234","sample");
    if (mysqli_connect_errno()){
    echo "연결실패<br>이유 : " . mysqli_connect_error();
    }
    $result = mysqli_query($conn,"SELECT title, img, author FROM book_list where ranking = (SELECT ranking FROM members where id = '$userid') order by rand() limit 4")or die(mysqli_error($conn));
    
    $n = 1;
      while($row = mysqli_fetch_array($result)){
        
      echo "<div class='box'><ul> <img class='cover' src=" .$row['img']. " alt='표지'>";
      echo "<li><b>- ".$row['title']. "</b></li>";  
      echo "<li><b>- ".$row['author']."</b></li>";  
      echo "<button class='Mybook' onclick=\"location.href='book_insert.php?img={$row['img']}&title={$row['title']}&author={$row['author']}'\">내서재</button>
      <button class='now' onclick=\"location.href='#?title={$row['title']}'\">바로읽기</button></ul></div>";
      $n++;
      }
      mysqli_close($conn);
      ?>
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