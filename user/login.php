<div class="login_table_wrap">
	<form name="login_form" method="post" action="?mode=login_ok">
		<table class="login_table">
			<thead>
				<tr>
					<th colspan="2">로그인</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>아이디</td>
					<td><input type="text" name="user_id" placeholder="아이디"></td>
				</tr>
				<tr>
					<td>비밀번호</td>
					<td><input type="password" name="password" placeholder="비밀번호"></td>
				</tr>		
			</tbody>
		</table>
		<div class="btn-box">
			<div class="login-btn-wrap">
				<div class="login-btn"><a href="javascript:;" onclick= "login_check();">로그인</a></div>
			</div><!-- login-btn-wrap end -->
			<div class="search-btn-wrap">
				<div class="search-btn"><a href="#">아이디/비밀번호 찾기</a></div>
				<div class="register-btn"><a href="">회원가입</a></div>
			</div><!-- search-btn-wrap end -->
		</div>
	</form>
</div><!-- login_table_wrap end -->

<script>
//──────────────────────────────────────────────────────────────────────────────────────
// 아이디/비밀번호 입력 CHECK
//──────────────────────────────────────────────────────────────────────────────────────
function login_check() {
//──────────────────────────────────────────────────────────────────────────────────────
var user_id = login_form.user_id.value;
	if (user_id == "") {
	alert("아이디를 입력하세요.");
	login_form.user_id.focus(); 
	return false;
}
//──────────────────────────────────────────────────────────────────────────────────────
var password = login_form.password.value;
	if (password == "") {
	alert("비밀번호를 입력하세요.");
	login_form.password.focus(); 
	return false;
}
//──────────────────────────────────────────────────────────────────────────────────────
login_form.submit();
}
//──────────────────────────────────────────────────────────────────────────────────────
</script>