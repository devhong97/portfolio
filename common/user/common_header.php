<div class="top-wrap">
	<div class="top-sns">
		<ul>
			<li><a href="https://github.com/devhong97" target="_blank"><img src="<?=$useUrl?>/resource/img/main_github.png"></a></li>
			<li><a href="https://www.instagram.com/str_hs_/" target="_blank"><img src="<?=$useUrl?>/resource/img/main_instagram.png"></a></li>
			<li><a href="https://www.facebook.com/hongs2a" target="_blank"><img src="<?=$useUrl?>/resource/img/main_facebook.png"></a></li>
		</ul>
	</div>
</div>

<div class="header-wrap">

	<div class="header-logo">
		<a href="<?=$useUrl?>/index.php"><img src="<?=$useUrl?>/resource/img/main_logo.png"></a>
	</div>

	<!-- mobile start -->
	<div class="menu_btn"><a href="#">
		<ul>
			<li><img src="<?=$useUrl?>/resource/img/main_hamburger.png"></li>
		</ul>
		</a>
	</div>
	<!-- mobile end -->

	<div class="header-content">
		<div class="close_btn"><a href="#">
			<ul>
				<li><img src="<?=$useUrl?>/resource/img/main_exit.png"></li>
			</ul>
			</a>
		</div>		
		<ul class="content-wrap">
			<li><a href="<?=$useUrl?>/user/node/?mode=01" class="on">ABOUT ME</a></li>
			<li><a href="<?=$useUrl?>/user/node/?mode=02">SKILLS</a></li>
			<li><a href="<?=$useUrl?>/user/node/?mode=03">PORTFOLIO</a></li>
			<li><a href="<?=$useUrl?>/user/node/?mode=04">CONTACT US</a></li>
			<li><a href="<?=$useUrl?>/board/index.php">BBS</a></li>
			<li><a href="<?=$useUrl?>/admin/index.php">관리자페이지(임시)</a></li>			
		</ul>
	</div>

	<div class="header-login">
		<ul class="pc-login-menu">
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
	</div><!-- header_wrap end -->

</div>