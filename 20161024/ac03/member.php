<?php
// ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
// error_reporting(E_ALL & ~E_NOTICE);

/*
*判斷有沒有權限觀看此頁面，說不定是路人或不相關的使用者，因此要給予排除
	Y: 產生html、做出月曆
	N: 跳出訊息轉回首頁
*/
include_once('func.php');
$html='';
main();
function main(){
	// 判斷有沒有權限觀看此頁面，說不定是路人或不相關的使用者，因此要給予排除
	if ($_COOKIE['act'] != null){
		html01();
	}else{
		html02();
	}
}

echo $html;
?>