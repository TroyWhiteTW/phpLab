<?php
/*
*建立一個09月的table
*table的第一行是2016年09月
*第二行是日一二三...等等
*第三行之後出現日期
*/
$table=sepV1();
function sepV1(){
// *建立一個09月的table
	$sep = "<table class='tableSize'>";
// *table的第一行是XXXX年XX月
	$sep.= title();
// *第二行是日一二三...等等
	$sep.= week();
// *第三行之後出現日期
	$sep.= sepDate();
// 結尾的table
	$sep.= "</table>";
	
	return $sep;
}

// *table的第一行是XXXX年XX月
/*
 *利用php函式取得年月的資訊
 *建立table第一行
*/
function title(){
	// *利用php函式取得年月的資訊
	$year = date(Y);
	$mon = date(m);
	
	// *建立table第一行
	$title = "<tr class= 'title'>".
	"<th colspan='7'>".
	"{$year}年{$mon}月".
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
 *用php函式取得該月有幾天
 *用php函式取得今天幾號
 *用php函式取得今天星期幾
 *組合第一周要空幾天
 *第一周為前面有空號
 *中間是連貫沒空號的日期
 *最後一周為後面有空號
 */
function sepDate(){
	// *用php函式取得該月有幾天
	$mon = date('t');
	// *用php函式取得今天幾號
	$today = date('j');
	// *用php函式取得今天星期幾
	$w = date('w');
	
	// *組合第一周要空幾天
	$noDate = noDate($today, $w);
	
	// *第一周為前面有空號
	$sepDate.= firstWeek($noDate, $mon, $today);
	
	// *中間是連貫沒空號的日期
	$sepDate.= midWeek($noDate, $mon, $today);
	
	// *最後一周為後面有空號
	$sepDate.= lastWeek($noDate, $mon, $today);
	
	return $sepDate;
}

// *組合第一周要空幾天
function noDate($today, $w){
	
	if ($today%7==0){
		$noDate = ($w+8)%7;
	}
	if ($today%7==1){
		$noDate = ($w+7)%7;
	}
	if ($today%7==2){
		$noDate = ($w+6)%7;
	}
	if ($today%7==3){
		$noDate = ($w+5)%7;
	}
	if ($today%7==4){
		$noDate = ($w+4)%7;
	}
	if ($today%7==5){
		$noDate = ($w+3)%7;
	}
	if ($today%7==6){
		$noDate = ($w+2)%7;
	}
	return $noDate;
}

// *第一周為前面有空號
/*
*/
function firstWeek($noDate, $mon, $today){
	// $i用於迴圈計算
	$sepDate ="<tr class='trStyle'>";
	for ($i = 1; $i <= 7; $i++){
		$iDays = $i - $noDate;
		
		$sepDate.= "<td";
		
		if ($iDays <= 0){
			$sepDate.= " class='noDate'";
		}else if ($iDays == $today){
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
function midWeek($noDate, $mon, $today){
	// $i用於迴圈計算
	// 算出需要多少空格來放日期，28或35個，以輔助迴圈的上下限
	$cell = (($noDate+$mon) - ($noDate+$mon) % 7);
	for ($i = 8; $i <= $cell; $i++){
		$iDays = $i - $noDate;
		
		if ($i % 7 == 1){
			$sepDate.="<tr class='trStyle'>";
		}
		
		$sepDate.="<td";
		
		if ($iDays == $today){
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
function lastWeek($noDate, $mon, $today){
	// $i用於迴圈計算
	// 最後一周的空格判斷
	$cell_1 = (($noDate+$mon) - ($noDate+$mon) % 7)+1;
	$cell_2 = (($noDate+$mon) - ($noDate+$mon) % 7)+7;
	
	$sepDate.="<tr class='trStyle'>";
	for ($i = $cell_1; $i <= $cell_2; $i++){
		$iDays = $i - $noDate;
		
		$sepDate.= "<td";
		
		if ($iDays == $today){
			$sepDate.= " class='today'";
		}else if($iDays >= $mon + 1){
			$sepDate.= " class='noDate'";
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