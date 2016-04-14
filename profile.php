<?php
$no=$_POST["no"];


$read="SELECT * FROM user WHERE No=".$no;
$readresult=mysqli_query($link,$read);
$result=mysqli_fetch_array($readresult);

echo "<form action='login.php' method='post'>";
echo "<input type='hidden' name='no' value='".$result[0]."'>";
echo "使用者名稱:<input type='text' name='uName' value='".$result[1]."'><br/>";
echo "使用者密碼:<input type='text' name='uPwd' value='".$result[2]."'><br/>";
echo "<input type='submit' value='更新'>";
echo "<input type='reset'>";
echo "</form>";

?>