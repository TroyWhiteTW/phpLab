<?php
$html='';
main();
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
// *塞入內容
/*
*定位用的div
*月曆
*按鈕
*/
function sContent($iYear,$iMon,$iDate){
	// *定位用的div
	$str ['div']='<div class="pos">';
	// *月曆
	$str ['calendar']=sCalendar($iYear,$iMon,$iDate);
	// *按鈕
	$str ['btn']=sBtn($iYear,$iMon,$iDate);
	$str ['/div']='</div>';
	$sContent = implode("",$str);
	return $sContent;
}
// *月曆
/*
*建立一個table
*table的第一行是XXXX年X月
*第二行是日一二三...等等
*第三行之後出現日期
*/
function sCalendar($iYear,$iMon,$iDate){
	// *建立一個table
	$str ['table']='<table class="tableSize">';
	// *table的第一行是XXXX年X月
	$str ['title']=sTitle($iYear, $iMon);
	// *第二行是日一二三...等等
	$str ['week']=sWeek();
	// *第三行之後出現日期
	$str ['sDate']=sDate($iYear, $iMon, $iDate);
	$str ['/table']='</table>';
	$sCalender = implode("",$str);
	return $sCalender;
}
// *table的第一行是XXXX年XX月
/*
 *傳入年月參數
 *建立table第一行
*/
function sTitle($iYear, $iMon){
	// *建立table第一行
	$str = array('<tr class= "title">', '<th colspan="7">', " $iYear 年 $iMon 月", '</th>', '</tr>');
	// $str ['tr']='<tr class= "title">';
	// $str ['th']='<th colspan="7">';
	// $str ['year_mon']=" $iYear 年 $iMon 月";
	// $str ['/th']='</th>';
	// $str ['/tr']='</tr>';
	$sTitle = implode("",$str);
	return $sTitle;
}
// *第二行是日一二三...等等
function sWeek(){
	$str ['tr']='<tr class= "trStyle week">';
	$str ['sun']='<th class="weekend">日</th>';
	$str ['mon']='<th>一</th>';
	$str ['tues']='<th>二</th>';
	$str ['wed']='<th>三</th>';
	$str ['thurs']='<th>四</th>';
	$str ['fri']='<th>五</th>';
	$str ['satur']='<th class="weekend">六</th>';
	$str ['/tr']='</tr>';
	$sWeek = implode("",$str);
	return $sWeek;
}
// *第三行之後出現日期
/*
 *傳入年月及選擇哪一天的參數
 *用php函式取得該月有幾天
 *組合第一周要空幾天
 *第一周為前面有空號
 *中間是連貫沒空號的日期
 *最後一周為後面有空號
 */
function sDate($iYear, $iMon, $iDate){
	// *用php函式取得該月有幾天
	// 計算現在這個月有多少天，利用下一個月得知這個月共有幾天，存在$lastday
	$nextmonth = $iMon+1;
	$lastday = mktime(0,0,0,$nextmonth,0,$year);
	$monDays = date(d,$lastday);
	// *組合第一周要空幾天
	$firstday = mktime(0,0,0,$iMon,1,$iYear);
	$noDate = date('w', $firstday);
	// *第一周為前面有空號
	$str ['firstWeek']=firstWeek($noDate, $monDays, $iDate);
	// *中間是連貫沒空號的日期
	$str ['midWeek']=midWeek($noDate, $monDays, $iDate);
	// *最後一周為後面有空號
	$str ['lastWeek']=lastWeek($noDate, $monDays, $iDate);
	$sDate = implode("",$str);
	return $sDate;
}
// *第一周為前面有空號
/*
 *$i用於迴圈計算
 *$i下限是1，上限則是一個禮拜需要7格來放日期
*/
function firstWeek($noDate, $monDays, $iDate){
	// $i用於迴圈計算
	$str = array();
	for ($i = 1; $i <= 7; $i++){
		$str [$i]="<td class='noDate'></td>";
	}
	// for ($i = 1; $i <= 7; $i++){
		// $iDays = $i - $noDate;
		// $str [0] = "<td";
		// if ($iDays <= 0){
			// $str [1] = " class='noDate'";
		// }else if ($iDays == $iToday){
			// $str [1] = " class='today'";
		// }else if ($i % 7 == 1 | $i % 7 == 0){
			// $str [1] = " class='weekend'";
		// }
		// if ($iDays <= 0){
			// $str [2] = ">";
		// }else{
			// $str [2] = ">$iDays";
		// }
		// $str [3] = "</td>";
	// }
	
	$td = implode("",$str);
	$sFirstWeek = "<tr class='trStyle'>$td</tr>";
	return $sFirstWeek;
}
// *中間是連貫沒空號的日期
/*
 *$i用於迴圈計算
 *$i下限是前面的上限，上限則是最多需要多少空格-7
*/
function midWeek($noDate, $monDays, $iDate){
	// *$i用於迴圈計算
	// *$i下限是前面的上限，上限則是最多要多少空格-7
	$k = ($noDate+$monDays);
	if ($k == 28){
		$cell = 21;
	}else if ($k > 28 & $k <= 35){
		$cell = 28;
	}else if ($k > 35 & $k <= 42){
		$cell = 35;
	}
	for ($i = 8; $i <= $cell; $i++){
		$iDays = $i - $noDate;
		if ($i % 7 == 1){
			$sepDate.="<tr class='trStyle'>";
		}
		$sepDate.="<td";
		if ($iDays == $iDate){
			$sepDate.= " class='today'";
		}else if ($i % 7 == 1 | $i % 7 == 0){
			$sepDate.= " class='weekend'";
		}
		$sepDate.=">$iDays</td>\n";
		if ($i % 7 == 0){
			$sepDate.="</tr>";
		}
	}
	return $sepDate;
}
// *最後一周為後面有空號
/*
 *$i用於迴圈計算
 *$i下限是前面的上限，上限則是下限+7
*/
function lastWeek($noDate, $monDays, $iDate){
	// *$i用於迴圈計算
	// *$i下限是前面的上限，上限則是下限+7
	$k = ($noDate+$monDays);
	if ($k == 28){
		$cell = 21;
	}else if ($k > 28 & $k <= 35){
		$cell = 28;
	}else if ($k > 35 & $k <= 42){
		$cell = 35;
	}
	$cell_1 = $cell+1;
	$cell_2 = $cell+7;
	$sepDate.="<tr class='trStyle'>";
	for ($i = $cell_1; $i <= $cell_2; $i++){
		$iDays = $i - $noDate;
		$sepDate.= "<td";
		if($iDays >= $monDays + 1){
			$sepDate.= " class='noDate'";
		}else if ($iDays == $iDate){
			$sepDate.= " class='today'";
		}else if ($i % 7 == 1 | $i % 7 == 0){
			$sepDate.= " class='weekend'";
		}
		if ($iDays >= $monDays + 1){
			$sepDate.= ">";
		}else{
			$sepDate.= ">$iDays";
		}
		$sepDate.="</td>\n";
	}
	$sepDate.="</tr>";
	return $sepDate;
}
// *按鈕
/*
*拿到年月的參數
*點按鈕+1或-1
*超過12月或1月需要跨年
*做出按鈕
*/
function sBtn($iYear,$iMon,$iDate){
	// *拿到年月的參數
	// *點按鈕+1或-1
	// 處理參數留到後面做出按鈕時使用
	$iYear_p = $iYear-1;
	$iYear_n = $iYear+1;
	$iMon_p = $iMon-1;
	if ($iMon_p%12==0){
		$iMon_p = 12;
	}else{
		$iMon_p = ($iMon-1)%12;
	}
	$iMon_n = $iMon+1;
	if ($iMon_n%12==0){
		$iMon_n = 12;
	}else{
		$iMon_n = ($iMon+1)%12;
	}
	// *超過12月或1月需要跨年
	$iYear_2 = $iYear;
	if($iMon==12){
	$iYear_2++;
	}
	$iYear_1 = $iYear;
	if($iMon==1){
	$iYear_1--;
	}
	// *做出按鈕
	$btn ="<input type='button' value=',,' class=',,' onclick='location.href=\"index.php?y=,,&m=,,\"' />";
	$array = explode(",",$btn);
	$btn_y_p = $array;
	$btn_y_p [1] = '上一年';
	$btn_y_p [3] = 'btn_y_p button1';
	$btn_y_p [5] = $iYear_p;
	$btn_y_p [7] = $iMon;
	$btn_y_n = $array;
	$btn_y_n [1] = '下一年';
	$btn_y_n [3] = 'btn_y_n button1';
	$btn_y_n [5] = $iYear_n;
	$btn_y_n [7] = $iMon;
	$btn_m_p = $array;
	$btn_m_p [1] = '上個月';
	$btn_m_p [3] = 'btn_m_p button2';
	$btn_m_p [5] = $iYear_1;
	$btn_m_p [7] = $iMon_p;
	$btn_m_n = $array;
	$btn_m_n [1] = '下個月';
	$btn_m_n [3] = 'btn_m_n button2';
	$btn_m_n [5] = $iYear_2;
	$btn_m_n [7] = $iMon_n;
	
	$sBtn = implode("",$btn_y_p).implode("",$btn_y_n).implode("",$btn_m_p).implode("",$btn_m_n);
	return $sBtn;
}
echo $html;
?>