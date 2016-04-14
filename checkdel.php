<?php
$no=$_GET["post"];

$del="DELETE FROM user WHERE No=".$no;
mysqli_query($link,$del);
//讀取資料
$read="SELECT * FROM user";
$readresult=mysqli_query($link,$read);
	echo "<table border='1'>";
	echo "<tr><td>使用者帳號</td><td>使用者密碼</td><td>Email</td><td>電話</td><td>更新資料</td><td>刪除資料</td></tr>";
while($result=mysqli_fetch_array($readresult)){
	echo "<tr>";
	echo "<td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td>" "<td>".$result[3]."</td>;
	echo "<td><a href='update.php?no=".$result[0]."'>更新資料</td>";
	echo "<td><a href='del.php?no=".$result[0]."'>刪除資料</a></td>";
	echo "</tr>";
}
	echo "</table>";
?>