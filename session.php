<? 
	session_cache_limiter("no-cache, must-revalidate");
	session_start(); 
?>


<?
// 로그인 시 생선된 세션 사용
global $MEMBER_ID, $MEMBER_PW, $MEMBER_NM, $MEMBER_GRADE, $MEMBER_TEL_NO1, $MEMBER_TEL_NO2, $MEMBER_TEL_NO3, $MEMBER_BIRTHDAY, $MEMBER_GENDER;

if( isset($_SESSION["USER_ID"])  ){	
	
	$MEMBER_ID					= $_SESSION["USER_ID"];
	$MEMBER_PW					= $_SESSION["USER_PW"];			
	$MEMBER_NM					= $_SESSION["USER_NM"];	
	$MEMBER_EMAIL				= $_SESSION["USER_EMAIL"];
	$MEMBER_GRADE				= $_SESSION["USER_GRADE"];	
	$MEMBER_TEL					= $_SESSION["USER_TEL"];
	//$MEMBER_BITRHDAY		= $_SESSION["USER_BIRTHDAY"];
	//$MEMBER_GENDER			= $_SESSION["USER_GENDER"];
	$MEMBER_COUNT				= $_SESSION["USER_COUNT"];
	$MEMBER_DAY					= $_SESSION["USER_DAY"];
	$MEMBER_RGT					= $_SESSION["USER_RGT"];
	$MEMBER_IP					= $_SESSION["USER_IP"];

}
?>	
