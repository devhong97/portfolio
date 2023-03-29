<script> 
//〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓
// 현재시간
//〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓
function liveTime() {
   today	= new Date();
   tdy		= today.getDate();
   hours	= today.getHours();
   minutes	= today.getMinutes();
   seconds	= today.getSeconds();

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

<div id="admin-container">
	<div class="admin-top-time">
		<ul>
			<li><span id="livetime"></span></li>
		</ul>
		<ul>
			<li>MENU</li>
			<li><a href="<?=$useUrl?>/admin/logout.php">로그아웃</a></li>
			<li><a href="<?=$useUrl?>/index.php">사용자페이지(임시)</a></li>			
		</ul>		
	</div>
	<div class="admin-top">
		<ul>
			<li><a href="<?=$useUrl?>/admin/"><img src="<?=$useUrl?>/resource/img/main_logo.png" title="LOGO"></a></li>		
			<li><p>사이트이름</p></li>
		</ul>		
	</div><!-- admin-top end -->
	
  <section class="admin-sidebox">
    <aside class="admin-sidebar">	
    	<ul>
			<li>asd</li>
			<li>asd</li>
			<li>asd</li>
		</ul>
    </aside>
    <div class="admin-box-contents">
      관리자 메인 컨텐츠
    </div>
  </section>
</div><!-- admin-container end -->