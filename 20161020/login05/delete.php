<?php
ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
error_reporting(E_ALL & ~E_NOTICE);

if($_COOKIE['act'] != null){
	echo "<form name=\"form\" method=\"post\" action=\"delete_finish.php\">";
	echo "要刪除的帳號：<input type=\"text\" name=\"id\" /> <br>";
	echo "<input type=\"submit\" name=\"button\" value=\"刪除\" />";
	echo "</form>";
}else{
	echo '您無權限觀看此頁面！';
	echo '<meta http-equiv=refresh content=1;url="index.php">';
}
?>