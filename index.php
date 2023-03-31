<?
	//──────────────────────────────────────────────────────────────────────────────────────
	// 기본 URL/SEO 상단/공통 헤더
	//──────────────────────────────────────────────────────────────────────────────────────
	include "session.php";
	//──────────────────────────────────────────────────────────────────────────────────────
	include "url_setting.php";
	//──────────────────────────────────────────────────────────────────────────────────────
	include $baseUrl."/common/db/common_db.php";
	//──────────────────────────────────────────────────────────────────────────────────────
	include $baseUrl."/common/user/fix_top.php";	
	//──────────────────────────────────────────────────────────────────────────────────────
	include $baseUrl."/common/user/common_header.php";
	//──────────────────────────────────────────────────────────────────────────────────────
?>
<?
	$userAgent = $_SERVER["HTTP_USER_AGENT"]; 
	//echo $userAgent;
?>

<div class="progress-container">
	<div class="progress-bar" id="myBar"></div>
</div>

<div id="wrap">
	<?
			//──────────────────────────────────────────────────────────────────────────────────────
			// board sql
			//──────────────────────────────────────────────────────────────────────────────────────
			//$sql = "select * from board where ( 1=1 )";
			//$stmt = $conn -> prepare($sql);										// 쿼리를 담은 PDOStatement 객체 생성
			//$stmt -> execute();																// PDOStatement 객체가 가진 쿼리를 실행
			//while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){		// PDOStatement 객체가 실행한 쿼리의 결과값 가져오기
			//
			//$content	= $row["content"];
			//$title		= $row["title"];
	?>
			<!-- <section class="section_01">
				<div class='animate__animated slideRight animate__delay-0.5s'><?=$title?></div>
				<div class='animate__animated slideRight animate__delay-1s'><?=$content?></div>		
			</section> -->
	<section class="section_01">
		<div class="layer_01"> 
			<div>
				<a href=""><img src="">ABOUT ME</a>
			</div>
			<div>
				<a href=""><img src="">1</a>
			</div>		
			<div>
				<a href=""><img src="">2</a>
			</div>					
		</div>
	</section>
	
	<section class="section_02">
		<div class="layer_02">	
		<div>
				<a href=""><img src="">SKILLS</a>
			</div>
			<div>
				<a href=""><img src="">3</a>
			</div>		
			<div>
				<a href=""><img src="">4</a>
			</div>	
		</div>
	</section>
	
	<section class="section_03">
		<div class="layer_03">	
		<div>
				<a href=""><img src="">PORTFOLIO</a>
			</div>
			<div>
				<a href=""><img src="">5</a>
			</div>		
			<div>
				<a href=""><img src="">6</a>
			</div>	
		</div>
	</section>	
	
	<section class="section_04">
		<div class="layer_04">	
			<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=fd979ab44b2991b9640b74433fa30086"></script>
			<div id="map"></div>
				<script src="<?=$useUrl?>/resource/js/kakao_map.js"></script>
			<div id="mail">
				<form method="post" action="mail.php">
				  <label for="name">보내는사람</label>
					<input type="text" id="name" name="name" /><br />
					<label for="mail_add">메일주소</label>
					<input type="text" id="mail_add" name="mail_add" /><br />
					<label for="messege">내용</label>
					<textarea  id="message" name="message" /></textarea><br />
					<input type="submit" value="전송" name="submit" /><!--action="mail.php" mail.php를 동작시키라는 버튼-->
				</form>
			</div>				
			<div id="contact">
				<p>1</p>
				<p>2</p>
				<p>3</p>			
			</div>
		</div><!-- layer_04 end -->
	</section>
</div>

<?
	//──────────────────────────────────────────────────────────────────────────────────────
	// 공통 푸터/SEO 하단
	//──────────────────────────────────────────────────────────────────────────────────────
	include $baseUrl."/common/user/common_footer.php";
	//──────────────────────────────────────────────────────────────────────────────────────
	include $baseUrl."/common/user/fix_bottom.php";
	//──────────────────────────────────────────────────────────────────────────────────────
?>