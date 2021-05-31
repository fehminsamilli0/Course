<?php 


class Odenis extends Telebe
{
	
	public function Getir()
	{
		global $db;
		$getir = $db->prepare("SELECT id,AdSoyad,telim,tel,bitirdiyi_tarix from telebeler where bitirdiyi_tarix IS NULL");
		$getir->execute();

		$massiv = array();

		while ($sl_getir=$getir->fetch(PDO::FETCH_ASSOC)) {
			array_push($massiv,$sl_getir);
		}

		return $massiv;


	}
	public function AyliqOdenis($id)
	{
		global $db;
		$getir = $db->prepare("SELECT ayliq_odenis from telebe_odenis where telebe_id=:id");
		$getir->execute(['id'=>$id]);

		return $getir->fetch(PDO::FETCH_ASSOC)['ayliq_odenis'];
	}
	public function Endirim($id)
	{
		global $db;
		$getir = $db->prepare("SELECT endirim from telebe_odenis where telebe_id=:id");
		$getir->execute(['id'=>$id]);

		return $getir->fetch(PDO::FETCH_ASSOC)['endirim'];
	}
	public function endirimsiz_odenis($id)
	{
		global $db;
		$getir = $db->prepare("SELECT endirimsiz_odenis from telebe_odenis where telebe_id=:id");
		$getir->execute(['id'=>$id]);

		return $getir->fetch(PDO::FETCH_ASSOC)['endirimsiz_odenis'];
	}
	public function umumi_borc($id)
	{
		global $db;
		$getir = $db->prepare("SELECT umumi_borc from telebe_odenis where telebe_id=:id");
		$getir->execute(['id'=>$id]);

		return $getir->fetch(PDO::FETCH_ASSOC)['umumi_borc'];
	}
	public function UmumiOdediyi($id)
	{
		global $db;
		$getir = $db->prepare("SELECT umumi_odenilen from telebe_odenis where telebe_id=:id order by id DESC");
		$getir->execute(['id'=>$id]);

		return $getir->fetch(PDO::FETCH_ASSOC)['umumi_odenilen'];
	}
	public function Qaliq($id)
	{
		global $db;
		$getir = $db->prepare("SELECT qaliq_borc from telebe_odenis where telebe_id=:id order by id DESC");
		$getir->execute(['id'=>$id]);

		return $getir->fetch(PDO::FETCH_ASSOC)['qaliq_borc'];
	}
	public function OdenisCedveli($id)
	{
		global $db;
		$getir = $db->prepare("SELECT odeme_tarixi,odenis,status from telebe_odenis where telebe_id=:id");
		$getir->execute(['id'=>$id]);
		$arrayy = [];
		while ($x = $getir->fetch(PDO::FETCH_ASSOC)) {
			array_push($arrayy, $x);
		}
		return $arrayy;
	}
	public function OdenisElave($post)
	{
		global $db;
		$odenis = $post['odenis'];
		$status = $post['status'];
		$qaliq_borc = $this->Qaliq($post['id']) - $odenis;
		$evvelki_odenis = $this->UmumiOdediyi($post['id']);


		$ins = $db->prepare("INSERT into telebe_odenis set
			telebe_id=:id,
			odenis=:odenis,
			status=:status,
			umumi_odenilen=:umumi_odenilen,
			qaliq_borc=:qaliq_borc,
			ayliq_odenis=:ayliq_odenis,
			endirim=:endirim,
			endirimsiz_odenis=:endirimsiz_odenis,
			umumi_borc=:umumi_borc,
			odeme_tarixi=:odeme_tarixi
			");
		$x = $ins->execute([
			'id'=>$post['id'],
			'odenis'=>$odenis,
			'status'=>$status,
			'umumi_odenilen'=>$evvelki_odenis+$odenis,
			'qaliq_borc'=>$qaliq_borc,
			'ayliq_odenis'=>$this->AyliqOdenis($post['id']),
			'endirim'=>$this->Endirim($post['id']),
			'endirimsiz_odenis'=>$this->endirimsiz_odenis($post['id']),
			'umumi_borc'=>$this->umumi_borc($post['id']),
			'odeme_tarixi'=>date("Y-m-d")
		]);

		return $x ? 1 : 0;

	}
}


?>