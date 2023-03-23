<div>
	<?
	// strupper - 소문자 > 대문자
	$upper_text = "upper_text";
	$upper_text = strtoupper($upper_text);
	echo "UPPER: ".$upper_text;
	
	echo "<br>";
	
	// strlower - 대문자 > 소문자
	$lower_text = "LOWER_TEXT";
	$lower_text = strtolower($lower_text);
	echo "LOWER: ".$lower_text;
	
	echo "<br>";
		
	// strlen - 문자열 길이 함수
	$strlen_length_en = "ABCDEF";  // 6
	$strlen_length_kr = "안녕하세요"; // mb없을 시 15, 있을 시 6
	$strlen_length_kr_mb = "안녕하세요";
	/////////////////////////////////
	$strlen_length_en = strlen($strlen_length_en);
	$strlen_length_kr = strlen($strlen_length_kr);	
	$strlen_length_kr_mb = mb_strlen($strlen_length_kr_mb);
	///////////////////////////////////////////////////////
	echo "STRLEN_LENGTH_EN: ".$strlen_length_en."<br>";
	echo "STRLEN_LENGTH_KR: ".$strlen_length_kr."<br>";
	echo "[KR]mb_strlen: ".$strlen_length_kr_mb;
	// 영어는 1바이트지만 한글은 3바이트를 차지한다.
	// 한글을 1바이트로 사용하고 싶으면 mb_strlen을 사용한다.
	?>
</div>