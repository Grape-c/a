<html>
	<head>
		<title>登入成功</title>
	</head> 

	<body>

	<form action="log.php" method="POST">
    <?php
    echo root;
    
	echo "歡迎回來!";
	echo "<br/>";
	 if(isset($_COOKIE['login_now'])){
        echo "<div id='showTime'>";
	    echo '您上一次登入時間為:'.$_COOKIE['login_now'];;
        echo "</div>";
 }
	?>

    </body>

<html/>



