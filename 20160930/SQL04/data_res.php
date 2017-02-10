<?php
ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
error_reporting(E_ALL & ~E_NOTICE);

$html='';
main();
//結果頁面
/*
*選擇資料庫
*選擇資料表
	*增刪
	*增加列、型別
*寫入欄位
	*名稱
	*資料
*呈現庫名
*呈現表名
*呈現欄位、資料
*關閉資料庫
*/
function main(){
	global $html;
// *選擇資料庫
	$db = new SQLite3("{$_POST['db_name']}");
// *選擇資料表
	$creTable = array();
	$creTable[] = 'CREATE TABLE IF NOT EXISTS';
	$creTable[] = '{$_POST['t_name']}';
	$creTable[] = '(';
	$creTable[] = 'id INTEGER PRIMARY KEY,';
	$creTable[] = 'fname TEXT,';
	$creTable[] = 'lname TEXT,';
	$creTable[] = 'tel TEXT';
	$creTable[] = ')';
	$creTable = implode("",$creTable);
	$db->query($creTable);
// *寫入欄位
	$insert = "INSERT INTO {$_POST['t_name']} (fname, lname, tel)".
		"VALUES ({$_POST['fname']}, {$_POST['lname']}, {$_POST['tel']})";
	$db->query($insert);
// *呈現庫名
	$html[]="庫名：{$_POST['db_name']}";
	$html[]='<hr />';
// *呈現表名
	$html[]="表名：{$_POST['t_name']}";
	$html[]='<hr />';
// *呈現欄位、資料
	$data = "SELECT * FROM {$_POST['t_name']}";
	$res = $db->query($data);
	while ($row = $res->fetchArray()){
		$html[].="{$row['fname']}{$row['lname']}{$row['tel']}<hr />";
	}
// *關閉資料庫
	$db->close();
	$html = implode("",$html);
}
echo $html;
?>