<?php 


class Telebe{


	public function Getir()
	{
		global $db;

		$getir = $db->prepare("SELECT id,AdSoyad,telim,tel,bitirdiyi_tarix from telebeler");
		$getir->execute();

		$massiv = array();

		while ($sl_getir=$getir->fetch(PDO::FETCH_ASSOC)) {
			array_push($massiv,$sl_getir);
		}

		return $massiv;

	}

	public function Etrafli($id)
	{
		global $db;
		$telebe = array();

	/*	$t_u = $db->prepare("
			SELECT 
			telebeler.*,
			telebe_devamiyyet.*,
			telebe_odenis.*
			FROM
			telebeler
			INNER JOIN telebe_devamiyyet ON telebeler.id = telebe_devamiyyet.telebe_id
			INNER JOIN telebe_odenis ON telebeler.id = telebe_odenis.telebe_id 
			where id=:id and telebe_id=:tid
			");
		$t_u->execute(array('id'=>$id,'tid'=>$id));
		$t_getir=$t_u->fetch(PDO::FETCH_ASSOC);

		print_r($t_getir);
		exit;*/
		$t_u = $db->prepare("SELECT * from telebeler where id=:id");
		$t_u->execute(array('id'=>$id));
		$TelUmi=$t_u->fetch(PDO::FETCH_ASSOC);

		$t_d = $db->prepare("SELECT * from telebe_devamiyyet where telebe_id=:tid");
		$t_d->execute(array('tid'=>$id));
		$TelDev=$t_d->fetch(PDO::FETCH_ASSOC);

		$t_o = $db->prepare("SELECT * from telebe_odenis where telebe_id=:toid");
		$t_o->execute(array('toid'=>$id));
		$TelOde=$t_o->fetch(PDO::FETCH_ASSOC);

		array_push($telebe,$TelUmi,$TelDev,$TelOde);

		return $telebe;

	}


	public function ElaveEt($post)
	{
		global $db;

		$elave_telebe = $db->prepare("INSERT into telebeler set
			AdSoyad=:AdSoyad,
			sv_nomresi=:sv,
			tevellud=:tv,
			uni=:uni,
			bas_tarix=:bas_tarix,
			telim=:telim,
			muddeti=:muddeti,
			tel=:tel,
			email=:email,
			unvan=:unvan,
			Ferdi=:ferdi,
			hef_ders_muddeti=:hef_ders_muddeti,
			endirim=:endirim,
			muellimi=:muellimi
			");
		$x = $elave_telebe->execute(array(
			'AdSoyad'=>$post['adsoyad'],
			'sv'=>$post['sv'],
			'tv'=>$post['tevellud'],
			'uni'=>$post['uni'],
			'bas_tarix'=>date("Y-m-d H:i:s"),
			'telim'=>$post['telim'],
			'muddeti'=>$post['tmuddeti'],
			'tel'=>$post['tel'],
			'email'=>$post['email'],
			'unvan'=>$post['unvan'],
			'ferdi'=>$post['ferdi'],
			'hef_ders_muddeti'=>$post['hef_ders_muddeti'],
			'endirim'=>$post['endirim'],
			'muellimi'=>$post['muellim']

		));
		$id = $db->lastInsertId();
		$ayliq = ((100-$post['endirim'])/100)*$post['odenis'];
		$elave_odenis = $db->prepare("INSERT into telebe_odenis set
			telebe_id=:id,
			ayliq_odenis=:ayliq,
			endirim=:endirim,
			endirimsiz_odenis=:endirimsiz,
			umumi_borc=:borc,
			qaliq_borc=:qaliq

			");
		$y=$elave_odenis->execute(array(
			'id'=>$id,
			'ayliq'=>$ayliq,
			'endirim'=>$post['endirim'],
			'endirimsiz'=>$post['odenis'],
			'borc'=>$ayliq*$post['tmuddeti'],
			'qaliq'=>$ayliq*$post['tmuddeti']
		));
		$umumi_ders_sayi = ($post['hef_ders_muddeti']*4)*$post['tmuddeti'];
		$elave_dev = $db->prepare("INSERT into telebe_devamiyyet set
			telebe_id=:id,
			umumi_ders_sayi=:umumi,
			qalan_ders_sayi=:qalan

			");
		$z=$elave_dev->execute(array(
			'id'=>$id,
			'umumi'=>$umumi_ders_sayi,
			'qalan'=>$umumi_ders_sayi
		));

		if ($x && $y && $z) {
			return 1;
		}
		else{
			return 0;
		}

	}


}


?>