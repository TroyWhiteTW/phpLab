<?php
//將cookie清空
setcookie('act', '', time() - (3600));
echo '登出中......';
echo '<meta http-equiv="refresh" content="1";url="index.php">';
?>