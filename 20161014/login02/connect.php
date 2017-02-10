<?php
ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
error_reporting(E_ALL & ~E_NOTICE);
session_start();
//連接資料庫

$id = $_POST['id'];
$pw = $_POST['pw'];

$db = new SQLite3('test.db');
//搜尋資料庫資料
$sql = "SELECT * FROM user WHERE name = '$id';";
$query = $db->query($sql);
$row = $query->fetchArray();

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($id != null && $pw != null && $row[1] == $id && $row[2] == $pw){
//將帳號寫入session，方便驗證使用者身份
$_SESSION['username'] = $id;
echo '登入成功!';
// echo '<meta http-equiv=REFRESH CONTENT=1;url=member.php>';
}
else{
echo '登入失敗!';
// echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
?>