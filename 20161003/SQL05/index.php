<?php
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
// *說明
// *輸入SQLite語法
	$inputSyntax = inputSyntax();
	echo $inputSyntax;
	echo '<hr />';
// *執行語法
	runSyntax();
// *顯示輸入的語法
	$outputSyntax = outputSyntax();
	echo $outputSyntax;
	echo '<hr />';
// *顯示結果
	$showData = showData();
	echo $showData;
}

?>