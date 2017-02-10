<?php
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
	$str ['sun']='<th class="weekend" width="120">日</th>';
	$str ['mon']='<th width="120">一</th>';
	$str ['tues']='<th width="120">二</th>';
	$str ['wed']='<th width="120">三</th>';
	$str ['thurs']='<th width="120">四</th>';
	$str ['fri']='<th width="120">五</th>';
	$str ['satur']='<th class="weekend" width="120">六</th>';
	$str ['/tr']='</tr>';
	$sWeek = implode("",$str);
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
	// 計算現在這個月有多少天，利用下一個月得知這個月共有幾天，存在$lastday
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
 *把陣列組回字串
*/
function sCreCal($noDate, $monDays, $iYear, $iMon, $iDate){
	// *產生空陣列，利用迴圈來產生裡面的元素，再組合成字串傳出function
	$str = array();
	// *做出一個空陣列讓迴圈內改變其內容，而不是在迴圈內產生陣列或字串
	// $str [$i]=",<td,,>,,<br />,,</td>,";
	$as [-1] = '&ensp;<br />';
	$as [0] = '';
	$as [1] = '<br />';
	$as [2] = '<font size="3">';
	$as [3] = '&ensp;';
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
	for ($i = 1; $i <= $cell; $i++){ // $i用於迴圈計算，$i下限是1，上限則是一個禮拜需要7格來放日期
		$iDays = $i - $noDate;
		// 利用已經先產生的空陣列，直接指向並改變內容
		$str [$i]=$aTmp;
		// *指定或更改陣列內的內容
		if ($i % 7 == 1){
			$str [$i][0]='<tr class="trStyle">';
			$str [$i][2]=' class="weekend"';
		}
		if ($i % 7 == 0){
			$str [$i][2]=' class="weekend"';
			$str [$i][6]='</tr>';
		}
		if ($iDays > 0 && $iDays < $monDays + 1){
			$str [$i][4][0]=$iDays;
		}else{
			$str [$i][2]=' class="noDate"';
		}
		// *拿年月日去問是不是假日
		$h = holiday($iYear, $iMon, $iDays, $noDate);
		if ($h[$iMon][$iDays][0] == 1){
			if ($h[$iMon][$iDays][3] == 1){
				$str [$i][2]=' class="holiday"';
			}
			$str [$i][4][0]=$iDays;
			$str [$i][4][3]=$h[$iMon][$iDays][2];
			$str [$i][4][-1]='';
			$str [$i][4][5]='';
		}
		$str [$i][4] = implode("",$str [$i][4]); // 先把日期內容的陣列組回字串
	}
	// *指定或更改內容
	$i = $iDate+$noDate; // 今天的日期
	if (array_key_exists($i, $str)){
		$str [$i][2]=' class="today"';
	}
	// *把陣列組回字串
	// 把二維陣列的內容組成字串
	for ($i = 1; $i <= $cell; $i++){
		$str [$i] = implode("",$str [$i]);
	}
	// 把一維陣列組成字串傳出function讓外面使用
	$sCreCal = implode("",$str);
	return $sCreCal;
}
// *第一周為前面有空號
/*
 *產生空陣列，利用迴圈來產生裡面的元素，再組合成字串傳出function
 *做出一個空陣列讓迴圈內改變其內容，而不是在迴圈內產生陣列或字串
 *指定或更改陣列內的內容
 *拿年月日去問是不是假日
 *把陣列組回字串
*/
function firstWeek($noDate, $monDays, $iYear, $iMon, $iDate){
	// *產生空陣列，利用迴圈來產生裡面的元素，再組合成字串傳出function
	$str = array();
	// *做出一個空陣列讓迴圈內改變其內容，而不是在迴圈內產生陣列或字串
	// $str [$i]=",<td,,>,,<br />,,</td>,";
	$as [-1] = '&ensp;<br />';
	$as [0] = '';
	$as [1] = '<br />';
	$as [2] = '<font size="3">';
	$as [3] = '&ensp;';
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
	for ($i = 1; $i <= 7; $i++){ // $i用於迴圈計算，$i下限是1，上限則是一個禮拜需要7格來放日期
		$iDays = $i - $noDate;
		// 利用已經先產生的空陣列，直接指向並改變內容
		$str [$i]=$aTmp;
		// *指定或更改陣列內的內容
		if ($i % 7 == 1){
			$str [$i][0]='<tr class="trStyle">';
			$str [$i][2]=' class="weekend"';
		}
		if ($i % 7 == 0){
			$str [$i][2]=' class="weekend"';
			$str [$i][6]='</tr>';
		}
		if ($iDays > 0){
			$str [$i][4][0]=$iDays;
		}else{
			$str [$i][2]=' class="noDate"';
		}
		// *拿年月日去問是不是假日
		$h = holiday($iYear, $iMon, $iDays, $noDate);
		if ($h[$iMon][$iDays][0] == 1){
			if ($h[$iMon][$iDays][3] == 1){
				$str [$i][2]=' class="holiday"';
			}
			$str [$i][4][0]=$iDays;
			$str [$i][4][3]=$h[$iMon][$iDays][2];
			$str [$i][4][-1]='';
			$str [$i][4][5]='';
		}
		$str [$i][4] = implode("",$str [$i][4]); // 先把日期內容的陣列組回字串
	}
	// *指定或更改內容
	$i = $iDate+$noDate;
	if (array_key_exists($i, $str)){
		$str [$i][2]=' class="today"';
	}
	// *把陣列組回字串
	// 把二維陣列的內容組成字串
	for ($i = 1; $i <= 7; $i++){
		$str [$i] = implode("",$str [$i]);
	}
	// 把一維陣列組成字串傳出function讓外面使用
	$sFirstWeek = implode("",$str);
	return $sFirstWeek;
}
// *中間是連貫沒空號的日期
/*
 *產生空陣列，利用迴圈來產生裡面的元素，再組合成字串傳出function
 *做出一個空陣列讓迴圈內改變其內容，而不是在迴圈內產生陣列或字串
 *指定或更改陣列內的內容
 *拿年月日去問是不是假日
 *把陣列組回字串
*/
function midWeek($noDate, $monDays, $iYear, $iMon, $iDate){
	// *產生空陣列，利用迴圈來產生裡面的元素，再組合成字串傳出function
	$str = array();
	// *做出一個空陣列讓迴圈內改變其內容，而不是在迴圈內產生陣列或字串
	// $str [$i]=",<td,,>,,<br />,,</td>,";
	$as [-1] = '&ensp;<br />';
	$as [0] = '';
	$as [1] = '<br />';
	$as [2] = '<font size="3">';
	$as [3] = '&ensp;';
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
		$cell = 21;
	}else if ($k > 28 && $k <= 35){
		$cell = 28;
	}else if ($k > 35 && $k <= 42){
		$cell = 35;
	}
	for ($i = 8; $i <= $cell; $i++){ // $i用於迴圈計算，$i下限是前面的上限，上限則是最多要多少空格-7
		$iDays = $i - $noDate;
		// 利用已經先產生的空陣列，直接指向並改變內容
		$str [$i]=$aTmp;
		$str [$i][4][0]=$iDays;
		// *指定或更改陣列內的內容
		if ($i % 7== 1){
			$str [$i][0]='<tr class="trStyle">';
			$str [$i][2]=' class="weekend"';
		}
		if ($i % 7== 0){
			$str [$i][2]=' class="weekend"';
			$str [$i][6]='</tr>';
		}
		// *拿年月日去問是不是假日
		$h = holiday($iYear, $iMon, $iDays, $noDate);
		if ($h[$iMon][$iDays][0] == 1){
			if ($h[$iMon][$iDays][3] == 1){
				$str [$i][2]=' class="holiday"';
			}
			$str [$i][4][0]=$iDays;
			$str [$i][4][3]=$h[$iMon][$iDays][2];
			$str [$i][4][-1]='';
			$str [$i][4][5]='';
		}
		$str [$i][4] = implode("",$str [$i][4]); // 先把日期內容的陣列組回字串
	}
	// *指定或更改內容
	$i = $iDate+$noDate;
	if (array_key_exists($i, $str)){
		$str [$i][2]=' class="today"';
	}
	// *把陣列組回字串
	// 把二維陣列的內容組成字串
	for ($i = 8; $i <= $cell; $i++){
		$str [$i] = implode("",$str [$i]);
	}
	// 把一維陣列組成字串傳出function讓外面使用
	$sMidWeek = implode("",$str);
	return $sMidWeek;
}
// *最後一周為後面有空號
/*
 *產生空陣列，利用迴圈來產生裡面的元素，再組合成字串傳出function
 *做出一個空陣列讓迴圈內改變其內容，而不是在迴圈內產生陣列或字串
 *指定或更改陣列內的內容
 *拿年月日去問是不是假日
 *把陣列組回字串
*/
function lastWeek($noDate, $monDays, $iYear, $iMon, $iDate){
	// *產生空陣列，利用迴圈來產生裡面的元素，再組合成字串傳出function
	$str = array();
	// *做出一個空陣列讓迴圈內改變其內容，而不是在迴圈內產生陣列或字串
	// $str [$i]=",<td,,>,,<br />,,</td>,";
	$as [-1] = '&ensp;<br />';
	$as [0] = '';
	$as [1] = '<br />';
	$as [2] = '<font size="3">';
	$as [3] = '&ensp;';
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
		$cell = 21;
	}else if ($k > 28 && $k <= 35){
		$cell = 28;
	}else if ($k > 35 && $k <= 42){
		$cell = 35;
	}
	$cell_1 = $cell+1;
	$cell_2 = $cell+7;
	for ($i = $cell_1; $i <= $cell_2; $i++){ // $i用於迴圈計算，$i下限是前面的上限，上限則是下限+7
		$iDays = $i - $noDate;
		// 利用已經先產生的空陣列，直接指向並改變內容
		$str [$i]=$aTmp;
		// *指定或更改陣列內的內容
		if ($i % 7== 1){
			$str [$i][0]='<tr class="trStyle">';
			$str [$i][2]=' class="weekend"';
		}
		if ($i % 7== 0){
			$str [$i][2]=' class="weekend"';
			$str [$i][6]='</tr>';
		}
		if ($iDays < $monDays + 1){
			$str [$i][4][0]=$iDays;
		}else{
			$str [$i][2]=' class="noDate"';
		}
		// *拿年月日去問是不是假日
		$h = holiday($iYear, $iMon, $iDays, $noDate);
		if ($h[$iMon][$iDays][0] == 1){
			if ($h[$iMon][$iDays][3] == 1){
				$str [$i][2]=' class="holiday"';
			}
			$str [$i][4][0]=$iDays;
			$str [$i][4][3]=$h[$iMon][$iDays][2];
			$str [$i][4][-1]='';
			$str [$i][4][5]='';
		}
		$str [$i][4] = implode("",$str [$i][4]); // 先把日期內容的陣列組回字串
	}
	// *指定或更改內容
	$i = $iDate+$noDate;
	if (array_key_exists($i, $str)){
		$str [$i][2]=' class="today"';
	}
	// *把陣列組回字串
	// 把二維陣列的內容組成字串
	for ($i = $cell_1; $i <= $cell_2; $i++){
		$str [$i] = implode("",$str [$i]);
	}
	// 把一維陣列組成字串傳出function讓外面使用
	$sLastWeek = implode("",$str);
	return $sLastWeek;
}
// *拿年月日去問是不是假日
/*
*做出節日與年月日的陣列對照表
*處理節日開始年分的問題
*/
function holiday($iYear, $iMon, $iDays, $noDate){
	// *做出節日與年月日的陣列對照表
	// $h [月][日] = [是否為節日 ,開始年分, 節慶名稱, 是不是要放假];
	$h = array();
	$h [$iMon][$iDays] = array(0, 0, '', 0);
	$h [1][1] = array(1, 1912, '元旦', 1);
	$h [2][28] = array(1, 1997, '和平紀念日', 1);
	$h [3][8] = array(1, 1924, '婦女節', 0);
	$h [3][29] = array(1, 1948, '青年節', 0);
	$h [4][4] = array(1, 1931, '兒童節<br />掃墓節', 1);
	$h [5][1] = array(1, 1985, '勞動節', 1);
	// if ($noDate == 0){
		// $h [5][8] = array(1, 1913, '母親節');
	// }else{
		// $h [5][15 - $noDate] = array(1, 1913, '母親節');
	// }
	$h [5][$noDate==0?8:15-$noDate] = array(1, 1913, '母親節', 1);
	$h [9][3] = array(1, 1955, '軍人節', 0);
	$h [9][28] = array(1, 1952, '教師節', 0);
	$h [10][10] = array(1, 1912, '國慶日', 1);
	$h [12][25] = array(1, 1963, '行憲紀念日', 0);
	// *處理節日開始年分的問題
	// 如果傳入的年份比開始的年份小，則把控制是否是節日的$h [$iMon][$iDays][0]改為0
	if ($h [$iMon][$iDays][1] > $iYear){
		$h [$iMon][$iDays][0] = 0;
	}
	return $h;
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
?>