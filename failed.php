<html>
	<body>
		<?php 
			echo "Login Failed !!<br>";
			echo "登入失敗,3秒後回登入畫面<br>";
			header("Refresh:3 ; url=login.php");
		?>
	</body>

</html>