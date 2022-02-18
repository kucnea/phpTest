<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    
    echo "<h2>입력된 회원 정보</h2>";
    echo "이름 : ".$name."<br>";
    echo "성별 : ".$gender."<br>";
}


?>

<html>
<body>
	
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		이름 : <input type="text" name="name">
		성별 : 
				<input type="radio" name="gender" value="남자">
				<input type="radio" name="gender" value="여자">
		<input type="submit" value="전송">
	</form>
	

</body>
</html>