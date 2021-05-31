<?php 

$yol="files/";
$name=$_FILES['fayl']['name'];
$tmp=$_FILES['fayl']['tmp_name'];
$yol=$yol.$name;

$olcu=$_FILES['fayl']['size'];
if ($olcu==0) {
	echo "Şəkil Yoxdur!";
	exit;
}

$tip=$_FILES['fayl']['type'];
$tipler=array("image/png","image/jpg","image/gif","image/jpeg");
if (!in_array($tip,$tipler)) {
	echo "Tipsiz";
	exit;

}


if (move_uploaded_file($tmp, $yol)) {
	echo "Fayl Yuklendi!";

}

else{
	echo "Xeta var !";
}



 ?>