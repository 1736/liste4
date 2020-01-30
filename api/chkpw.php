<?php

include_once "../base.php";
$acc=$_GET['acc'];
$pw=$_GET['pw'];
$table=$_GET['table'];
$chk=nums($table,["acc"=>$acc,"pw"=>$pw]);
if($chk>0){
    echo 1;
}else{
    echo 0;
}
?>