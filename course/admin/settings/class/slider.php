<?php 


class Slider{

	public function Getir()
	{
		global $db;

		$getir = $db->prepare("SELECT * from slider");
		$getir->execute();

		$massiv = array();

		while ($sl_getir=$getir->fetch(PDO::FETCH_ASSOC)) {
			array_push($massiv,$sl_getir);
		}

		return $massiv;

	}

	public function AktivEt($post)
	{
		global $db;

		$deyis = $db->prepare("UPDATE slider set status=:s where id=:id ");
		$x = $deyis->execute(array(
			's'=>1,
			'id'=>$post['id']
		));
		return $x ? 1 : 0;
	}
	public function DeaktivEt($post)
	{
		global $db;

		$deyis = $db->prepare("UPDATE slider set status=:s where id=:id ");
		$x = $deyis->execute(array(
			's'=>0,
			'id'=>$post['id']
		));
		return $x ? 1 : 0;
	}

	public function Sil($post)
	{
		global $db;
		$k_sekil = $post['sekil'];
		$sil = $db->prepare("DELETE from slider where id=:id");
		$x=$sil->execute(array('id'=>$post['id']));
		if ($x) {
			unlink("../../$k_sekil");
			return 1;
		}
		else{
			return 0;
		}
	}

	public function ElaveEt($post)
	{
		global $db;
		$olcu=$_FILES['sekil']['size'];
		$tip=$_FILES['sekil']['type'];
		$tmp=$_FILES['sekil']['tmp_name'];
		$name=$_FILES['sekil']['name'];
		$tipler=array("image/jpeg","image/png");
		if($olcu>0){
			if (in_array($tip,$tipler)) {

				$yol="../../sekil/slider/";
				$image= new SimpleImage();

				$image->load($tmp);
				$image->resize(603,519);//en hundurluk
				$image->save($tmp);
				$rnd=rand(1000,9999);
				$sekil_yol=$yol.$rnd."-".$name;
				$elave=$db->prepare("INSERT into slider set 
					ad=:ad,
					tarix=:tarix,
					sekil=:sekil

					");
				$ins=$elave->execute(array(
					'ad'=>$post['ad'],
					'tarix'=>$post['tarix'],
					'sekil'=>substr($sekil_yol,6)
				));
				if($ins){
					move_uploaded_file($tmp,$sekil_yol);
					return 1;
				}else{
					return 0;
				}

			}else{
				return 0;
			}
		}
		elseif($olcu==0){
			return 0;
		}

	}

}


?>