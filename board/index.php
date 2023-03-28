<?
	//──────────────────────────────────────────────────────────────────────────────────────
	// 기본 URL/SEO 상단/공통 헤더
	//──────────────────────────────────────────────────────────────────────────────────────
	include "../session.php";
	//────────────────────────────────────────────────────────────────────────────────────
	include "../url_setting.php";
	//──────────────────────────────────────────────────────────────────────────────────────
	include $baseUrl."/common/db/common_db.php";
	//──────────────────────────────────────────────────────────────────────────────────────
	include $baseUrl."/common/user/fix_top.php";	
	//──────────────────────────────────────────────────────────────────────────────────────
	include $baseUrl."/common/user/common_header.php";
	//──────────────────────────────────────────────────────────────────────────────────────

	//──────────────────────────────────────────────────────────────────────────────────────
	// mode setting
	//──────────────────────────────────────────────────────────────────────────────────────
	if($mode == "login" or $mode == ""){
		include "login.php";	
	//──────────────────────────────────────────────────────────────────────────────────────
	} else if($mode == "login_ok") {
		include "login_ok.php";	
	//──────────────────────────────────────────────────────────────────────────────────────
	} else if($mode == "logout") {
		include "logout.php";	
	//──────────────────────────────────────────────────────────────────────────────────────
	} else if($mode == "register") {
		include "register.php";	
	//──────────────────────────────────────────────────────────────────────────────────────
	} else if($mode == "register_ok") {
		include "register_ok.php";	
	//──────────────────────────────────────────────────────────────────────────────────────
	} else if($mode == "search_id") {
		include "search_id.php";
	//──────────────────────────────────────────────────────────────────────────────────────
	}else if($mode == "mypage") {
		include "mypage.php";
	//──────────────────────────────────────────────────────────────────────────────────────
	} else if($mode == "query") {
		include "query.php";
	}
	//──────────────────────────────────────────────────────────────────────────────────────

	//──────────────────────────────────────────────────────────────────────────────────────
	// 공통 푸터/SEO 하단
	//──────────────────────────────────────────────────────────────────────────────────────
	include $baseUrl."/common/user/common_footer.php";
	//──────────────────────────────────────────────────────────────────────────────────────
	include $baseUrl."/common/user/fix_bottom.php";
	//──────────────────────────────────────────────────────────────────────────────────────
?>