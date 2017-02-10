<?php
ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
error_reporting(E_ALL & ~E_NOTICE);

$act = $_POST['act'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
// $telephone = $_POST['telephone'];
// $address = $_POST['address'];
// $other = $_POST['other'];

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($act != null && $pw != null && $pw2 != null && $pw == $pw2){
	//新增資料進資料庫語法
	$db = new SQLite3('test.db');
	$sql = "INSERT INTO user (act, pw) values ('$act', '$pw')";
	if($db->query($sql)){
		$r = $db->query("SELECT sid FROM user WHERE act='$act'");
		$a = $r->fetchArray(SQLITE3_ASSOC);
		print_r($a);
		echo $a['sid'];
		echo '新增成功！即將跳轉回登入頁';
		echo '<meta http- http-equiv=refresh content=1;url="index.php">';
	}else{
		echo '新增失敗！';
		echo '<meta http-equiv=refresh content=1;url="index.php">';
	}
}else{
	echo '欄位填寫錯誤！';
	echo '<meta http-equiv=refresh content=1;url="index.php">';
}
?>