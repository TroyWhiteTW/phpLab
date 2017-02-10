<?php
// *產生html
/*
*html01()--有權限觀看的頁面
*html02()--無權限觀看頁面跳轉回首頁
*/
function html01(){
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
	$str[] = '<!DOCTYPE html>';
	$str[] = '<html>';
	$str[] = '<head>';
	$str[] = '<meta charset="utf-8" />';
	$str[] = '<meta http-equiv="X-UA-Compatible" content="IE=edge" />';
	$str[] = '<meta name="viewport" content="width=device-width, initial-scale=1" />';
	$str[] = '<meta name="description" content="" />';
	$str[] = '<meta name="author" content="" />';
	$str[] = '<link rel="icon" href="favicon.ico" />';
	$str[] = '<title>Troy\'s Space</title>';
	$str[] = '<link href="bootstrap.min.css" rel="stylesheet" />';
	$str[] = '<link href="ie10-viewport-bug-workaround.css" rel="stylesheet" />';
	$str[] = '<link href="jumbotron.css" rel="stylesheet" />';
	$str[] = '<script src="ie-emulation-modes-warning.js"></script>';
	$str[] = '<link rel="stylesheet" href="style.css">';
	$str[] = '</head>';
	$str[] = '<body>';
	$str[] = '<nav class="navbar navbar-inverse navbar-fixed-top">';
	$str[] = '<div class="container">';
	$str[] = '<div class="navbar-header">';
	$str[] = '<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">';
	$str[] = '<span class="sr-only">Toggle navigation</span>';
	$str[] = '<span class="icon-bar"></span>';
	$str[] = '<span class="icon-bar"></span>';
	$str[] = '<span class="icon-bar"></span>';
	$str[] = '</button>';
	$str[] = '<a class="navbar-brand" href="#">Project name</a>';
	$str[] = '</div>';
	$str[] = '<div id="navbar" class="navbar-collapse collapse">';
	$str[] = '<form class="navbar-form navbar-right" action="logout.php" method="post">';
	$str[] = '<button type="submit" class="btn btn-warning">Sign out</button>';
	$str[] = '</form>';
	$str[] = '</div>';
	$str[] = '</div>';
	$str[] = '</nav>';
	$str[] = '';
	$str[] = sContent($iYear, $iMon, $iDate);
	$str[] = '';
	$str[] = '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>';
	$str[] = '<script>window.jQuery || document.write(\'<script src="jquery.min.js"><\/script>\')</script>';
	$str[] = '<script src="bootstrap.min.js"></script>';
	$str[] = '<script src="ie10-viewport-bug-workaround.js"></script>';
	$str[] = '</body>';
	$str[] = '</html>';
	$html = implode("\n", $str);
}
function html02(){
	global $html;
	// *建立html的陣列
	$str[] = '您無權限觀看此頁面！';
	$str[] = '<meta http-equiv=refresh content=1;url="index.php">';
	$html = implode("\n", $str);
}
// *塞入內容
/*
*定位用的div
*月曆
*按鈕
*/
function sContent($iYear,$iMon,$iDate){
	// *定位用的div
	$str []='<div class="container">';
	// *月曆
	$str []=sCalendar($iYear,$iMon,$iDate);
	// *按鈕
	$str []=sBtn($iYear,$iMon,$iDate);
	$str []='</div>';
	$sContent = implode("\n",$str);
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
	$str []='<table class="tableSize">';
	// *table的第一行是XXXX年X月
	$str []=sTitle($iYear, $iMon);
	// *第二行是日一二三...等等
	$str []=sWeek();
	// *第三行之後出現日期
	$str []=sDate($iYear, $iMon, $iDate);
	$str []='</table>';
	$sCalender = implode("\n",$str);
	return $sCalender;
}
// *table的第一行是XXXX年XX月
/*
 *傳入年月參數
 *建立table第一行
*/
function sTitle($iYear, $iMon){
	// *建立table第一行
	$str []='<tr class= "title">';
	$str []='<th colspan="7">';
	$str []=" $iYear 年 $iMon 月";
	$str []='</th>';
	$str []='</tr>';
	$sTitle = implode("\n",$str);
	return $sTitle;
}
// *第二行是日一二三...等等
function sWeek(){
	$str []='<tr class= "trStyle week">';
	$str []='<th class="weekend" width="120">日</th>';
	$str []='<th width="120">一</th>';
	$str []='<th width="120">二</th>';
	$str []='<th width="120">三</th>';
	$str []='<th width="120">四</th>';
	$str []='<th width="120">五</th>';
	$str []='<th class="weekend" width="120">六</th>';
	$str []='</tr>';
	$sWeek = implode("\n",$str);
	return $sWeek;
}
// *第三行之後出現日期
/*
 *傳入年月及選擇哪一天的參數
 *用php函式取得該月有幾天
 *組合第一周要空幾天
 *直接做出月曆
 */
function sDate($iYear, $iMon, $iDate){
	// *用php函式取得該月有幾天
	// 計算現在這個月有多少天，利用下一個月得知這個月共有幾天，存$lastday
	$nextmonth = $iMon+1;
	$lastday = mktime(0,0,0,$nextmonth,0,$iYear);
	$monDays = date(d,$lastday);
	// *組合第一周要空幾天
	$firstday = mktime(0,0,0,$iMon,1,$iYear);
	$noDate = date('w', $firstday);
	// *直接做出月曆
	$sDate = sCreCal($noDate, $monDays, $iYear, $iMon, $iDate);
	return $sDate;
}
// *直接做出月曆
/*
 *產生空陣列，利用迴圈來產生裡面的元素，再組合成字串傳出function
 *做出一個空陣列讓迴圈內改變其內容，而不是在迴圈內產生陣列或字串
 *指定或更改陣列內的內容
 *拿年月日去問是不是假日
 *查某月某日是第幾個禮拜幾
 *拿年月以及第幾個星期幾去問是不是假日
 *拿年月日去問是不是假期
 *把陣列組回字串
*/
function sCreCal($noDate, $monDays, $iYear, $iMon, $iDate){
	// *產生空陣列，利用迴圈來產生裡面的元素，再組合成字串傳出function
	$str = array();
	// *做出一個空陣列讓迴圈內改變其內容，而不是在迴圈內產生陣列或字串
	$as [-1] = '&ensp;<br />';
	$as [0] = '';
	$as [1] = '<br />';
	$as [2] = '<font size="3">';
	$as [3] = array();
	$as [4] = '</font>';
	$as [5] = '&ensp;<br />';
	$aTmp=array(
		''
		,'<td'
		,''
		,'>'
		,$as
		,'</td>'
		,''
	);
	$k = ($noDate+$monDays); // 組合需要多少空格來放日期
	if ($k == 28){
		$cell = 28;
	}else if ($k > 28 && $k <= 35){
		$cell = 35;
	}else if ($k > 35 && $k <= 42){
		$cell = 42;
	}
	// 產生空格來放日期
	for ($i = 1; $i <= $cell; $i++){
		$iDays = $i - $noDate; // 迴圈產生需要多少空格來用，再組合出日期填入格子
		$str [$i]=$aTmp; // 利用已經先產生的空陣列，直接指向並改變內容
		// *指定或更改陣列內的內容
		if ($i % 7 == 1){ // 週日加上tr
			$str [$i][0]='<tr class="trStyle">';
			$str [$i][2]=' class="weekend"';
		}
		if ($i % 7 == 0){ // 週六加上/tr
			$str [$i][2]=' class="weekend"';
			$str [$i][6]='</tr>';
		}
		if ($iDays > 0 && $iDays < $monDays + 1){ // 填上日期
			$str [$i][4][0]=$iDays;
		}else{ // 不存在的日期不填，並讓那一格變成空日期的顏色
			$str [$i][2]=' class="noDate"';
		}
		// *拿年月日去問是不是假日
		$h = holiday_tw($iYear, $iMon, $iDays, $noDate);
		if ($h[$iMon][$iDays][0] == 1){
			if ($h[$iMon][$iDays][3] == 1){
				$str [$i][2]=' class="holiday"';
			}
			$str [$i][4][0]=$iDays;
			array_push($str [$i][4][3], $h[$iMon][$iDays][2]);
			$str [$i][4][-1]='';
			$str [$i][4][5]='';
		}
		// *查某月某日是第幾個禮拜幾
		$a = search_specHoliday($iMon, $iDays, $noDate);
		$b = $a[$iMon][$iDays];
		// *拿年月以及第幾個星期幾去問是不是假日
		$specH = specHoliday_tw($iMon, $b);
		if ($specH[$iMon][$b][0] == 1){
			$str [$i][2]=' class="holiday"';
			$str [$i][4][0]=$iDays;
			array_push($str [$i][4][3], $specH[$iMon][$b][1]);
			$str [$i][4][-1]='';
			$str [$i][4][5]='';
		}
		// *拿年月日去問是不是假期
		$v = vacation_tw($iYear, $iMon, $iDays, $noDate);
		if ($v[$iMon][$iDays][0] == 1){
			$str [$i][2]=' class="vacation"';
			$str [$i][4][0]=$iDays;
			array_push($str [$i][4][3], $v[$iMon][$iDays][1]);
			$str [$i][4][-1]='';
			$str [$i][4][5]='';
		}
		$str [$i][4][3] = implode("<br />",$str [$i][4][3]);
		// 先把日期內容的陣列組回字串
		$str [$i][4] = implode("",$str [$i][4]);
	}
	// *指定或更改內容
	$i = $iDate+$noDate; // 是今天的日期的話，改成今天的顏色
	if ($iYear == date('Y') && $iMon == date('n')){ // 判斷是不是今天的年月
		if (array_key_exists($i, $str)){ 
			$str [$i][2]=' class="today"';
		}
	}
	// *把陣列組回字串
	for ($i = 1; $i <= $cell; $i++){ // 把二維陣列的內容組成字串
		$str [$i] = implode("",$str [$i]);
	}
	$sCreCal = implode("\n",$str); // 把一維陣列組成字串傳出function讓外面使用
	return $sCreCal;
}
// *拿年月日去問是不是假日
/*
*做出節日與年月日的陣列對照表
*處理節日開始年分的問題
*/
function holiday_tw($iYear, $iMon, $iDays, $noDate){
	// *做出節日與年月日的陣列對照表
	// $h [月][日] = [是否為節日 ,開始年分, 節慶名稱, 是不是要放假];
	$h = array();
	$h [$iMon][$iDays] = array(0, 0, array(''), 0);
	$h [1][1] = array(1, 1912, array('元旦'), 1);
	$h [2][28] = array(1, 1997, array('和平紀念日'), 1);
	$h [3][8] = array(1, 1924, array('婦女節'), 0);
	$h [3][29] = array(1, 1948, array('青年節'), 0);
	$h [4][4] = array(1, 1931, array('兒童節', '掃墓節'), 1);
	$h [5][1] = array(1, 1985, array('勞動節'), 1);
	$h [9][3] = array(1, 1955, array('軍人節'), 0);
	$h [9][28] = array(1, 1952, array('教師節'), 0);
	$h [10][10] = array(1, 1912, array('國慶日'), 1);
	$h [12][25] = array(1, 1963, array('行憲紀念日', '聖誕節'), 0);
	// 把節日名稱的陣列組回字串
	$h [$iMon][$iDays][2] = implode("<br />", $h [$iMon][$iDays][2]);
	// *處理節日開始年分的問題
	// 如果傳入的年份比開始的年份小，則把控制是否是節日的$h [$iMon][$iDays][0]改為0
	if ($h [$iMon][$iDays][1] > $iYear){
		$h [$iMon][$iDays][0] = 0;
	}
	return $h;
}
// *拿年月以及第幾個星期幾去問是不是假日
/*
*做出年月以及第幾周的第幾個星期幾的對照表
*/
function specHoliday_tw($iMon, $b){
	// *做出年月以及第幾周的第幾個星期幾的對照表
	// $specH [幾月][第幾個_禮拜幾] = array(是否放假, 節日名稱);
	$specH = array();
	$specH [$iMon][$b] = array();
	// 五月的第二個禮拜日
	$specH [5]['2_1'] = array(1, '母親節');
	// 十一月的第四個星期四
	$specH [11]['4_5'] = array(1, '感恩節');
	return $specH;
}
// *查某月某日是第幾個禮拜幾
function search_specHoliday($iMon, $iDays, $noDate){
	$a = array();
	$a [$iMon][$iDays] = '';
	// $a [幾月][幾號] = '第幾個_禮拜幾';
	$a [5][($noDate==0)?8:(15-$noDate)] = '2_1';
	$a [11][($noDate>=5)?(33 - $noDate):(26 - $noDate)] = '4_5';
	return $a;
}
// *拿年月日去問是不是假期
/*
*做出節日與年月日的陣列對照表
*/
function vacation_tw($iYear, $iMon, $iDays, $noDate){
	// *做出節日與年月日的陣列對照表
	// $h [月][日] = [是否為節日, 節慶名稱, 開始年, 結束年];
	$v = array();
	$v [$iMon][$iDays] = array(0, '');
	$v [3][29] = array(1, '春假');
	$v [3][30] = array(1, '春假');
	$v [3][31] = array(1, '春假');
	$v [4][1] = array(1, '春假');
	$v [4][2] = array(1, '春假');
	$v [4][3] = array(1, '春假');
	$v [4][4] = array(1, '春假');
	return $v;
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
	$btn ="<input type='button' value=',,' class=',,' onclick='location.href=\"member.php?y=,,&m=,,\"' />";
	$array = explode(",",$btn);
	$btn_y_p = $array;
	$btn_y_p [1] = '上一年';
	$btn_y_p [5] = $iYear_p;
	$btn_y_p [7] = $iMon;
	$btn_y_n = $array;
	$btn_y_n [1] = '下一年';
	$btn_y_n [5] = $iYear_n;
	$btn_y_n [7] = $iMon;
	$btn_m_p = $array;
	$btn_m_p [1] = '上個月';
	$btn_m_p [5] = $iYear_1;
	$btn_m_p [7] = $iMon_p;
	$btn_m_n = $array;
	$btn_m_n [1] = '下個月';
	$btn_m_n [5] = $iYear_2;
	$btn_m_n [7] = $iMon_n;

	$sBtn[] = implode("",$btn_y_p);
	$sBtn[] = implode("",$btn_y_n);
	$sBtn[] = implode("",$btn_m_p);
	$sBtn[] = implode("",$btn_m_n);
	$sBtn = implode("\n", $sBtn);
	return $sBtn;
}
?>