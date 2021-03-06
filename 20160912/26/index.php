<?php
/*
*取得年月日的參數
*建立一個table
*table的第一行是XXXX年X月
*第二行是日一二三...等等
*第三行之後出現日期
*/
$table=sepV1();
function sepV1(){
// *取得年月日的參數	
	$iYear =2016;
	$iMon =9;
	$iToday =12;
	
// *建立一個的table
	$sep = "<table class='tableSize'>";
// *table的第一行是XXXX年X月
	$sep.= title($iYear, $iMon);
// *第二行是日一二三...等等
	$sep.= week();
// *第三行之後出現日期
	$sep.= sepDate($iYear, $iMon, $iToday);
// 結尾的table
	$sep.= "</table>";
	
	return $sep;
}

// *table的第一行是XXXX年XX月
/*
 *傳入年月參數
 *建立table第一行
*/
function title($iYear, $iMon){
	// *建立table第一行
	$title = "<tr class= 'title'>".
	"<th colspan='7'>".
	"{$iYear}年{$iMon}月".
	"</th>".
	"</tr>";
	return $title;
}

// *第二行是日一二三...等等
function week(){
	$week = "<tr class='trStyle week'>".
	"<th class='weekend'>日</th>".
	"<th>一</th>".
	"<th>二</th>".
	"<th>三</th>".
	"<th>四</th>".
	"<th>五</th>".
	"<th class='weekend'>六</th>".
	"</tr>";
	
	return $week;
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
function sepDate($iYear, $iMon, $iToday){
	// *用php函式取得該月有幾天
	// 計算現在這個月有多少天，利用下一個月得知這個月共有幾天，存在$lastday
	$nextmonth = $iMon+1;
	$lastday = mktime(0,0,0,$nextmonth,0,$year);
	$mon = date(d,$lastday);
	
	// *組合第一周要空幾天
	$firstday = mktime(0,0,0,$iMon,1,$iYear);
	$noDate = date('w', $firstday);
	
	// *第一周為前面有空號
	$sepDate.= firstWeek($noDate, $mon, $iToday);
	
	// *中間是連貫沒空號的日期
	$sepDate.= midWeek($noDate, $mon, $iToday);
	
	// *最後一周為後面有空號
	$sepDate.= lastWeek($noDate, $mon, $iToday);
	
	return $sepDate;
}

// *第一周為前面有空號
/*
*/
function firstWeek($noDate, $mon, $iToday){
	// $i用於迴圈計算
	$sepDate ="<tr class='trStyle'>";
	for ($i = 1; $i <= 7; $i++){
		$iDays = $i - $noDate;
		
		$sepDate.= "<td";
		
		if ($iDays <= 0){
			$sepDate.= " class='noDate'";
		}else if ($iDays == $iToday){
			$sepDate.= " class='today'";
		}else if ($i % 7 == 1 | $i % 7 == 0){
			$sepDate.= " class='weekend'";
		}
		
		if ($iDays <= 0){
			$sepDate.= ">";
		}else{
			$sepDate.= ">$iDays";
		}
		
		$sepDate.= "</td>\n";
	}
	$sepDate.="</tr>";
	return $sepDate;
}

// *中間是連貫沒空號的日期
/*
*/
function midWeek($noDate, $mon, $iToday){
	// $i用於迴圈計算
	// 算出需要多少空格來放日期
	$k = ($noDate+$mon);
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
		
		if ($iDays == $iToday){
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
*/
function lastWeek($noDate, $mon, $iToday){
	// $i用於迴圈計算
	// 最後一周的空格判斷
	$k = ($noDate+$mon);
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
		
		if($iDays >= $mon + 1){
			$sepDate.= " class='noDate'";
		}else if ($iDays == $iToday){
			$sepDate.= " class='today'";
		}else if ($i % 7 == 1 | $i % 7 == 0){
			$sepDate.= " class='weekend'";
		}
		
		if ($iDays >= $mon + 1){
			$sepDate.= ">";
		}else{
			$sepDate.= ">$iDays";
		}
		
		$sepDate.="</td>\n";
	}
	$sepDate.="</tr>";
	return $sepDate;
}

?>
<html>
	<head>
		<title>2016_09</title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
<?php echo $table; ?>
	</body>
</html>