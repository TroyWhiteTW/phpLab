<?php
ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
error_reporting(E_ALL & ~E_NOTICE);

$html='';
main();
//做出可以增刪修查以及設定資料庫的頁面
/*
*輸入資料庫
*輸入資料表
	*選擇增刪資料表
	*增加列、型別
*輸入欄位
	*新增名稱
	*新增資料
*跳轉到結果頁面
*/
function main(){
	global $html;
	$html[]='<form action="data_res.php" method="post">';
// *輸入資料庫
	$html[]='<p>庫名: <input type="text" name="db_name" /></p>';
// *輸入資料表
	$html[]='<p>表名: <input type="text" name="t_name" /></p>';
// *選擇增刪資料表
// *增加列、型別
	$html[]='<p>列 1: <input type="text" name="col_1" /></p>';
// *輸入欄位
// *新增名稱
// *新增資料
	$html[]='<p>fname: <input type="text" name="fname" /></p>';
	$html[]='<p>lname: <input type="text" name="lname" /></p>';
	$html[]='<p>tel: <input type="text" name="tel" /></p>';
// *跳轉到結果頁面
	$html[]='<input type="submit" value="submit">';
	$html[]='</form>';
	
	$html = implode("",$html);
}

echo $html;
?>