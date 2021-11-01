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
$servername = "localhost";
$username = "cban";
$password = "1234";
$dbname = "sample";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username=$_POST['username'];
$id=$_POST['id'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$regist_day=date("Y-m-d (H:i)");

$sql = "INSERT INTO members (username, id, email, pass, regist_day)
VALUES ('$username','$id', '$email', '$pass','$regist_day')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    //echo "<script>alert("회원가입이 완료되었습니다")</script>";
    //header('Location: login.php');
    print "<script language=javascript> alert('회원가입이 완료되었습니다');
     location.replace('./login.php'); </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>
