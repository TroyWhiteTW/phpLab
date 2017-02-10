<?php
// *輸入SQLite語法
function adm_inputSyntax(){
	$inputSyntax[]='<form action="index.php" method="post">';
	$inputSyntax[]='<p>輸入語法：<input type="text" name="syntax" /></p>';
	$inputSyntax[]='<input type="submit" value="送出">';
	$inputSyntax[]='</form>';
	$inputSyntax = implode("\n",$inputSyntax);
	return $inputSyntax;
}
// *執行語法
/*
*如果輸入LIST DB，執行XX
*如果輸入LIST TABLE，執行XX
*一般語法
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
/*
*如果輸入LIST DB，顯示XX
*如果輸入LIST TABLE，顯示XX
*一般語法
*/
function adm_outputSyntax($syntax){
	if ($syntax == 'LIST TABLE'){
		return 'SELECT * FROM sqlite_master WHERE type="table"';
	}else{
		return $syntax;
	}
}
// *顯示結果
/*
*顯示資料列表或是表格
*/
function adm_showData($syntax){
	if ($syntax == 'LIST TABLE'){
		$db = new SQLite3('test01');
		$query = $db->query('SELECT * FROM sqlite_master WHERE type="table"');
		while ($table = $query->fetchArray(SQLITE3_ASSOC)) {
			echo $table['name'] . '<br />' . "\n";
		}
	}
}
?>