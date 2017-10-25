<?php
//--switch01.php
$username="webmaster";
switch ($username)
{
	case "manager";
		echo  "ยินดีต้อนรับคุณ $username  คุณผู้จัดการ";
		break;
	case"adim";
		echo  "ยินดีต้อนรับคุณ $username  คุณคือผู้ดูแลระบบ";
		break;
	case"webmaster";
		echo  "ยินดีต้อนรับคุณ $username  คุณคือผู้ดูเว็บไซต์";
		break;
	default;
	echo  "ยินดีต้อนรับคุณ $username  คุณคือผู้ใช้งาน";
}
?>