<?php
ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
error_reporting(E_ALL & ~E_NOTICE);

main();
//結果頁面
/*
*選擇資料庫
*列出資料表
*選擇資料表
	*創建
	*刪除
*關閉資料庫
*/
function main(){
	$db_name = $_POST['db_name'];
	
// *選擇資料庫
	$db = new SQLite3($db_name);
// *列出資料表
	$listTable = array();
	$listTable[] = 'SELECT * FROM';
	// $listTable[] = "$db_name.sqlite_master";
	$listTable[] = 'sqlite_master';
	$listTable[] = 'WHERE type="table"';
	// $listTable[] = 'ORDER BY name';
	$listTable = implode(" ", $listTable);
	$tablesquery = $db->query($listTable);
	while ($table = $tablesquery->fetchArray(SQLITE3_ASSOC)) {
        echo $table['name'] . '<br />';
    }
	echo '<hr />';
// *選擇資料表
	$html[]='<form action="col.php" method="post">';
	$html[]='<p>表名: <input type="text" name="table_name" /></p>';
	$html[]='<input type="submit" value="送出">';
	$html[]='</form>';
	$html = implode("",$html);
	echo $html;
// *關閉資料庫
	$db->close();

}

?>