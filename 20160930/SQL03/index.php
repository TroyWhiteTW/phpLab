<?php
ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
error_reporting(E_ALL & ~E_NOTICE);

$html='';
main();
//做出可以選擇及設定的頁面
/*
*輸入資料庫
*輸入資料表
*輸入欄位資料
*跳轉到結果頁面
*/
function main(){
	global $html;
	$html[0]='<form action="data_res.php" method="post">';
// *輸入資料庫
	$html[1]='<p>庫名: <input type="text" name="db_name" /></p>';
// *輸入資料表
	$html[2]='<p>表名: <input type="text" name="t_name" /></p>';
// *輸入欄位資料
	$html[3]='<p>fname: <input type="text" name="fname" /></p>';
	$html[4]='<p>lname: <input type="text" name="lname" /></p>';
	$html[5]='<p>tel: <input type="text" name="tel" /></p>';
// *跳轉到結果頁面
	$html[6]='<input type="submit" value="submit">';
	$html[7]='</form>';
	
	$html = implode("",$html);
}
echo $html;
?>