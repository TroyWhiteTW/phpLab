<?php
ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
error_reporting(E_ALL & ~E_NOTICE);

if($_COOKIE['act'] != null){
	//將$_SESSION['username']丟給$act
	//這樣在下SQL語法時才可以給搜尋的值
	$act = $_COOKIE['act'];
	//若以下$act直接用$_SESSION['username']將無法使用
	$db = new SQLite3('test.db');
	$sql = "SELECT * FROM user where act='$act'";
	$query = $db->query($sql);

	echo "<form name=\"form\" method=\"post\" action=\"update_finish.php\">";
	echo "帳號：<input type=\"text\" name=\"act\" value=\"$row[1]\" />(此項目無法修改) <br>";
	echo "密碼：<input type=\"password\" name=\"pw\" value=\"$row[2]\" /> <br>";
	echo "再一次輸入密碼：<input type=\"password\" name=\"pw2\" value=\"$row[2]\" /> <br>";
	echo "電話：<input type=\"text\" name=\"telephone\" value=\"$row[3]\" /> <br>";
	echo "地址：<input type=\"text\" name=\"address\" value=\"$row[4]\" /> <br>";
	echo "備註：<textarea name=\"other\" cols=\"45\" rows=\"5\">$row[5]</textarea> <br>";
	echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
	echo "</form>";
}else{
	echo '您無權限觀看此頁面！';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>