<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
input[type=button]{
  height: 30px;
  width:80px;
  float:left;
  margin-left:21%;
  margin-bottom:10px;
  position: relative;
  display:block;
}
.btn{
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #575757;
}

.btn:hover{
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #403f3f;
}
</style>
<body>
<h3>아이디 중복체크</h3>
<p>
<?php
$id = $_GET["id"];

if(!$id){
    echo"<li>아이디를 입력해 주세요.</li>";
}
else{
    $con = mysqli_connect("localhost", "cban", "1234", "sample");
    $sql = "select * from members where id = '$id'";
    $result = mysqli_query($con, $sql);
    $num_record = mysqli_num_rows($result);

    if($num_record){
        echo"<li>".$id." 아이디는 중복됩니다.</li>";
        echo"<li>다른 아이디를 사용해주세요.</li>";
    }
    else{
        echo"<li>".$id." 아이디는 사용 가능합니다.</li>";
    }

    mysqli_close($con);
}
?>
</p>
<input type="button" class="btn" name="close" value="닫기" onclick="javascript:self.close()">
</body>
</html>




