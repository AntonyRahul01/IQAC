<?php ob_start(); ?>

<?php 

setcookie ("login_user","",time()+0,"/");
header ("Location: index.php");

?>

<?php 
ob_flush();
?>