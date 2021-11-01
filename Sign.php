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


.aside{float:left; width:56%; margin-right:15%; height:80%; border: 1px solid #aeaeae;   background-color: white;}
.signup_card { 
  height : 80%;
  width: 80%;
  overflow: hidden;

}

.signup_card h2 {
  padding-top:10%;
  background-color: white;
  padding-left:40%;
}

.sign-button{
  height: 30px;
  width:80px;
  float:left;
  margin-left:21%;
  margin-bottom:10px;
  position: relative;
  display:block;
}


.sign-submit{
  height: 48px;
  display: block;
  width:50%;
  margin-left:20%;
  margin-bottom: 10px;
  position: relative;
}

.signup_card input[type=text], input[type=password] {
  height: 48px;
  font-size: 16px;
  width:50%;
  margin-left:20%;
  margin-bottom: 10px;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.signup_card input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.sign{
  text-align: center;
  font-size: 14px;
  font-weight: 700;
  height: 40px;
  padding: 0 8px;
}
.sign-button{
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #575757;
}

.sign-button:hover{
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #403f3f;
}

.sign-submit{
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #575757;
}

.sign-submit:hover{
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #403f3f;
}


.footer{width:100%; height:5%; clear:both; background:#dcdce5;}
#foot{float:left;  margin-left:15%;}
</style>

<body>
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
          <a href="./search.php"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
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
    <div class="signup_card">
        <h2>Sign_up</h2><br>
      <form name="Sign_form" action="member_insert.php" method="post">
        <input type="text" name="username" placeholder="이름">       
        <input type="text" name="id" placeholder="아이디" >
        <input type="button" name="chk" class="sign-button"value="중복확인" onclick="check_id()">
        <input type="text" name="email" placeholder="이메일 주소">
        <input type="password" name="pass" placeholder="비밀번호">
        <input type="password" name="passchk" placeholder="비밀번호 확인">
        <input type="button" name="sign" class="sign-submit" value="회원가입" onclick="check_input()">
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
    <script>
      function check_input()
      {
        if(!document.Sign_form.username.value)
        {
          alert("이름을 입력하세요");
          document.Sign_form.username.focus();
          return;
        }
        if(!document.Sign_form.id.value)
        {
          alert("아이디를 입력하세요");
          document.Sign_form.id.focus();
          return;
        }
        if(!document.Sign_form.email.value)
        {
          alert("이메일을 입력하세요");
          document.Sign_form.email.focus();
          return;
        }
        if(!document.Sign_form.pass.value)
        {
          alert("비밀번호를 입력하세요");
          
          document.Sign_form.pass.focus();
          return;
        } 
        if(!document.Sign_form.passchk.value)
        {
          alert("비밀번호 확인을 입력하세요");
          document.Sign_form.passchk.focus();
          return;
        }
        document.Sign_form.submit();
      }


      function check_id(){
        window.open("member_check_id.php?id=" + document.Sign_form.id.value, "IDcheck",
        "left=700, top=300, width=350, height=200, scrollbars=no, resizable=yes")
      }
    </script>



</body>
</html>