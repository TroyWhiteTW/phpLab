<?php
/*
*
*/
include_once('func.php');
$html='';
main();
//
/*
*取得年月日參數
*建立html的陣列
*塞入內容
*/
function main(){
	global $html;
	// *取得年月日的參數
	// 如果沒有從手動輸入參數則使用系統預設時間
	$iYear = $_GET['y'];
	if ($iYear == ''){
		$iYear = date('Y');
	}
	$iMon = $_GET['m'];
	if ($iMon == ''){
		$iMon = date('n');
	}
	$iDate = $_GET['d'];
	if ($iDate == ''){
		$iDate = date('j');
	}
	// *建立html的陣列
	$str ['html']='<html>';
	$str ['head']='<head>';
	$str ['UTF8']='<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
	$str ['title']='<title>萬年曆</title>';
	$str ['CSS']='<link rel="stylesheet" href="style.css">';
	$str ['/head']='</head>';
	$str ['body']='<body>';
	// *塞入內容
	$str ['content']=sContent($iYear,$iMon,$iDate);
	$str ['/body']='</body>';
	$str ['/html']='</html>';

	$html = implode("",$str);
}

echo $html;
?>