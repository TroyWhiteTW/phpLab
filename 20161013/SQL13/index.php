<?php
ini_set("display_errors", "On"); // ��ܿ��~�O�_���}( On=�}, Off=�� )
error_reporting(E_ALL & ~E_NOTICE);
// ���@�ӤW�b�������G�B�U�b������J���O�� SQLite �u��
/*
*���@�ӤW�b�������G�A�U�b������J���O���ϰ�
�W�b���e����ܰϰ�
	��U�b����J���y�k����
	�p�G GET['db'] = ''�A�Q��glob()�C�X�ثe������ DB
	��J�y�k��ܥX��ƪ��
�U�b����J���O�ϰ�
	��J DB -> GET['db']
	��J DATA -> GET['data']
*/
include_once('func.php');
$html='';
main();
function main(){
	global $html;
	$input_db = $_GET['db'];
	$input_syntax = $_GET['syntax'];
// *���@�ӤW�b�������G�A�U�b������J���O���ϰ�
// �W�b���L�X���G
	$html[] = adm_res($input_db, $input_syntax);
	$html[] = '<hr />';
// �U�b����J�ϰ�
	$html[] = adm_inputSyntax();
	$html = implode('', $html);
	return $html;
}
echo $html;
?>