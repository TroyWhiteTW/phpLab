<?php
ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
error_reporting(E_ALL & ~E_NOTICE);
// 執行輸入的語法並顯示資料表格
/*
*先跟 SQLite 拿所有的資料回來，這個資料會是一個陣列
*產生表格
	先分析資料陣列的第一筆結構如何
		需要知道有幾個欄位
		array_key取得欄位名稱
		產生table的第一行（欄位名稱）
	產生資料表格的資料欄位，以及填值
*/
main();
function main(){
	$r = run_syntax();
	print_r($r);
	echo '<hr />';
	print_r(array_keys($r[0]));
	echo '<hr />';
	print_r(array_values($r[0]));
	echo '<hr />';
	cre_table($r);
}
function run_syntax(){
	$db = new SQLite3('test01.db');
	$query = $db->query('SELECT * FROM alex');
	while ($row = $query->fetchArray(SQLITE3_ASSOC)) {
		$r[] = $row;
	}
	return $r;
}
// 產生表格
function cre_table($r){
	echo '<table border="1" width="50%" align="center">';
	firstLine($r);
	fillData($r);
	echo '</table>';
}
function firstLine($r){
	$a = array_keys($r[0]);
	echo '<tr>';
	for ($i = 0; $i < count($a); $i++){
		echo"<td>$a[$i]</td>";
	}
	echo '</tr>';
}
function fillData($r){
	$a = array_values($r);
	for ($i = 0; $i < count($a); $i++){
		$b = array_values($r[$i]);
		echo"<tr><td>$b[0]</td><td>$b[1]</td></tr>";
	}
}

?>