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
			Maas=:maas,
			av=:av,
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


if (isset($_POST['redakte'])) {
	$id=$_POST['id'];
	$k_sekil=$_POST['k_sekil'];
	$tipler=array("image/jpeg","image/gif","image/png");
	$sekil_ad=$_FILES['sekil']['name'];
	$tip=$_FILES['sekil']['type'];
	$tmp=$_FILES['sekil']['tmp_name'];
	$olcu=$_FILES['sekil']['size'];

	$yol="../img/";
	$rand=rand(1000,9999);

	$sekil_yol=$yol.$rand."-".$sekil_ad;

	if ($olcu>0) {
		if(in_array($tip,$tipler)){

			$redakte_et=$db->prepare("UPDATE  isciler set

				AdSoyad=:x,
				Vezife=:vezife,
				email=:mail,
				maas=:maas,
				aileveziyyeti=:av,
				sekil=:sekil
				where id={$id}
				");
			$upd=$redakte_et->execute(array(
				'x'=>$_POST['y'],
				'vezife'=>$_POST['vezife'],
				'mail'=>$_POST['email'],
				'maas'=>$_POST['Maas'],
				'av'=>$_POST['av'],
				'sekil'=>substr($sekil_yol,3)
			));

			if ($upd) {
				unlink("../$k_sekil");
				move_uploaded_file($tmp,$sekil_yol);
				header("Location:../index.php?status=redakte_edildi");
				exit;
			}
			else{
				header("Location:../redakte.php?status=zirt&id=$id");
				exit;
			}
		}else{
			header("Location:../redakte.php?status=sekil&id=$id");
			exit;
		}

	}else{
		$redakte_et=$db->prepare("UPDATE  isciler set

			AdSoyad=:x,
			Vezife=:vezife,
			email=:mail,
			maas=:maas,
			aileveziyyeti=:av
			where id={$id}
			");
		$upd=$redakte_et->execute(array(
			'x'=>$_POST['y'],
			'vezife'=>$_POST['vezife'],
			'mail'=>$_POST['email'],
			'maas'=>$_POST['Maas'],
			'av'=>$_POST['av']
		));

		if ($upd) {
			header("Location:../index.php?status=redakte_edildi");
			exit;
		}
		else{
			header("Location:../redakte.php?status=zirt&id=$id");
			exit;
		}
	}

}

?>