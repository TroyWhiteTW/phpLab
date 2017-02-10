<?php
// 上半部印出結果
/*
*如果GET=''會顯示出目前有哪些DB可以使用
*如果GET='DB'會顯示出DB中有哪些TABLE
*如果GET='TABLE'會顯示TABLE裡面的資料內容
*/
function adm_res($db, $table, $syntax){
	if ($db == ''){
		show_DB();
	}else if (in_array($db, glob("*.db"))){
		show_TABLE($db);
	}else if ($input == 'alex'){

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
function show_TABLE($db){
	$db = new SQLite3($db);
	$query = $db->query('SELECT * FROM sqlite_master WHERE type="table"');
	while ($table = $query->fetchArray(SQLITE3_ASSOC)) {
		echo $table['name'] . '<br />' . "\n";
	}
}
// 顯示TABLE裡面的資料內容
function show_DATA(){
	
}
?>