<?php
//--login.php

if ($username=="admin") {
	echo "ยินดีต้อนรับคุณ" .$_POST['username']."คุณคือผู้ดูแลระบบ";
	echo "<br><a href='adim/index.php'> ลิงค์ไปหน้าBackend </a>;
	
}

elseif($Username=="Chonticha") {
	echo "ยินดีต้อนรับคุณ".$_POST['username']"คุณคือสมาชิกชมรม";
	echo "<br><a href='home/index.php'> ลิงค์ไปหน้าFrontend </a>;
}

else{
	echo "ยินดีต้อนรับคุณ".$_POST['username']"คุณคือผู้ใช้งานทั่วไป";
	echo "<br><a href='../'ลค์ไปหน้าUser(myproject) </a>;
}
?>