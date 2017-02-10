<?php
// *說明
// introduce my syntax
function adm_introduction(){
	$introduction[]='使用LIST TABLE指令可以列出資料庫中所有資料表';
	$introduction[]='查看整張表的資料';
	$introduction[]='SELECT * FROM';
	$introduction[]='INSERT INTO';
	$introduction[]='DELETE';
	$introduction[]='UPDATE';
	$introduction = implode("<br />\n", $introduction);
	echo $introduction."<br />\n";
}
// *分析字串
// return array that be used by another function
function adm_inputString(){
	
}
// *輸入SQLite語法的區域
function adm_inputSyntax(){
	$inputSyntax[]='<form action="index.php" method="post">';
	$inputSyntax[]='輸入語法：<textarea rows="4" cols="50" name="syntax"></textarea>';
	$inputSyntax[]='<input type="submit" value="送出">';
	$inputSyntax[]='</form>';
	$inputSyntax = implode("\n", $inputSyntax);
	return $inputSyntax;
}
// *執行語法
/*
*如果輸入LIST TABLE，執行XX
*如果輸入一般的語法則直接執行
*/
function adm_runSyntax($syntax){
	if ($syntax == 'LIST TABLE'){
		$db = new SQLite3('test01');
		$query = $db->query('SELECT * FROM sqlite_master WHERE type="table"');
	}else{
		$db = new SQLite3('test01');
		$query = $db->query($syntax);
	}
	$db->close();
}
// *顯示輸入的語法
function adm_outputSyntax($syntax){
	if ($syntax == 'LIST TABLE'){
		return 'SELECT * FROM sqlite_master WHERE type="table"';
	}else{
		return $syntax;
	}
}
// *顯示結果
/*
*如果輸入的是LIST TABLE，顯示XX
*如果輸入的是查詢資料表內的內容，則條列或表格出結果
*/
function adm_showData($syntax){
	if ($syntax == 'LIST TABLE'){
		$db = new SQLite3('test01');
		$query = $db->query('SELECT * FROM sqlite_master WHERE type="table"');
		while ($table = $query->fetchArray(SQLITE3_ASSOC)) {
			echo $table['name'] . '<br />' . "\n";
		}
	}
	else{
		$db = new SQLite3('test01');
		$query = $db->query('SELECT * FROM alex');
		while ($row = $query->fetchArray()) {
			echo $row['id'];
		}
	}
	$db->close();
}
?>