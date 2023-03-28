<script> 
//〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓
// 현재시간
//〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓
function liveTime() {
   today			= new Date();
   tdy				= today.getDate();
   hours			= today.getHours();
   minutes		= today.getMinutes();
   seconds		= today.getSeconds();

   if(hours<0){
      tdy-=1;
      hours+=24;
   }
   livetime.innerHTML = "[ 현재시간: " + ("00"+ hours).slice(-2) + "시 " + ("00"+ minutes).slice(-2) + "분 " + ("00"+ seconds).slice(-2) + "초 ]";
   setTimeout("liveTime()", 1000);
}
onload=liveTime;
//〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓
</script>

<div class="top_wrap">
	<div class="mh_top_time">
		<ul>
			<li><span id="livetime"></span></li>
		</ul>
	</div>
	<div class="mh_top_sns">
		<ul>
			<li><a href="https://github.com/devhong97" target="_blank"><img src="<?=$useUrl?>/resource/img/main_github.png"></a></li>
			<li><a href="https://www.instagram.com/str_hs_/" target="_blank"><img src="<?=$useUrl?>/resource/img/main_instagram.png"></a></li>
			<li><a href="https://www.facebook.com/hongs2a" target="_blank"><img src="<?=$useUrl?>/resource/img/main_facebook.png"></a></li>
		</ul>
	</div>
</div>

<div class="header_wrap">

	<div class="mh_logo">
		<a href="<?=$useUrl?>/index.php"><img src="<?=$useUrl?>/resource/img/main_logo.png"></a>
	</div>

	<div class="mh_content">
		<ul>
			<li><a href="<?=$useUrl?>/user/node/?mode=01" class="on">ABOUT ME</a></li>
			<li><a href="<?=$useUrl?>/user/node/?mode=02">SKILLS</a></li>
			<li><a href="<?=$useUrl?>/user/node/?mode=03">PORTFOLIO</a></li>
			<li><a href="<?=$useUrl?>/user/node/?mode=04">CONTACT US</a></li>
			<li><a href="<?=$useUrl?>/board/index.php">BBS</a></li>
			<li><a href="<?=$useUrl?>/admin/index.php">관리자페이지(임시)</a></li>			
		</ul>
	</div>

	<div class="mh_login">
		<ul class="pc_login_menu">
			<? if($MEMBER_ID == "") { ?>
			<li><a href="<?=$useUrl?>/user/?mode=login">로그인</a></li>
			<li><a href="<?=$useUrl?>/user/?mode=register">회원가입</a></li>
			<li><a href="<?=$useUrl?>/user/?mode=search_id">ID/PW 찾기</a></li>			
			<? } else { ?>
			<li><a href="<?=$useUrl?>/user/?mode=logout">로그아웃</a></li>
			<li><a href="<?=$useUrl?>/user/?mode=mypage">내정보</a></li>
			<? } ?>
		</ul>

		<? if($MEMBER_ID != "") { ?>
		<div class="welcome">
			<ul>
				<li><?=$MEMBER_ID?>님 환영합니다</li>		
			</ul>
		</div>
		<? } ?>
		
		<!-- mobile start -->
		<ul class="mobile_login_menu">
			<li><a href=""><img src="<?=$useUrl?>/resource/img/main_hamburger.png"></a></li>
		</ul>
		<!-- mobile end -->
	</div>

</div>
