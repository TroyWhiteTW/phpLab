<?php
// 上半部印出結果
/*
*如果 GET['db'] = ''，利用glob()列出目前有哪些 DB
*輸入語法顯示出資料表格
	*把下半部輸入的語法執行
*/
function adm_res($input_db, $input_syntax){
	if ($input_db == ''){
		show_DB();// 顯示出目前有哪些DB可以使用
	}else if ($input_db !== '' && $input_syntax !== ''){
		$r = run_syntax($input_db, $input_syntax);// 執行輸入的語法
		cre_table($r);// 顯示表格
	}
}
// 下半部輸入區域
function adm_inputSyntax(){
	$inputSyntax[]='<form action="index.php" method="get">';
	$inputSyntax[]='DB：<textarea rows="4" cols="50" name="db"></textarea><br />';
	$inputSyntax[]='輸入語法：<textarea rows="4" cols="50" name="syntax"></textarea><br />';
	$inputSyntax[]='<input type="submit" value="送出">';
	$inputSyntax[]='</form>';
	$inputSyntax = implode("\n",$inputSyntax);
	return $inputSyntax;
}
// 顯示出目前有哪些DB可以使用
function show_DB(){
	foreach (glob("*.db") as $filename) {
		echo "$filename size ".filesize($filename).'<br />'."\n";
	}
}
// 執行輸入的語法並顯示資料表格
/*
*先跟 SQLite 拿所有的資料回來，這個資料會是一個陣列
*產生表格
	先分析資料陣列的第一筆結構如何
		需要知道有幾個欄位
		array_key取得欄位名稱
		產生table的第一行（欄位名稱）
	產生資料表格的資料欄位，以及填值
*/
function run_syntax($input_db, $input_syntax){
	$db = new SQLite3($input_db);
	$query = $db->query($input_syntax);// 不是SELECT會出現$r參數錯誤
	while ($row = $query->fetchArray(SQLITE3_ASSOC)) {
		$r[] = $row;
	}
	return $r;
}
// 產生表格
function cre_table($r){
	echo '<table border="1" width="50%" align="center">';
	firstLine($r);
	fillData($r);
	echo '</table>';
}
function firstLine($r){
	$a = array_keys($r[0]);
	echo '<tr>';
	for ($i = 0; $i < count($a); $i++){
		echo"<td>$a[$i]</td>";
	}
	echo '</tr>';
}
function fillData($r){
	$a = array_values($r);
	for ($i = 0; $i < count($a); $i++){
		$b = array_values($r[$i]);
		echo"<tr><td>$b[0]</td><td>$b[1]</td></tr>";
	}
}

?>