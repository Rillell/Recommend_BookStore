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
.header{width:100%; height:5%; background:#8cc1ff;}
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
    border: 3px solid #1665ff;
    outline: none;
  }
  
.search-icon {
    position: relative;
    float: right;
    width: 65px;
    height: 65px;
    top: -52px;
    right: -45px;
}

.section{margin-left:15%; width:13%; height:80%;  float:left;}
#menubar{float:left; width: 100%; height:100%; background:#99caf5;}
.section h3{text-shadow:-1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
            color:#ffffff;}
.section ul{list-style:none; padding:0px; text-align:center; position: relative;}
.section ul li a{
    text-decoration:none; display:block: width:80px; height:35px; line-height:35px; 
    font-weight:bold; color:#ffffff;}
.section ul li{width:248px; height: 50px; background-color:#0176e2;}
.section ul li:hover{background-color:#D4F4FA; }
.section ul li a:hover{background-color:#D4F4FA; color:black;}
.section ul ul{display:none; position:absolute; left:248px; top:60px;}
.section ul li:hover > ul{display:block;}

.aside{float:left; width:57%; margin-right:15%; height:80%; }
#EngTest{
    float:left;
    padding-top: 5%;
    padding-left: 5%;
    width:20%;;
    height:30%;
}
.eng{
    width:100%;
    height:100%;
}
#JapTest{
    float:left;
    padding-top: 5%;
    padding-left: 5%;
    width:20%;;
    height:30%;
}
.jap{
    width:100%;
    height:100%;
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

if(!$userid){ echo "???????????? ????????????????";
?>
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
    <a href="./BeforeMain.php"><img src="./??????.png" alt="??????" class="logoimg"></a>
    </div>
    <div class="search">
        <form class="search-container" method="post" action = "#">
          <input type="text" name = "search1" placeholder="??? ????????? ????????? ?????????">
          <a href="#"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
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
    <div id="EngTest">
    <a href="EngTest.php"><img src="./engTest.jpg" alt="???????????????" class="eng"></a>
    </div>
    <div id="JapTest">
    <a href="#"><img src="./japTest.jpg" alt="???????????????" class="jap"></a>
    </div>


    </aside>
    <footer class="footer">
    <div id="foot">
    &nbsp;
      <samll>(???)Book Store   |   ?????? : 3???   |   E-mail: seoil@naver.com
    <br>
    &nbsp;&nbsp;&nbsp;????????? ????????? ????????? ???????????????</small>
    </div>
    </footer>
<?php
}
?>
</body>
</html>