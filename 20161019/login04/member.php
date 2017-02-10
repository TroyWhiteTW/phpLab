<?php
ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
error_reporting(E_ALL & ~E_NOTICE);

//此判斷為判定觀看此頁有沒有權限
//說不定是路人或不相關的使用者
//因此要給予排除
if($_COOKIE['act'] != null){
	echo '<a href="register.php">新增</a>';
	echo '<a href="update.php">修改</a>';
	echo '<a href="delete.php">刪除</a><br><br>';

	//將資料庫裡的所有會員資料顯示在畫面上
	$db = new SQLite3('test.db');
	$sql = "SELECT * FROM user";
	$query = $db->query($sql);
	while($row = $query->fetchArray()){
		echo "$row[1] - 名字(帳號)：$row[3], " . 
		"電話：$row[4], 地址：$row[5], 備註：$row[6]<br>";
	}
	echo '<a href="logout.php">登出</a><br><br>';
}else{
	echo '您無權限觀看此頁面！';
	echo '<meta http-equiv=refresh content=1;url="index.php">';
}
?>