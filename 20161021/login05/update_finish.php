<?php
ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
error_reporting(E_ALL & ~E_NOTICE);

$act = $_POST['act'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];
$other = $_POST['other'];

//紅色字體為判斷密碼是否填寫正確
if($_COOKIE['act'] != null && $pw != null && $pw2 != null && $pw == $pw2){
	$act = $_COOKIE['act'];

	//更新資料庫資料語法
	$db = new SQLite3('test.db');
	$sql = "update user set pw='$pw', telephone='$telephone', address='$address', other='$other' where act='$act';";
	if($db->query($sql)){
		echo '修改成功!';
		echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
	}else{
		echo '修改失敗!';
		echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
	}
}else{
	echo '您無權限觀看此頁面！';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>