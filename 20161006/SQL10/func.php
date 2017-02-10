<?php
// 上半部印出結果
/*
*如果 GET['db'] = ''，利用glob()列出目前有哪些 DB
*輸入了DB和TABLE後程式執行換成語法字串
	如果輸入DB，TABLE=''會顯示出DB中有哪些TABLE	
	如果輸入DB、TABLE、DATA=''，會顯示TABLE的資料內容，預計用表格呈現
		並設定 $db = new SQLite3($db);
		SELECT TABLE
	如果輸入DB、TABLE、DATA則是執行語法，執行完後仍然會把資料內容表格呈現出來
		LIST TABLE
		CREATE TABLE
		DROP TABLE
		SELECT TABLE
*/
function adm_res($input_db, $input_table, $input_syntax){
	if ($input_db == ''){
		show_DB();// 顯示出目前有哪些DB可以使用
	}else if (in_array($input_db, glob("*.db")) && $input_table == '' && $input_syntax == ''){
		show_TABLE($input_db);// 顯示出DB中有哪些TABLE
	}else if ($input_db !== '' && $input_table !== '' && $input_syntax == ''){
		show_DATA($input_db, $input_table);// 顯示TABLE裡面的資料內容
	}else if ($input_db !== '' && $input_table !== '' && $input_syntax !== ''){
		run_syntax($input_db, $input_table, $input_syntax);// 輸入語法增刪修DATA，再重新show出DATA
	}
}
// 下半部輸入區域
function adm_inputSyntax(){
	$inputSyntax[]='<form action="index.php" method="get">';
	$inputSyntax[]='DB：<textarea rows="4" cols="50" name="db"></textarea><br />';
	$inputSyntax[]='TABLE：<textarea rows="4" cols="50" name="table"></textarea><br />';
	$inputSyntax[]='輸入語法：<textarea rows="4" cols="50" name="syntax"></textarea><br />';
	$inputSyntax[]='<input type="submit" value="送出">';
	$inputSyntax[]='</form>';
	$inputSyntax = implode("\n",$inputSyntax);
	echo $inputSyntax;
}
// 顯示出目前有哪些DB可以使用
function show_DB(){
	foreach (glob("*.db") as $filename) {
		echo "$filename size ".filesize($filename).'<br />'."\n";
	}
}
// 顯示出DB中有哪些TABLE
function show_TABLE($input_db){
	$db = new SQLite3($input_db);
	$query = $db->query('SELECT * FROM sqlite_master WHERE type="table"');
	while ($table = $query->fetchArray(SQLITE3_ASSOC)) {
		echo $table['name'] . '<br />' . "\n";
	}
}
// 顯示TABLE裡面的資料內容
function show_DATA($input_db, $input_table){
	$db = new SQLite3($input_db);
	$query = $db->query("SELECT * FROM $input_table");
	cre_table($query);
}
// 輸入語法增刪修DATA，再重新show出DATA
function run_syntax($input_db, $input_table, $input_syntax){
	$db = new SQLite3($input_db);
	$db->query($input_syntax);
	$query = $db->query("SELECT * FROM $input_table");
	cre_table($query);
}
// 產生表格顯示DATA
function cre_table($query){
	echo '<table border="1" width="50%" align="center">';
	while ($row = $query->fetchArray()) {
		echo '<tr><td>'.$row['id'].'</td><td>'.$row['a'].'</td></tr>';
	}
	echo '</table>';
}
?>