<?php
ini_set("display_errors", "On"); // ��ܿ��~�O�_���}( On=�}, Off=�� )
error_reporting(E_ALL & ~E_NOTICE);
// ���@�ӤW�b�������G�B�U�b������J���O�� SQLite �u��
/*
*���@�ӤW�b�������G�A�U�b������J���O���ϰ�
�W�b��
	�p�GGET=''
		*������ DB -> ��J DB
			�|�Ψ�glob()�o�Ө禡
	�p�GGET='DB'
		*������ TABLE -> ��J TABLE
			�|�Ψ�SELECT * FROM sqlite_master WHERE type="table"�o�ӻy�k
	GET='TABLE'
		*������ DATA -> ��J�y�k
			
�U�b��
	�p�GGET=''
		*������ DB -> ��J DB
			��J��DB��forn+GET�覡�ǵ����TABLE�ݭn�Ϊ��a��
	�p�GGET='DB'
		*������ TABLE -> ��J TABLE
			��J��TABLE��forn+GET�覡�ǵ����DATA�ݭn�Ϊ��a��
	GET='TABLE'
		*������ DATA -> ��J�y�k
			�e�X���O�᭫��e��
*/
include_once('func.php');
main();
function main(){
	$db = $_GET['db'];
	$table = $_GET['table'];
	$syntax = $_GET['syntax'];
// *���@�ӤW�b�������G�A�U�b������J���O���ϰ�
// �W�b���L�X���G
	adm_res($db, $table, $syntax);
	echo '<hr />';
// �U�b����J�ϰ�
	adm_inputSyntax();
}
?>