<?php
ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
error_reporting(E_ALL & ~E_NOTICE);
// (1) 首頁 - 登入頁面 (index.php)
// (2) php連結MySQL資料庫語法(mysql_connect.inc.php)
// (3) 會員ID、PW與MySQL資料庫作認證(connect.php)
// (4) 會員登入成功後 頁面 - 此頁面有「新增」、「修改」、「刪除」與「登出」的連結
	// 並且會顯示出所有會員資料(member.php)
// (5)  登出 - 洗掉登入使用者之session(logout.php)
// (6) 加入(註冊)會員 - 「填寫」會員資料 (register.php)
// (7) 加入(註冊)會員 - 「新增」會員資料進MySQL資料庫 (register_finish.php)
// (8) 修改會員資料 - 「填寫」要修改之會員資料(update.php)
// (9) 修改會員資料 - 「更新」要修改之會員資料進MySQL資料庫(update_finish.php)
// (10) 刪除會員資料 - 「填寫」要刪除之會員帳號(delete.php)
// (11) 刪除會員資料 - 對MySQL資料庫進行「刪除」會員資料(delete_finish.php)
?>
<form name="form" method="post" action="connect.php">
帳號：<input type="text" name="id" /> <br>
密碼：<input type="password" name="pw" /> <br>
<input type="submit" name="button" value="登入" />&nbsp;&nbsp;
<a href="register.php">申請帳號</a>
</form>