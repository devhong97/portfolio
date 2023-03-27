<div class="register_table_wrap">
	<form name="register_form" method="post" action="?mode=query&action=insert">
		<table class="register_table">
			<thead>
				<tr>
					<th colspan="2">회원가입</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>아이디</td>
					<td><input type="text" name="user_id" placeholder="아이디"></td>
				</tr>
				<tr>
					<td>비밀번호</td>
					<td><input type="text" name="password" placeholder="비밀번호"></td>
				</tr>		
				<tr>
					<td>이름</td>
					<td><input type="text" name="user_name" placeholder="이름"></td>
				</tr>
				<tr>
					<td>생년월일</td>
					<td><input type="text" name="birthday" placeholder="생년월일"></td>
				</tr>			
				<tr>
					<td>이메일</td>
					<td><input type="text" name="email" placeholder="이메일"></td>
				</tr>
				<tr>
					<td>전화번호</td>
					<td><input type="text" name="user_tel_number" placeholder="전화번호"></td>
				</tr>		
				<tr>
					<td>성별</td>
					<td>남<input type="radio" name="gender" value="man">
						여<input type="radio" name="gender" value="woman">
					</td>
				</tr>						
			</tbody>
		</table>
		<div class="register_wrap">
			<div class="use_btn_wrap">
				<span class="search_btn"><a href="javascript:;" onclick= "register_check();">확인</a></span>
				<span class="register_btn"><a href="<?=$useUrl?>">취소</a></span>
			</div><!-- use_btn_wrap end -->
		</div><!-- register_wrap end -->
	</form>
</div><!-- register_table_wrap end -->

<script>
//──────────────────────────────────────────────────────────────────────────────────────
// 아이디/비밀번호 입력 CHECK
//──────────────────────────────────────────────────────────────────────────────────────
function register_check() {
//──────────────────────────────────────────────────────────────────────────────────────
var user_id = register_form.user_id.value;
	if (user_id == "") {
	alert("아이디를 입력하세요.");
	register_form.user_id.focus(); 
	return false;
}
//──────────────────────────────────────────────────────────────────────────────────────
var password = register_form.password.value;
	if (password == "") {
	alert("비밀번호를 입력하세요.");
	register_form.password.focus(); 
	return false;
}
//──────────────────────────────────────────────────────────────────────────────────────
var user_name = register_form.user_name.value;
	if (user_name == "") {
	alert("이름을 입력하세요.");
	register_form.user_name.focus(); 
	return false;
}
//──────────────────────────────────────────────────────────────────────────────────────
var birthday = register_form.birthday.value;
	if (birthday == "") {
	alert("생년월일을 입력하세요.");
	register_form.birthday.focus(); 
	return false;
}
//──────────────────────────────────────────────────────────────────────────────────────
var email = register_form.email.value;
	if (email == "") {
	alert("이메일을 입력하세요.");
	register_form.email.focus(); 
	return false;
}
//──────────────────────────────────────────────────────────────────────────────────────
var user_tel_number = register_form.user_tel_number.value;
	if (user_tel_number == "") {
	alert("전화번호를 입력하세요.");
	register_form.user_tel_number.focus(); 
	return false;
}
//──────────────────────────────────────────────────────────────────────────────────────
var gender = register_form.gender.value;
	if (gender == "") {
	alert("성별을 입력하세요.");
	register_form.gender.focus(); 
	return false;
}
//──────────────────────────────────────────────────────────────────────────────────────
register_form.submit();
}
//──────────────────────────────────────────────────────────────────────────────────────
</script>