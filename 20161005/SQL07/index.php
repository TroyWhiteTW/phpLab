<?php
ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
error_reporting(E_ALL & ~E_NOTICE);
// 做一個上半部為結果、下半部為輸入指令的 SQLite 工具
/*
*有一個上半部為結果，下半部為輸入指令的區域
上半部
	如果GET=''
		*有哪些 DB -> 輸入 DB
			會用到glob()這個函式
	如果GET='DB'
		*有哪些 TABLE -> 輸入 TABLE
			會用到SELECT * FROM sqlite_master WHERE type="table"這個語法
	GET='TABLE'
		*有哪些 DATA -> 輸入語法
			
下半部
	如果GET=''
		*有哪些 DB -> 輸入 DB
			輸入的DB用forn+GET方式傳給顯示TABLE需要用的地方
	如果GET='DB'
		*有哪些 TABLE -> 輸入 TABLE
			輸入的TABLE用forn+GET方式傳給顯示DATA需要用的地方
	GET='TABLE'
		*有哪些 DATA -> 輸入語法
			送出指令後重整畫面
*/
include_once('func.php');
main();
function main(){
	$db = $_GET['db'];
	$table = $_GET['table'];
	$syntax = $_GET['syntax'];
// *有一個上半部為結果，下半部為輸入指令的區域
// 上半部印出結果
	adm_res($db, $table, $syntax);
	echo '<hr />';
// 下半部輸入區域
	adm_inputSyntax();
}
?>