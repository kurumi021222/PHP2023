<meta charset="UTF-8">
<?php
if(isset($_POST["thename"])){

$thename=$_POST["thename"];
$id=$_POST["id"];
$mail=$_POST["mail"];
$particepent=$_POST["particepent"];
$vege=$_POST["vege"];

echo "以下為您的參加資訊:</br>";
echo "姓名:".$thename."</br>";
echo "學號:".$id."</br>";
echo "電子信箱:".$mail."</br>";
echo "參加狀態為:";
if($particepent=="yes"){
echo "是<br>";
}else{
echo "否<br>";
}
echo "您的餐點為:";
if($vege=="nonvege"){
echo "葷<br>";
}else{
echo "素<br>";
}
$comment=$_POST["comment"];
echo "您的意見為:</br>";
echo nl2br(strip_tags($comment));

}else{
echo "errer</br>";
}


?>

