<?
	//〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓
	//SESSION 변수 정의
	//〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓
	$_SESSION["USER_ID"]				= $user_id;
	$_SESSION["USER_PW"]				= $password;
	$_SESSION["USER_NM"]				= $user_name;
	$_SESSION["USER_EMAIL"]			= $email;	
	$_SESSION["USER_TEL"]				= $user_tel_number;
	$_SESSION["USER_GRADE"]			= $user_grade;
	$_SESSION["USER_COUNT"]			= $visit_count;
	$_SESSION["USER_DAY"]				= $visit_day;
	$_SESSION["USER_RGT"]				= $reg_date;	
	$_SESSION["USER_IP"]				= $ip;
	
	$MEMBER_ID	= $_SESSION["USER_ID"];
	//〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓	
?>
<script>
	alert("로그인 되었습니다.");
	window.location.href="<?=$useUrl?>/";
</script>	

<?

	//──────────────────────────────────────────────────────────────────────────────────────
	// 회원정보 sql
	//──────────────────────────────────────────────────────────────────────────────────────
	/* $login_sql = "select * from user_info where user_id = '$user_id'";
	$stmt = $conn -> prepare($login_sql);
	$stmt -> execute();
	$row = $stmt -> fetch(PDO::FETCH_ASSOC);
		
	$number							= $row["number"];
	$user_id						= $row["user_id"];
	$password						= $row["password"];
	$user_name					= $row["user_name"];
	$email							= $row["email"];
	$user_tel_number		= $row["user_tel_number"];
	$user_grade					= $row["user_grade"];
	$visit_count				= $row["visit_count"];	
	$visit_day					= $row["visit_day"];	
	$reg_date						= $row["reg_date"];	
	$ip									= $row["ip"];	*/
	
?>