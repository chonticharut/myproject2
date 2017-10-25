<?php
//--if03.php
$name="Manager";
if ($name=="Manager")
 {
 echo"ยินดีต้อนรับคุณ  <font color='red'> $name</font> คูณคือผู้จัดการ<br>";
 echo "<a href='http://www.Chonticha.com'> GOTO Arnut.com</a>";
 
 }elseif ($name=="admin")
 {
	echo"ยินดีต้อนรับคุณ <font color='green'> $name</font> คูณคือผู้ดูแลระบบ";
 }elseif ($name=="Webmaster")
 {
	echo"ยินดีต้อนรับคุณ <font color='pink'>$name</font> คุณคือผู้ดูแลเว็บไซต์";
 }else
 {
	echo "ยินดีต้อนรับคุณ<font color='blue'>$name</font>คุณคือผู้ใช้งาน";
 }
		
?>