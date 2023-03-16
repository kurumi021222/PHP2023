<?php 
session_start();

if($_SESSION["login"]=="pri"||$_SESSION["login"]=="tea"){
}else{
    header("Location:error.php");
}
?>

<html>
<head><meta charset="UTF-8">
<title>
    
</title>
</head>
<body>
    教師頁面</br></br>
進入:<a href="stu.php">學生網頁<a></br>
進入:<a href="pri.php">校長網頁<a></br></br>
<a href="logout.php">登出<a>
</body>
</html>