<?php
ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
error_reporting(E_ALL & ~E_NOTICE);

$id = $_POST['id'];

if($_COOKIE['act'] != null){
	//刪除資料庫資料語法
	$sql = "delete from member_table where username='$id'";
	if(mysql_query($sql)){
		echo '刪除成功!';
		echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
	}else{
		echo '刪除失敗!';
		echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
	}
}else{
	echo '您無權限觀看此頁面！';
	echo '<meta http-equiv=refresh content=1;url="index.php">';
}
?>