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


.aside{float:left; width:57%; margin-right:15%; height:80%; }
#slider{float:left; width:100%; margin-right:15%; height:40%; border:1px solid #babab9;}
.mySlides{ width:100%; margin-right:15%; height:100%;}

.best{
  border:2px solid black;
  margin-top:30%;
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
        <a href="./login.php">?????????</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="./Sign.php">????????????</a>
    </div>
    </header>
    <nav class="nav">
    <div id="logo">
    <a href="./BeforeMain.php"><img src="./??????1.png" alt="??????" class="logoimg"></a>
    </div>
    <div class="search">
        <form class="search-container" method="post" action = "search.php">
          <input type="text" name = "search1" placeholder="??? ????????? ????????? ?????????">
          <a href="./search.php"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
        </form>
      </div>
    </nav>
    <section class="section">
    <div id="wrap">
        <ui class="mainMenu">
            <li class="nav" id="mypage">
                <a href="#mypage" class="btn">???????????????</a>
                <div class="subMenu">
                    <a href="javascript:alert('???????????? ?????? ????????????!');" onfocus="this.blur()">????????????</a>
                    <a href="javascript:alert('???????????? ?????? ????????????!');" onfocus="this.blur()">??? ??????</a>
                    <a href="javascript:alert('???????????? ?????? ????????????!');" onfocus="this.blur()">??? ?????????</a>
                </div>
            </li>
            <li class="nav" id="test">
                <a href="#test" class="btn">???????????????</a>
                <div class="subMenu">
                    <a href="javascript:alert('???????????? ?????? ????????????!');" onfocus="this.blur()">?????? ?????????</a>
                    <a href="javascript:alert('???????????? ?????? ????????????!');" onfocus="this.blur()">????????? ?????????</a>
                    <a href="javascript:alert('???????????? ?????? ????????????!');" onfocus="this.blur()">????????? ?????????</a>
                </div>
            </li>
            <li class="nav" id="books">
                <a href="#books" class="btn">?????? ??????</a>
                <div class="subMenu">
                    <a href="EngList.php">?????? ??????</a>
                    <a href="javascript:alert('????????? ?????????.');" onfocus="this.blur()">????????? ??????</a>
                </div>
            </li>
        </ui>
    </div>
    </section>

    <aside class="aside">  
    <div id="slider">
        <img class="mySlides" src="./????????????1.png" style="width:100%">
        <img class="mySlides" src="./????????????2.png" style="width:100%">
        <a href="javascript:alert('???????????? ?????? ????????????!');" onfocus="this.blur()"><img class="mySlides" src="./????????????3.png" style="width:100%"></a>
    </div>
    <div class="best">
    <h1>&nbsp;TODAY PICK!!</h1>
    <?php
    $conn = mysqli_connect("localhost","cban","1234","sample");
    if (mysqli_connect_errno()){
    echo "????????????<br>?????? : " . mysqli_connect_error();
    }
    $result = mysqli_query($conn,"SELECT title, img, author FROM book_list order by rand() limit 4")or die(mysqli_error($conn));
    
    $n = 1;
      while($row = mysqli_fetch_array($result)){
        
      echo "<div class='box'><ul> <img class='cover' src=" .$row['img']. " alt='??????'>";
      echo "<li><b>- ".$row['title']. "</b></li>";  
      echo "<li>- ".$row['author']."</li>";  
      echo "</ul></div>";
      $n++;
      }
      mysqli_close($conn);
      ?>
      </div>
    </aside>
    <footer class="footer">
    <div id="foot">
    &nbsp;
      <samll>(???)Book Store   |   ?????? : 3???   |   E-mail: seoil@naver.com  ????????? ????????? ????????? ???????????????</small>
    </div>
    </footer>
<?php
}else{
  $logged = $name."(".$userid.")???";
?>
<header class="header">
<div id="log">
        <?=$logged?></a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="./logout.php">????????????</a>
    </div>
    </header>
    <nav class="nav">
    <div id="logo">
    <a href="./BeforeMain.php"><img src="./??????1.png" alt="??????" class="logoimg"></a>
    </div>
    <div class="search">
        <form class="search-container" method="post" action = "search.php">
          <input type="text" name = "search1" placeholder="??? ????????? ????????? ?????????">
          <a href="./search.php"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
        </form>
      </div>
    </nav>
    <section class="section">
    <div id="wrap">
        <ul class="mainMenu">
            <li class="nav" id="mypage">
                <a href="#mypage" class="btn">???????????????</a>
                <div class="subMenu">
                    <a href="./Mypage.php">????????????</a>
                    <a href="./Mypage.php">??? ??????</a>
                    <a href="./Mypage.php">??? ?????????</a>
                </div>
            </li>
            <li class="nav" id="test">
                <a href="#test" class="btn">???????????????</a>
                <div class="subMenu">
                    <a href="EngTest.php">?????? ?????????</a>
                    <a href="javascript:alert('????????? ?????????.');" onfocus="this.blur()">????????? ?????????</a>
                    <a href="javascript:alert('????????? ?????????.');" onfocus="this.blur()">????????? ?????????</a>
                </div>
            </li>
            <li class="nav" id="books">
                <a href="#books" class="btn">?????? ??????</a>
                <div class="subMenu">
                    <a href="./EngList.php">?????? ??????</a>
                    <a href="javascript:alert('????????? ?????????.');" onfocus="this.blur()">????????? ??????</a>
                </div>
            </li>
        </ul>
    </div>
    </section>

    <aside class="aside">  
    <div id="slider">
        <img class="mySlides" src="./????????????1.png" style="width:100%">
        <img class="mySlides" src="./????????????2.png" style="width:100%">
        <a href="EngTest.php"><img class="mySlides" src="./????????????3.png" style="width:100%"></a>
    </div>

    <div class="best">
    <h1>&nbsp;TODAY PICK!!</h1>
    <?php
    $conn = mysqli_connect("localhost","cban","1234","sample");
    if (mysqli_connect_errno()){
    echo "????????????<br>?????? : " . mysqli_connect_error();
    }
    $result = mysqli_query($conn,"SELECT title, img, author FROM book_list order by rand() limit 4")or die(mysqli_error($conn));
    
    $n = 1;
      while($row = mysqli_fetch_array($result)){
        
      echo "<div class='box'><ul> <img class='cover' src=" .$row['img']. " alt='??????'>";
      echo "<li><b>- ".$row['title']. "</b></li>";  
      echo "<li>- ".$row['author']."</li>";  
      echo "</ul></div>";
      $n++;
      }
      mysqli_close($conn);
      ?>
      </div>
    </aside>
   
    <footer class="footer">
    <div id="foot">
    &nbsp;
      <samll>(???)Book Store   |   ?????? : 3???   |   E-mail: seoil@naver.com  ????????? ????????? ????????? ???????????????</small>
    </div>
    </footer>

<?php
}
?>

<script> //?????? ???????????? ???
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); // ????????? 5??? ?????? ??????.
}
</script>

</body>
</html>