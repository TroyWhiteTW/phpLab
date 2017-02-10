<?php
ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
error_reporting(E_ALL & ~E_NOTICE);
// 做一個上半部為結果、下半部為輸入指令的 SQLite 工具
/*
*有一個上半部為結果，下半部為輸入指令的區域
上半部畫面顯示區域
	把下半部輸入的語法執行
	如果 GET['db'] = ''，利用glob()列出目前有哪些 DB
	輸入語法顯示出資料表格
下半部輸入指令區域
	輸入 DB -> GET['db']
	輸入 DATA -> GET['data']
*/
include_once('func.php');
$html='';
main();
function main(){
	global $html;
	$input_db = $_GET['db'];
	$input_syntax = $_GET['syntax'];
// *有一個上半部為結果，下半部為輸入指令的區域
// 上半部印出結果
	$html[] = adm_res($input_db, $input_syntax);
	$html[] = '<hr />';
// 下半部輸入區域
	$html[] = adm_inputSyntax();
	$html = implode('', $html);
	return $html;
}
echo $html;
?>