<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>메일테스트</title>
<style type="text/css">
body {margin:0;padding:0;text-align:center;color:#333;font-size:12px;line-height:40px;}
</style>
</head>
<body>
	<?
		$name_01=$_POST["name"];
		$mail_02=$_POST["mail_add"];
		$msg_03 =$_POST["message"];		
		
		$to="legendofygh@naver.com";
		$subject="메일보내기실험";
		$msg="보낸사람:$name_01"."보낸사람메일주소:$mail_02"."내용:$msg_03";
		mail($to, $subject, $msg);
		
		echo '이름:'.$name_01."<br>";
		echo '메일:'.$mail_02."<br>";
		echo '내용:'.$msg_03."<br>";
		echo '메일이 성공적으로 전송되었습니다<br>';		
	?>
 </body>
</html>