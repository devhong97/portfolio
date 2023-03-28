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
		글 테스트
		</div>
	</section>
	
	<section class="section_02">
		<div class="layer_02">	
		글 테스트
		</div>
	</section>
	
	<section class="section_03">
		<div class="layer_03">	
		글 테스트
		</div>
	</section>	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br>
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
