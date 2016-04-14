<html>
	<head>
		<title>會員登錄網站</title>
	</head> 

	<body>

		<form action="" method="POST">
		請輸入帳號:<input type="text" name="id"><br/>
	    請輸入密碼:<input type="password" name="pwd"><br/><br/>

	    <input type="submit" value="提交">
		<input type="reset" value="清除">

		</form>


		<?php
			session_start(); 
			$Uid="root";
			$Upwd="12345";
			$pwd=$_POST["pwd"];
			$id=$_POST["id"];

			if(isset($_POST["pwd"]) && isset($_POST["id"])) {

				if (!preg_match("/root/",$id)) {
					$_SESSION["status"]="No";
					header('Location:failed.php');

				} else {

					if ($Upwd==$pwd && $Uid==$id) {
						$_SESSION["status"]="Yes";
						header('Location:index.php');
					} else {
						$_SESSION["status"]="No";
						header('Location:failed.php');
					}
					}

				}

			

			?>


	</body>

</html>