<?php
ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
error_reporting(E_ALL & ~E_NOTICE);

$html='';
main();
//做出結果頁面
/*
*選擇資料庫
*選擇資料表
*寫入各欄位的資料
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
	$creTable = "CREATE TABLE IF NOT EXISTS {$_POST['t_name']} (
					id INTEGER PRIMARY KEY,
					fname TEXT,
					lname TEXT,
					tel TEXT
	)";
	$db->query($creTable);
// *寫入各欄位的資料
	$insert = "INSERT INTO {$_POST['t_name']} (fname, lname, tel)".
		"VALUES ({$_POST['fname']}, {$_POST['lname']}, {$_POST['tel']})";
	$db->query($insert);
// *呈現庫名
	$html[0]="庫名：{$_POST['db_name']}";
	$html[1]='<hr />';
// *呈現表名
	$html[2]="表名：{$_POST['t_name']}";
	$html[3]='<hr />';
// *呈現欄位、資料
	$data = "SELECT * FROM {$_POST['t_name']}";
	$res = $db->query($data);
	while ($row = $res->fetchArray()){
		$html[4].="{$row['fname']}{$row['lname']}{$row['tel']}<hr />";
	}
// *關閉資料庫
	$db->close();
	$html = implode("",$html);
}
echo $html;
?>