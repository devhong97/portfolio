<?
    $dbHost = "localhost"; // 호스트 주소(localhost, 120.0.0.1)
    $dbName = "ygh";  // 데이타 베이스(DataBase) 이름
		$dbChar = 'utf8'; // 문자열
				
    $dbUser = "root"; // DB 아이디
    $dbPass = "dbrlghd1"; // DB 패스워드

    try
    {
       $conn = new PDO("mysql:host=$dbHost; dbname=$dbName; charset=$dbChar", $dbUser, $dbPass);
			 $conn ->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
       $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo "DB연결 실패 : ".$e->getMessage()."<br>";
    }
?>
