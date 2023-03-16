<?php 
session_start();
 
if($_SESSION["login"]=="No"){

}else{
    header("Location:error.php");
}
//加緩衝區
ob_start();
?>

<html>
<head><meta charset="UTF-8">
<title>
    
</title>
</head>
<body>
<?php
echo $_SESSION["login"];
echo "</br>";
?>
登入失敗請點選<a href="index.php">此網頁</a></br>
或網頁將在三秒後跳至登入畫面
<?php
header("Refresh:3;url=index.php");
?>
</body>
</html>

<?php 
//如何加緩衝區
ob_flush(); ?>