<?
	session_unset();
	session_destroy();
?>
<script>
	alert("로그아웃 되었습니다.");
	window.location.href="<?=$useUrl?>/";
</script>