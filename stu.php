<?php 
session_start();

if($_SESSION["login"]=="stu"||$_SESSION["login"]=="tea"){
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
    學生頁面</br></br>
進入:<a href="tea.php">教師頁面<a></br>
進入:<a href="pri.php">校長頁面<a></br></br>
<a href="logout.php">登出<a>
</body>
</html>