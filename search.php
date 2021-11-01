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


.aside{float:left; width:57%; margin-right:15%; height:1920px; background-color:white;}
.cover{
  width:100px;
  height:150px;
}
#List_box{overflow:auto; width:100%; height:100%;}
#List_box li { padding: 10px 0; border-bottom: solid 1px #dddddd; }
#List_box span { display: inline-block; text-align: center;}
#List_box .col1 { width: 80px; text-align: center; }
#List_box .col2 { width: 200px; text-align: center; vertical-align:center;}
#List_box .col3 { width: 200px; text-align: center; vertical-align:center;}
#List_box .col4 { width: 150px; text-align: center; vertical-align:center;}
#List_box .col5 { width: 180px; text-align: center; vertical-align:center;}
#List_box .col6 { width: 100px; text-align: center; vertical-align:center;}
#page_num {	text-align: center;	margin: 30px 0 }
#page_num li { display: inline; }
.Mybook{
  color: #fff;
  background-color: #575757;
}
.now{
  color: #fff;
  background-color: #575757;
}
#text{
    margin-top:10%;
    text-align:center;
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
?>
    <header class="header">
    <div id="log">
        <a href="./login.php">로그인</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="./Sign.php">회원가입</a>
    </div>
    </header>
    <nav class="nav">
    <div id="logo">
    <a href="./BeforeMain.php"><img src="./로고1.png" alt="로고" class="logoimg"></a>
    </div>
    <div class="search">
        <form class="search-container" method="post" action = "search.php">
          <input type="text" name = "search1" placeholder="책 제목을 입력해 주세요">
          <a href="search.php"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
        </form>
    </div>
    </nav>
    <section class="section">
    <div id="wrap">
        <ui class="mainMenu">
            <li class="nav" id="mypage">
                <a href="#mypage" class="btn">마이페이지</a>
                <div class="subMenu">
                    <a href="javascript:alert('로그인을 먼저 해주세요!');" onfocus="this.blur()">회원정보</a>
                    <a href="javascript:alert('로그인을 먼저 해주세요!');" onfocus="this.blur()">내 서재</a>
                    <a href="javascript:alert('로그인을 먼저 해주세요!');" onfocus="this.blur()">내 단어장</a>
                </div>
            </li>
            <li class="nav" id="test">
                <a href="#test" class="btn">단어테스트</a>
                <div class="subMenu">
                    <a href="javascript:alert('로그인을 먼저 해주세요!');" onfocus="this.blur()">영어 테스트</a>
                    <a href="javascript:alert('로그인을 먼저 해주세요!');" onfocus="this.blur()">일본어 테스트</a>
                    <a href="javascript:alert('로그인을 먼저 해주세요!');" onfocus="this.blur()">중국어 테스트</a>
                </div>
            </li>
            <li class="nav" id="books">
                <a href="#books" class="btn">도서 목록</a>
                <div class="subMenu">
                    <a href="EngList.php">영어 도서</a>
                    <a href="">일본어 도서</a>
                </div>
            </li>
        </ui>
    </div>
    </section>

    <aside class="aside">  
    <div id="List_box">
<h3>검색 > 도서</h3>
<ul id = "E_list">
<li>
    <span class="col1">번호</span>
    <span class="col2"></span>
    <span class="col3">제목</span>
    <span class="col4">저자</span>
    <span class="col5"></span>
    <span class="col6"></span>
</li>

<?php
if(isset($_GET["page"])){
    $page = $_GET["page"];
}
else{ 
    $page = 1;
}
if(isset($_POST["search1"])){
    $search = $_POST["search1"];
}
else{ 
    $search = NULL;
}


if($search != NULL){
$conn = mysqli_connect("localhost", "cban", "1234", "sample");
$sql = "SELECT num, img, title, author, pag, ranking FROM book_list 
where title like '%$search%' or author like '%$search%' or ranking like '%$search%'order by num asc";

$result = mysqli_query($conn, $sql);
$total_record = mysqli_num_rows($result); //전체글수
if($total_record != 0){

$scale = 10;

//전체페이지수 ($total_page)계산
if($total_record % $scale == 0)
    $total_page = floor($total_record/$scale);
else   
    $total_page = floor($total_record/$scale) + 1;

//표시할 페이지($page)에 따라 $start계산
$start = ($page - 1) * $scale;
$number = $total_record - $start;

for($i=$start; $i<$start+$scale && $i<$total_record; $i++){
    mysqli_data_seek($result, $i);
    //가져올 레코드로 위치(포인터)이동
    $row = mysqli_fetch_array($result);
    //하나의 레코드 가져오기
    $num = $row["num"];
    $img = $row["img"];
    $title = $row["title"];
    $author = $row["author"];
    $pag = $row["pag"];
    $ranking = $row["ranking"];
?>

<li>
<span class="col1"><?=$num?></span>
<span class="col2"><?echo "<img class='cover' src=" .$row['img']. " alt='표지'>"?></span>
<span class="col3"><b><?=$title?></b></span>
<span class="col4"><?=$author?></span>
<span class="col5">페이지: <?=$pag?>p<br/><br/>난이도: <?=$ranking?></span>
<span class="col6"><a href="javascript:alert('로그인을 먼저 해주세요!');" onfocus="this.blur()"><input type="button" class="now" value="바로읽기"></a><br/><br/>
                    <a href="javascript:alert('로그인을 먼저 해주세요!');" onfocus="this.blur()"><input type="button" class="Mybook" value="내 서재"></a></span>
</li>

<?php
$num++;
}
mysqli_close($conn);

?>
</ul>

<ul id = "page_num">
<?php
if($total_page >= 2 && $page >= 2){
    $new_page = $page-1;
    echo "<li><a href='./EngList.php?page=$new_page'>
                ◀ 이전</a> </li>";
}
else   
    echo "<li>&nbsp;<li>";

//하단에 페이지 링크 번호 출력
for($i = 1; $i <= $total_page; $i++){
    if($page == $i) //현재 페이지 번호를 링크하지 않음
    {
        echo "<li><b> $i </b></li>";
    }else{
        echo "<li><a href='EngList.php?page=$i'> $i </a></li>";
    }   
}
if($total_page >= 2 && $page != $total_page){
    $new_page = $page + 1;
    echo "<li><a href='EngList.php?page=$new_page'> 다음 ▶</a></li>";
}else
    echo "<li>&nbsp;</li>";
}else{
    echo"<b><div id='text'>검색결과가 없습니다.</div></b>";
}
}else{
    echo"<b><div id='text'>검색결과가 없습니다.</div></b>";
}
?>

</div>

    </aside>
    <footer class="footer">
    <div id="foot">
    &nbsp;
      <samll>(주)Book Store   |   대표 : 3조   |   E-mail: seoil@naver.com  서울시 중랑구 면목동 서일대학교</small>
    </div>
    </footer>
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
        <form class="search-container" method="post" action = "#">
          <input type="text" name = "search1" placeholder="책 제목을 입력해 주세요">
          <a href="#"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
        </form>
    </div>
    </nav>
    <section class="section">
    <div id="wrap">
        <ui class="mainMenu">
            <li class="nav" id="mypage">
                <a href="#mypage" class="btn">마이페이지</a>
                <div class="subMenu">
                    <a href="./Mypage.php">회원정보</a>
                    <a href="">내 서재</a>
                    <a href="">내 단어장</a>
                </div>
            </li>
            <li class="nav" id="test">
                <a href="#test" class="btn">단어테스트</a>
                <div class="subMenu">
                    <a href="EngTest.php">영어 테스트</a>
                    <a href="">일본어 테스트</a>
                    <a href="">중국어 테스트</a>
                </div>
            </li>
            <li class="nav" id="books">
                <a href="#books" class="btn">도서 목록</a>
                <div class="subMenu">
                    <a href="EngList.php">영어 도서</a>
                    <a href="">일본어 도서</a>
                </div>
            </li>
        </ui>
    </div>
    </section>

    <aside class="aside">  
    <div id="List_box">
<h3>검색 > 도서</h3>
<ul id = "E_list">
<li>
    <span class="col1">번호</span>
    <span class="col2"></span>
    <span class="col3">제목</span>
    <span class="col4">저자</span>
    <span class="col5"></span>
    <span class="col6"></span>
</li>

<?php
if(isset($_GET["page"])){
    $page = $_GET["page"];
}
else{ 
    $page = 1;
}
if(isset($_POST["search1"])){
    $search = $_POST["search1"];
}
else{ 
    $search = NULL;
}


if($search != NULL){
$conn = mysqli_connect("localhost", "cban", "1234", "sample");
$sql = "SELECT num, img, title, author, pag, ranking, PDF FROM book_list 
where title like '%$search%' or author like '%$search%' or ranking like '%$search%'order by num asc";

$result = mysqli_query($conn, $sql);
$total_record = mysqli_num_rows($result); //전체글수
if($total_record != 0){

$scale = 10;

//전체페이지수 ($total_page)계산
if($total_record % $scale == 0)
    $total_page = floor($total_record/$scale);
else   
    $total_page = floor($total_record/$scale) + 1;

//표시할 페이지($page)에 따라 $start계산
$start = ($page - 1) * $scale;
$number = $total_record - $start;

for($i=$start; $i<$start+$scale && $i<$total_record; $i++){
    mysqli_data_seek($result, $i);
    //가져올 레코드로 위치(포인터)이동
    $row = mysqli_fetch_array($result);
    //하나의 레코드 가져오기
    $num = $row["num"];
    $img = $row["img"];
    $title = $row["title"];
    $author = $row["author"];
    $pag = $row["pag"];
    $ranking = $row["ranking"];
    $PDF = $row["PDF"]; //
    $str_PDF = str_replace('./book_pdf/','',$PDF);
?>

<li>
<span class="col1"><?=$num?></span>
<span class="col2"><?echo "<img class='cover' src=" .$row['img']. " alt='표지'>"?></span>
<span class="col3"><b><?=$title?></b></span>
<span class="col4"><?=$author?></span>
<span class="col5">페이지: <?=$pag?>p<br/><br/>난이도: <?=$ranking?></span>
<?php echo "<span class='col6'><button class='now' onclick=\"location.href='viewer.php?PDF=$str_PDF'\">바로읽기</button><br/><br/>"?>
<?php echo "<button class='Mybook' onclick=\"location.href='book_insert.php?img=$img&title=$title&author=$author&PDF=$str_PDF'\">내서재</button></td>"?>
</li>

<?php
$num++;
}
mysqli_close($conn);

?>
</ul>

<ul id = "page_num">
<?php
if($total_page >= 2 && $page >= 2){
    $new_page = $page-1;
    echo "<li><a href='./EngList.php?page=$new_page'>
                ◀ 이전</a> </li>";
}
else   
    echo "<li>&nbsp;<li>";

//하단에 페이지 링크 번호 출력
for($i = 1; $i <= $total_page; $i++){
    if($page == $i) //현재 페이지 번호를 링크하지 않음
    {
        echo "<li><b> $i </b></li>";
    }else{
        echo "<li><a href='EngList.php?page=$i'> $i </a></li>";
    }   
}
if($total_page >= 2 && $page != $total_page){
    $new_page = $page + 1;
    echo "<li><a href='EngList.php?page=$new_page'> 다음 ▶</a></li>";
}else
    echo "<li>&nbsp;</li>";
}else{
    echo"<b><div id='text'>검색결과가 없습니다.</div></b>";
}
}else{
    echo"<b><div id='text'>검색결과가 없습니다.</div></b>";
}
?>

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