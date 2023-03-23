<div class="register_table_wrap">
	<form name="login_form" method="post" action="?mode=query">
		<table class="register_table">
			<thead>
				<tr>
					<th colspan="2">회원가입</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>아이디</td>
					<td><input type="text" name="user_id" value="<?=$user_id?>"></td>
				</tr>
				<tr>
					<td>비밀번호</td>
					<td><input type="text" name="password" value="<?=$password?>"></td>
				</tr>		
				<tr>
					<td>이름</td>
					<td><input type="text" name="user_name" value="<?=$user_name?>"></td>
				</tr>
				<tr>
					<td>생년월일</td>
					<td><input type="text" name="birthday" value="<?=$birthday?>"></td>
				</tr>			
				<tr>
					<td>이메일</td>
					<td><input type="text" name="email" value="<?=$email?>"></td>
				</tr>
				<tr>
					<td>전화번호</td>
					<td><input type="text" name="user_tel_number" value="<?=$user_tel_number?>"></td>
				</tr>		
				<tr>
					<td>성별</td>
					<td>남<input type="radio" name="gender" value="man">
							여<input type="radio" name="gender" value="woman">
					</td>
				</tr>						
			</tbody>
		</table>
		<div class="login_wrap">
			<div class="use_btn_wrap">
				<a href="javascript:;" onclick= "login_check();">확인</a>
				<a href="<?=$useUrl?>">취소</a>
			</div><!-- use_btn_wrap end -->
		</div><!-- login_wrap end -->
	</form>
</div><!-- register_table_wrap end -->

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
var user_name = login_form.user_name.value;
	if (user_name == "") {
	alert("이름을 입력하세요.");
	login_form.user_name.focus(); 
	return false;
}
//──────────────────────────────────────────────────────────────────────────────────────
var birthday = login_form.birthday.value;
	if (birthday == "") {
	alert("생년월일을 입력하세요.");
	login_form.birthday.focus(); 
	return false;
}
//──────────────────────────────────────────────────────────────────────────────────────
var email = login_form.email.value;
	if (email == "") {
	alert("이메일을 입력하세요.");
	login_form.email.focus(); 
	return false;
}
//──────────────────────────────────────────────────────────────────────────────────────
var user_tel_number = login_form.user_tel_number.value;
	if (user_tel_number == "") {
	alert("전화번호를 입력하세요.");
	login_form.user_tel_number.focus(); 
	return false;
}
//──────────────────────────────────────────────────────────────────────────────────────
var gender = login_form.gender.value;
	if (gender == "") {
	alert("성별을 입력하세요.");
	login_form.gender.focus(); 
	return false;
}
//──────────────────────────────────────────────────────────────────────────────────────
login_form.submit();
}
//──────────────────────────────────────────────────────────────────────────────────────
</script>