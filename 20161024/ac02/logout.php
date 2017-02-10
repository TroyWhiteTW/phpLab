<?php
ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
error_reporting(E_ALL & ~E_NOTICE);

//將cookie清空
setcookie('act', '', time() - (3600));
echo '登出中......';
echo '<meta http-equiv=refresh content=1;url="index.php">';
?>