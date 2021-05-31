<?php 


class Nizam{

	public function Getir()
	{
		global $db;
		$getir = $db->prepare("SELECT * from settings");
		$getir->execute();
		$x=$getir->fetch(PDO::FETCH_ASSOC);

		return $x;
	}

	public function Redakte($post)
	{
		global $db;
		if ($post['nizam']=="umumi") {
			$yenile = $db->prepare("UPDATE settings set
				title=:basliq,
				description=:des,
				keywords=:key
				");
			$x=$yenile->execute(array(
				'basliq'=>$post['title'],
				'des'=>$post['description'],
				'key'=>$post['keywords']
			));
			return $x==1 ? 1 :  0;
		}

		if ($post['nizam']=="elaqe") {
			$yenile = $db->prepare("UPDATE settings set
				address=:add,
				post_code=:post,
				mobile=:mobil,
				office=:ofis,
				email=:mail
				");
			$x=$yenile->execute(array(
				'add'=>$post['address'],
				'post'=>$post['post_code'],
				'mobil'=>$post['mobile'],
				'ofis'=>$post['office'],
				'mail'=>$post['email']
			));
			return $x==1 ? 1 :  0;
		}

		if ($post['nizam']=="sosial") {
			$yenile = $db->prepare("UPDATE settings set
				facebook=:facebook,
				instagram=:instagram,
				youtube=:youtube
				");
			$x=$yenile->execute(array(
				'facebook'=>$post['facebook'],
				'instagram'=>$post['instagram'],
				'youtube'=>$post['youtube']
			));
			return $x==1 ? 1 :  0;
		}
	}

}



?>