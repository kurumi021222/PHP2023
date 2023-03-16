<?php
session_start();

$stuid="st";
$teaid="ch";
$priid="pr";
$stupwd="1";
$teapwd="2";
$pripwd="3";

$id=$_POST["id"];
$pwd=$_POST["pwd"];

if(($stuid==$id)&&($stupwd==$pwd)){
    $_SESSION["login"]="stu";
    header("Location:stu.php");
}else if(($teaid==$id)&&($teapwd==$pwd)){
    $_SESSION["login"]="tea";
    header("Location:tea.php");
}else if(($priid==$id)&&($pripwd==$pwd)){
    $_SESSION["login"]="pri";
    header("Location:pri.php");
}else{
    $_SESSION["login"]="No";
    header("Location:fail.php");
}

?>