<?php 

class Isci{

	public function Getir()
	{
		global $db;

		$getir = $db->prepare("SELECT * from isciler order by id desc");
		$getir->execute();

		$massiv = array();

		while ($sl_getir=$getir->fetch(PDO::FETCH_ASSOC)) {
			array_push($massiv,$sl_getir);
		}

		return $massiv;

	}

	public function MuellimGetir()
	{
		global $db;

		$getir = $db->prepare("SELECT * from isciler where muellim=:m");
		$getir->execute(array('m'=>1));

		$massiv = array();

		while ($sl_getir=$getir->fetch(PDO::FETCH_ASSOC)) {
			array_push($massiv,$sl_getir);
		}

		return $massiv;

	}

	public function OdenisGetir($id)
	{
		global $db;

		$getir = $db->prepare("SELECT * from isci_odenis where isci_id=:id");
		$getir->execute(array('id'=>$id));

		$massiv = array();

		while ($o_getir=$getir->fetch(PDO::FETCH_ASSOC)) {
			array_push($massiv,$o_getir);
		}

		return $massiv;

	}

	public function MaasElaveEt($post)
	{
		global $db;
		$elave=$db->prepare("INSERT into isci_odenis set 
			isci_id=:id,
			odenilen_mebleq=:azn,
			odenme_tarixi=:trx

			");
		$ins=$elave->execute(array(
			'id'=>$post['id'],
			'azn'=>$post['maas'],
			'trx'=>date("Y-m-d H:i:s")
		));
		if($ins){
			return 1;
		}else{
			return 0;
		}
	}



	public function EtrafliGetir($id)
	{
		global $db;

		$getir = $db->prepare("SELECT * from isciler where id=:id");
		$getir->execute(array('id'=>$id));
		$isci_getir=$getir->fetch(PDO::FETCH_ASSOC);

		return $isci_getir;

	}

	public function AktivEt($post)
	{
		global $db;

		$deyis = $db->prepare("UPDATE isciler set status=:s where id=:id ");
		$x = $deyis->execute(array(
			's'=>1,
			'id'=>$post['id']
		));
		return $x ? 1 : 0;
	}
	public function DeaktivEt($post)
	{
		global $db;

		$deyis = $db->prepare("UPDATE isciler set status=:s where id=:id ");
		$x = $deyis->execute(array(
			's'=>0,
			'id'=>$post['id']
		));
		return $x ? 1 : 0;
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

				$yol="../../sekil/isci/";
				$image= new SimpleImage();

				$image->load($tmp);
				$image->resize(603,519);//en hundurluk
				$image->save($tmp);
				$rnd=rand(1000,9999);
				$sekil_yol=$yol.$rnd."-".$name;
				$elave=$db->prepare("INSERT into isciler set 
					AdSoyad=:ad,
					email=:mail,
					sifre=:sifre,
					sifre_askar=:askar,
					tel=:tel,
					Vezife=:vez,
					Maas_Tip=:mtip,
					Maas=:maas,
					baslama_tarixi=:tarix,
					muellim=:m,
					sekil=:sekil

					");
				$ins=$elave->execute(array(
					'ad'=>$post['adsoyad'],
					'mail'=>strtolower($post['email']),
					'sifre'=>md5($post['sifre']),
					'askar'=>$post['sifre'],
					'tel'=>$post['tel'],
					'vez'=>$post['vezife'],
					'mtip'=>$post['maas_tip'],
					'maas'=>$post['maas'],
					'tarix'=>date("Y-m-d H:i:s"),
					'm'=>$post['muellim'],
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
			$elave=$db->prepare("INSERT into isciler set 
				AdSoyad=:ad,
				email=:mail,
				sifre=:sifre,
				sifre_askar=:askar,
				tel=:tel,
				Vezife=:vez,
				Maas_Tip=:mtip,
				Maas=:maas,
				baslama_tarixi=:tarix,
				muellim=:m,
				sekil=:sekil

				");
			$ins=$elave->execute(array(
				'ad'=>$post['adsoyad'],
				'mail'=>strtolower($post['email']),
				'sifre'=>md5($post['sifre']),
				'askar'=>$post['sifre'],
				'tel'=>$post['tel'],
				'vez'=>$post['vezife'],
				'mtip'=>$post['maas_tip'],
				'maas'=>$post['maas'],
				'tarix'=>date("Y-m-d"),
				'm'=>$post['muellim'],
				'sekil'=>"sekil/isci/teacher.png"
			));
			if($ins){
				return 1;
			}else{
				return 0;
			}
		}

	}
	public function RedakteEt($post)
	{
		global $db;
		$olcu=$_FILES['sekil']['size'];
		$tip=$_FILES['sekil']['type'];
		$tmp=$_FILES['sekil']['tmp_name'];
		$name=$_FILES['sekil']['name'];
		$tipler=array("image/jpeg","image/png");
		$id = $post['id'];
		$k_sekil =$post['k_sekil'];
		if($olcu>0){
			if (in_array($tip,$tipler)) {

				$yol="../../sekil/isci/";
				$image= new SimpleImage();

				$image->load($tmp);
				$image->resize(603,519);//en hundurluk
				$image->save($tmp);
				$rnd=rand(1000,9999);
				$sekil_yol=$yol.$rnd."-".$name;
				$elave=$db->prepare("UPDATE isciler set 
					AdSoyad=:ad,
					email=:mail,
					sifre=:sifre,
					sifre_askar=:askar,
					tel=:tel,
					Vezife=:vez,
					Maas_Tip=:mtip,
					Maas=:maas,
					muellim=:m,
					sekil=:sekil
					where id=:id
					");
				$ins=$elave->execute(array(
					'ad'=>$post['adsoyad'],
					'mail'=>strtolower($post['email']),
					'sifre'=>md5($post['sifre']),
					'askar'=>$post['sifre'],
					'tel'=>$post['tel'],
					'vez'=>$post['vezife'],
					'mtip'=>$post['maas_tip'],
					'maas'=>$post['maas'],
					'm'=>$post['muellim'],
					'sekil'=>substr($sekil_yol,6),
					'id'=>$id
				));
				if($ins){
					unlink($k_sekil);
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
			$elave=$db->prepare("UPDATE isciler set 
				AdSoyad=:ad,
				email=:mail,
				sifre=:sifre,
				sifre_askar=:askar,
				tel=:tel,
				Vezife=:vez,
				Maas_Tip=:mtip,
				Maas=:maas,
				muellim=:m
				where id=:id
				");
			$ins=$elave->execute(array(
				'ad'=>$post['adsoyad'],
				'mail'=>strtolower($post['email']),
				'sifre'=>md5($post['sifre']),
				'askar'=>$post['sifre'],
				'tel'=>$post['tel'],
				'vez'=>$post['vezife'],
				'mtip'=>$post['maas_tip'],
				'maas'=>$post['maas'],
				'm'=>$post['muellim'],
				'id'=>$id
			));
			if($ins){
				return 1;
			}else{
				return 0;
			}
		}

	}
}


?>