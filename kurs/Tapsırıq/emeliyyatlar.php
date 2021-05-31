<?php 

require_once 'database.php';

if (isset($_POST['elave_et'])) {

	$tipler=array("image/jpeg","image/gif","image/png");
	$sekil_ad=$_FILES['sekil']['name'];
	$tip=$_FILES['sekil']['type'];
	$tmp=$_FILES['sekil']['tmp_name'];
	$olcu=$_FILES['sekil']['size'];

	$yol="../img/";
	$rand=rand(1000,9999);

	$sekil_yol=$yol.$rand."-".$sekil_ad;

	if ($olcu>0 && in_array($tip,$tipler) ) {

		$elave_et=$db->prepare("INSERT into isciler set

			AdSoyad=:x,
			Vezife=:vezife,
			email=:mail,
			qeyd_tarixi=:tarix,
			maas=:maas,
			aileveziyyeti=:av,
			sekil=:sekil
			");
		$ins=$elave_et->execute(array(
			'x'=>$_POST['y'],
			'vezife'=>$_POST['vezife'],
			'mail'=>$_POST['email'],
			'tarix'=>$_POST['qeyd_tarixi'],
			'maas'=>$_POST['mevacib'],
			'av'=>$_POST['av'],
			'sekil'=>substr($sekil_yol,3)
		));

		if ($ins) {
			move_uploaded_file($tmp,$sekil_yol);
			header("Location:../index.php?status=elave_edildi");
			exit;
		}
		else{
			header("Location:../index.php?status=elave_edilmedi");
			exit;
		}

	}else{
		header("Location:../index.php?status=sekil");
		exit;
	}

}
       if (@$_GET['sil']=="ok") {
       	$sekil=$_GET['sekil'];
       	$id=$_GET['id'];

       	$sil=$db->prepare("DELETE from isciler where id={$id}");
       	if ($sil->execute()) {
       		unlink("../$sekil");
       		header("Location:../index.php?status=silindi");
       		exit;
       	}
       	else{
       		header("Location:../index.php?status=silinmedi");
       		exit;





       	}


       }


?>