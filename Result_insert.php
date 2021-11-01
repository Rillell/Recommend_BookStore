<?php
session_start();
if(isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
else $userid = "";
if(isset($_SESSION["name"])) $name = $_SESSION["name"];
else $name = "";


// if(isset($_POST['chkbox1'])){
//     $word1= $_POST['chkbox1'];
// }else{ $word1 = "";}
// f(isset($_POST['chkbox2'])){
//     $word2 = $_POST['chkbox2'];
// }else{ $word2 = "";}
// if(isset($_POST['chkbox3'])){
//     $word3= $_POST['chkbox3'];
// }else{ $word3 = "";}
$word1= $_POST['chkbox1'];
$word2 = $_POST['chkbox2'];
$word3= $_POST['chkbox3'];

// for($i = 1; $i<9; $i++){
//     $wordNon = $_POST['allChk'][$i];
//     $word = implode(',', $wordNon);
// }
$wordNon = implode(',', $_POST['allChk']); //nonChk
$regist_day=date("Y-m-d (H:i)");

if(count($word1) < 2){
    $grade = "D";
}
elseif(count($word1) >= 2){
    if(count($word2) < 10){
        $grade = "C";
    }
    elseif(count($word2) >= 10){
        if(count($word3) < 4){
            $grade = "B";
        }
        elseif(count($word3) >= 4){
            $grade = "A";
        }
    }
}
$conn = mysqli_connect("localhost","cban","1234","sample");
if (mysqli_connect_errno()){
echo "연결실패<br>이유 : " . mysqli_connect_error();
}

$sql = "UPDATE members SET ranking = '$grade' WHERE id='$userid'";



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: Result.php');
} else {
    echo "
    <script>
    window.alert('시험을 재응시해 주세요.')
    history.go(-1)
    </script>";
}

$conn->close();

$conn = mysqli_connect("localhost","cban","1234","sample");
if (mysqli_connect_errno()){
echo "연결실패<br>이유 : " . mysqli_connect_error();
}


$sql = "INSERT INTO myword (id, word, regist_day) VALUES('$userid', '".$wordNon."','$regist_day')";



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: Result.php');
} else {
    echo "
    <script>
    window.alert('시험을 재응시해 주세요.')
    history.go(-1)
    </script>";
}

$conn->close();
?>