<?php 

class Telimler extends General{

	public function MezmunGetir()
	{
		global $db;

		$getir = $db->prepare("SELECT * from telim_mez");
		$getir->execute();

		$massiv = array();

		while ($sl_getir=$getir->fetch(PDO::FETCH_ASSOC)) {
			array_push($massiv,$sl_getir);
		}

		return $massiv;

	}
	public function Getir()
	{
		global $db;

		$getir = $db->prepare("SELECT * from telim_kat");
		$getir->execute();

		$massiv = array();

		while ($sl_getir=$getir->fetch(PDO::FETCH_ASSOC)) {
			array_push($massiv,$sl_getir);
		}

		return $massiv;

	}

	public function RGetir($id)
	{
		global $db;

		$getir = $db->prepare("SELECT * from telim_kat where id=:id");
		$getir->execute(array('id'=>$id));

		$sl_getir=$getir->fetch(PDO::FETCH_ASSOC);

		return $sl_getir['ad'];

	}

	public function RMGetir($id)
	{
		global $db;

		$getir = $db->prepare("SELECT * from telim_mez where id=:id");
		$getir->execute(array('id'=>$id));

		$sl_getir=$getir->fetch(PDO::FETCH_ASSOC);

		return $sl_getir;

	}

	public function ElaveEt($post)
	{
		global $db;
		$elave=$db->prepare("INSERT into telim_kat set 
			ad=:ad,
			sira=:sira,
			seo=:seo

			");
		$ins=$elave->execute(array(
			'ad'=>$post['ad'],
			'sira'=>$post['sira'],
			'seo'=>parent::seo($post['ad'])
		));
		if($ins){
			return 1;
		}else{
			return 0;
		}

	}	

	public function Telim_elave($post)
	{
		global $db;
		$olcu=$_FILES['sekil']['size'];
		$tip=$_FILES['sekil']['type'];
		$tmp=$_FILES['sekil']['tmp_name'];
		$name=$_FILES['sekil']['name'];
		$tipler=array("image/jpeg","image/png");
		if($olcu>0){
			if (in_array($tip,$tipler)) {

				$yol="../../sekil/telim/";
				$image= new SimpleImage();

				$image->load($tmp);
				$image->resize(603,519);//en hundurluk
				$image->save($tmp);
				$rnd=rand(1000,9999);
				$sekil_yol=$yol.$rnd."-".$name;
				$elave=$db->prepare("INSERT into telim_mez set 
					tel_kat_id=:kid,
					Basliq=:bas,
					mezmun=:mezmun,
					qiymet=:qiymet,
					endirim_faiz=:f,
					sekil=:sekil

					");
				$ins=$elave->execute(array(
					'kid'=>$post['tel_kat'],
					'bas'=>$post['Basliq'],
					'mezmun'=>$post['mezmun'],
					'qiymet'=>$post['qiymet'],
					'f'=>$post['Endirim'],
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

	public function MRedakteEt($post)
	{
		global $db;
		$olcu=$_FILES['sekil']['size'];
		$tip=$_FILES['sekil']['type'];
		$tmp=$_FILES['sekil']['tmp_name'];
		$name=$_FILES['sekil']['name'];
		$tipler=array("image/jpeg","image/png");
		if($olcu>0){
			if (in_array($tip,$tipler)) {

				$yol="../../sekil/telim/";
				$image= new SimpleImage();

				$image->load($tmp);
				$image->resize(603,519);//en hundurluk
				$image->save($tmp);
				$rnd=rand(1000,9999);
				$sekil_yol=$yol.$rnd."-".$name;
				$redakte=$db->prepare("UPDATE telim_mez set 
					tel_kat_id=:kid,
					Basliq=:bas,
					mezmun=:mezmun,
					qiymet=:qiymet,
					endirim_faiz=:f,
					sekil=:sekil
					where id=:id
					");
				$red=$redakte->execute(array(
					'kid'=>$post['tel_kat'],
					'bas'=>$post['Basliq'],
					'mezmun'=>$post['mezmun'],
					'qiymet'=>$post['qiymet'],
					'f'=>$post['Endirim'],
					'sekil'=>substr($sekil_yol,6),
					'id'=>$post['id']
				));
				if($red){
					$k=$post['k_sekil'];
					unlink("../../$k");
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
			$redakte=$db->prepare("UPDATE telim_mez set 
				tel_kat_id=:kid,
				Basliq=:bas,
				mezmun=:mezmun,
				qiymet=:qiymet,
				endirim_faiz=:f
				where id=:id
				");
			$red=$redakte->execute(array(
				'kid'=>$post['tel_kat'],
				'bas'=>$post['Basliq'],
				'mezmun'=>$post['mezmun'],
				'qiymet'=>$post['qiymet'],
				'f'=>$post['Endirim'],
				'id'=>$post['id']
			));
			if($red){
				return 1;
			}else{
				return 0;
			}
		}

	}

	public function Status($post)
	{
		global $db;
		$table = $post['table']=="telim_kat" ? "telim_kat" : "telim_mez";
		$status = $post['statusad']=="aktiv" ? 1 : 0;
		$deyis = $db->prepare("UPDATE ".$table." set status=:s where id=:id ");
		$x = $deyis->execute(array(
			's'=>$status,
			'id'=>$post['id']
		));
		return $x ? 1 : 0;
	}


	public function Sira()
	{
		global $db;

		$getir = $db->prepare("SELECT sira from telim_kat order by sira ASC");
		$getir->execute();

		//$sira = "<select>\n";
		$massiv = array();
		while ($tgetir=$getir->fetch(PDO::FETCH_ASSOC)) {

			array_push($massiv,$tgetir);
				//$sira .='<option value="'+$i+'">'+$i+'</option>';

			
		}

		//$sira .="</select>";
		sort($massiv);
		return $massiv;
	}

	public function KSil($post)
	{
		global $db;
		$sil = $db->prepare("DELETE from telim_kat where id=:id");
		$x=$sil->execute(array('id'=>$post['id']));
		return $x ? 1 : 0;
	}

	public function MSil($post)
	{
		global $db;
		$sil = $db->prepare("DELETE from telim_mez where id=:id");
		$x=$sil->execute(array('id'=>$post['id']));
		
		if ($x) {
			unlink($post['sekil']);
			return 1;
		}
		else{
			return 0;
		}
	}
	

	
}


?>