<?php 
session_start();

if($_SESSION["login"]=="pri"){
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
    校長頁面</br></br>
進入:<a href="stu.php">學生頁面<a></br>
進入:<a href="tea.php">教師頁面<a></br></br>
<a href="logout.php">登出<a>
</body>
</html>