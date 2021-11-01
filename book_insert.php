<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
if(isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
else $userid = "";
if(isset($_SESSION["name"])) $name = $_SESSION["name"];
else $name = "";

$img = $_GET['img'];
$title = $_GET['title'];
$author = $_GET['author'];
$PDF = $_GET['PDF'];

$conn = mysqli_connect("localhost","cban","1234","sample");
if (mysqli_connect_errno()){
echo "연결실패<br>이유 : " . mysqli_connect_error();
}


$sql = "INSERT INTO mybook(id, img, title, author, PDF)
VALUES('$userid', '$img', '$title', '$author', '$PDF')";



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "
    <script>
    window.alert('해당 도서를 내 서재에 추가하였습니다.')
    history.go(-1)
    </script>
    ";
} else {
    echo "
    <script>
    window.alert('이미 내 서재에 있는 도서입니다.')
    history.go(-1)
    </script>
    ";
}

$conn->close();
?>
</body>
</html>

