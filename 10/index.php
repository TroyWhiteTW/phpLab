<?php
ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
error_reporting(E_ALL & ~E_NOTICE);

echo init();

//主程式進入點，由頭部、內容、跳轉按鈕區塊組成
function init() {
	// 取得年月日的參數
	// 如果沒有從手動輸入參數則使用系統預設時間
	($_REQUEST['y'] == '') ? $iYear = date('Y') : $iYear = $_REQUEST['y'];
	($_REQUEST['m'] == '') ? $iMon = date('n') : $iMon = $_REQUEST['m'];
	($_REQUEST['d'] == '') ? $iDate = date('j') : $iDate = $_REQUEST['d'];
	$html[] = head($iYear, $iMon);
	$html[] = content($iYear, $iMon, $iDate);
	$html[] = "</table>";
	$html[] = btn($iYear, $iMon, $iDate, "上一年", "btn_y_p button1");
	$html[] = btn($iYear, $iMon, $iDate, "下一年", "btn_y_n button1");
	$html[] = btn($iYear, $iMon, $iDate, "上個月", "btn_m_p button2");
	$html[] = btn($iYear, $iMon, $iDate, "下個月", "btn_m_n button2");
	$html[] = "</body>";
	$html[] = "</html>";
	return implode("\n", $html);
}
//html開頭部分
function head($iYear, $iMon) {
	$html[] = "<html>";
	$html[] = "<head>";
	$html[] = "<title>月曆</title>";
	$html[] = "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
	$html[] = "<link rel='stylesheet' href='style.css'>";
	$html[] = "</head>";
	$html[] = "<body>";
	$html[] = "<table class='table font'>";
	$html[] = "<tr class='titleColor'>";
	$html[] = "<th colspan='7'>";
	$html[] = $iYear . "年" . $iMon . "月";
	$html[] = "</th>";
	$html[] = "</tr>";
	$html[] = "<tr class ='trColor'>";
	$html[] = "<th class ='weekendColor'>日</th>";
	$html[] = "<th>一</th>";
	$html[] = "<th>二</th>";
	$html[] = "<th>三</th>";
	$html[] = "<th>四</th>";
	$html[] = "<th>五</th>";
	$html[] = "<th class ='weekendColor'>六</th>";
	$html[] = "</tr>";
	return implode("\n", $html);
}
//內容，組成月曆的格子以及計算方式
/*
$iYear  = 月曆傳入的年
, $iMon   = 月曆傳入的月
, $iDate  = 月曆傳入的日

回傳:月曆主體的迴圈HTML碼

 *傳入年月及選擇哪一天的參數
 *用php函式取得該月有幾天
 *組合第一周要空幾天
 *直接做出月曆
 */
function content($iYear, $iMon, $iDate) {
	// *用php函式取得該月有幾天
	// 計算現在這個月有多少天，利用下一個月得知這個月共有幾天，存$lastday
	$nextmonth = $iMon + 1;
	$lastday = mktime(0, 0, 0, $nextmonth, 0, $iYear);
	$monDays = date(d, $lastday);
	// *組合第一周要空幾天
	$firstday = mktime(0, 0, 0, $iMon, 1, $iYear);
	$noDate = date('w', $firstday);
	// *直接做出月曆
	$str = array();
	$aTmp = array(
		'',
		'<td',
		'',
		'>',
		'',
		'</td>',
		'',
	);
	// 組合需要多少空格來放日期
	$k = ($noDate + $monDays);
	if ($k == 28) {
		$cell = 28;
	} else if ($k > 28 && $k <= 35) {
		$cell = 35;
	} else if ($k > 35 && $k <= 42) {
		$cell = 42;
	}
	// 產生空格來放日期
	for ($i = 1; $i <= $cell; $i++) {
		$iDays = $i - $noDate; // 迴圈產生需要多少空格來用，再組合出日期填入格子
		$str[$i] = $aTmp; // 利用已經先產生的空陣列，直接指向並改變內容
		// *指定或更改陣列內的內容
		if ($i % 7 == 1) {
			// 週日加上tr
			$str[$i][0] = "<tr class='trColor'>\n";
			$str[$i][2] = ' class="weekendColor"';
		}
		if ($i % 7 == 0) {
			// 週六加上/tr
			$str[$i][2] = ' class="weekendColor"';
			$str[$i][6] = "\n</tr>";
		}
		if ($iDays > 0 && $iDays < $monDays + 1) {
			// 填上日期
			$str[$i][4] = $iDays;
		} else {
			// 不存在的日期不填，並讓那一格變成空日期的顏色
			$str[$i][2] = ' class="noDateColor"';
		}
	}
	// *指定或更改內容
	$i = $iDate + $noDate; // 是今天的日期的話，改成今天的顏色
	if ($iYear == date('Y') && $iMon == date('n')) {
		// 判斷是不是今天的年月
		if (array_key_exists($i, $str)) {
			$str[$i][2] = ' class="today"';
		}
	}
	// *把陣列組回字串
	for ($i = 1; $i <= $cell; $i++) {
		// 把二維陣列的內容組成字串
		$str[$i] = implode("", $str[$i]);
	}
	$sCreCal = implode("\n", $str); // 把一維陣列組成字串傳出function讓外面使用
	return $sCreCal;
}
//跳轉按鈕
/*
$value 按鈕的文字
$class 按鈕的css class
$url 按鈕導向的網址
 */
function btn($iYear, $iMon, $iDate, $value, $class) {
	// *拿到年月的參數
	// *點按鈕+1或-1
	// 處理參數留到後面做出按鈕時使用
	$iYear_p = $iYear - 1;
	$iYear_n = $iYear + 1;
	$iMon_p = $iMon - 1;
	if ($iMon_p % 12 == 0) {
		$iMon_p = 12;
	} else {
		$iMon_p = ($iMon - 1) % 12;
	}
	$iMon_n = $iMon + 1;
	if ($iMon_n % 12 == 0) {
		$iMon_n = 12;
	} else {
		$iMon_n = ($iMon + 1) % 12;
	}
	// *超過12月或1月需要跨年
	$iYear_2 = $iYear;
	if ($iMon == 12) {
		$iYear_2++;
	}
	$iYear_1 = $iYear;
	if ($iMon == 1) {
		$iYear_1--;
	}
	$html[] = "<input type='button' value='";
	$html[] = $value;
	$html[] = "' class='";
	$html[] = $class;
	$html[] = "' onclick='location.href=\"";
	$html[] = "index.php?y=";
	switch ($value) {
	case '上一年':
		$html[] = $iYear_p;
		break;
	case '下一年':
		$html[] = $iYear_n;
		break;
	case '上個月':
		$html[] = $iYear_1;
		break;
	case '下個月':
		$html[] = $iYear_2;
		break;
	};
	$html[] = "&m=";
	switch ($value) {
	case '上一年':
		$html[] = $iMon;
		break;
	case '下一年':
		$html[] = $iMon;
		break;
	case '上個月':
		$html[] = $iMon_p;
		break;
	case '下個月':
		$html[] = $iMon_n;
		break;
	};
	$html[] = "\"' />";
	return implode("", $html);
}
?>