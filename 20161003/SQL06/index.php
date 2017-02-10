<?php
/*
做出可以輸入SQLite語法及顯示結果的地方
有輸入語法的地方
	用form post的方式
執行語法
	判斷輸入自己創設的語法
	一般的語法
有顯示剛剛輸入的地方
	判斷輸入自己創設的語法
	一般的語法
顯示資料列表或是表格
*/
ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
error_reporting(E_ALL & ~E_NOTICE);

include_once('func.php');
main();
//做出可以輸入SQLite語法及顯示結果的地方
/*
*說明
*輸入SQLite語法
*執行語法
*顯示輸入的語法
*顯示結果
*/
function main(){
	$syntax = $_POST['syntax'];
// *說明
// *輸入SQLite語法
	$inputSyntax = adm_inputSyntax();
	echo $inputSyntax;
	echo "\n".'<hr />'."\n";
// *執行語法
	adm_runSyntax($syntax);
// *顯示輸入的語法
	$outputSyntax = adm_outputSyntax($syntax);
	echo $outputSyntax;
	echo "\n".'<hr />'."\n";
// *顯示結果
	adm_showData($syntax);
}

?>