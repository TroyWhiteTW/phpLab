<?php
ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
error_reporting(E_ALL & ~E_NOTICE);

$act = $_POST['act'];
$pw = $_POST['pw'];
//連接資料庫
$db = new SQLite3('test.db');
//搜尋資料庫資料
$sql = "SELECT * FROM user WHERE act = '$act';";
$query = $db->query($sql);
$row = $query->fetchArray(SQLITE3_ASSOC);
//判斷帳號與密碼是否為空白
//以及資料庫裡是否有這個會員
if($act != null && $pw != null && $row['act'] == $act && $row['pw'] == $pw){
	//將帳號寫入cookie，方便驗證使用者身份
	setcookie('act', $act, time() + (3600));
	echo '登入成功！';
	echo '<meta http-equiv=refresh content=1;url="member.php" />';
}else{
	echo '登入失敗！';
	echo '<meta http-equiv=refresh content=1;url="index.php" />';
}
?>