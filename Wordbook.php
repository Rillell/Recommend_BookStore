<!DOCTYPE html>
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


.aside{float:left; width:57%; margin-right:15%; height:80%; background:white;}
.aside h2{
    margin-top: 20px;
    margin-bottom: 20px;
    text-align:center;
}

.words{
    height:85%;
    overflow:auto;
}
.words1{
    margin-left:10%;
    float:left;
}
.words2{
    margin-left:5%;
    float:left;
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

if(!$userid){
    echo "로그인을 해주세요.";
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
<h2>단어장</h2>
<div class="words">
<div class="words1">
<?php
$regist_day= $_GET['regist_day'];

$conn = mysqli_connect("localhost","cban","1234","sample");
if (mysqli_connect_errno()){
echo "연결실패<br>이유 : " . mysqli_connect_error();
}
$result = mysqli_query($conn,"SELECT word FROM myword WHERE id='$userid' AND regist_day='$regist_day'");

$n = 1;
while($row = mysqli_fetch_array($result)){
    $wordNum = count(explode(',',  $row['word']));
    $words = explode(',',  $row['word']);

    for($i=0; $i<$wordNum; $i++){
        $i1 = $i + 1;

        echo "$i1. ".$words[$i];
        echo "<br/><br/>";    
    }
    
    $n++;   
    }
    mysqli_close($conn);
?>
</div>
<div class="words2">
<?php
$regist_day= $_GET['regist_day'];

$conn = mysqli_connect("localhost","cban","1234","sample");
if (mysqli_connect_errno()){
echo "연결실패<br>이유 : " . mysqli_connect_error();
}
$result = mysqli_query($conn,"SELECT word FROM myword WHERE id='$userid' AND regist_day='$regist_day'");

$n = 1;
while($row = mysqli_fetch_array($result)){
    $wordNum = count(explode(',',  $row['word']));
    $words = explode(',',  $row['word']);

    for($i=0; $i<$wordNum; $i++){
        $result2 = mysqli_query($conn,"SELECT meaning FROM voca WHERE word='$words[$i]'");
        $j = 1;
        while($rows = mysqli_fetch_array($result2)){
        echo "의미 : ".$rows['meaning']; 
        echo "<br/><br/>";    
        $j++;
        }         
    }
    
    $n++;   
    }
    mysqli_close($conn);
?>
</div>
</div>


    </aside>
    <footer class="footer">
    <div id="foot">
    &nbsp;
      <samll>(주)Book Store   |   대표 : 3조   |   E-mail: seoil@naver.com  서울시 중랑구 면목동 서일대학교</small>
    </div>
    </footer>

<?php
}
?>

</body>
</html>