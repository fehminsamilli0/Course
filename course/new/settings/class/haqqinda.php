<?php 


class Haqqinda{

	public function Getir()
	{
		global $db;
		$getir = $db->prepare("SELECT * from haqqinda");
		$getir->execute();
		$x=$getir->fetch(PDO::FETCH_ASSOC);

		return $x;
	}

	public function Redakte($post)
	{
		global $db;
		$olcu=$_FILES['sekil']['size'];
		$tip=$_FILES['sekil']['type'];
		$tmp=$_FILES['sekil']['tmp_name'];
		$name=$_FILES['sekil']['name'];
		$k_sekil=$post['k_sekil'];
		$tipler=array("image/jpeg","image/png");
		if($olcu>0){
			if (in_array($tip,$tipler)) {

				$yol="../../sekil/";
				$image= new SimpleImage();

				$image->load($tmp);
				$image->resize(603,519);//en hundurluk
				$image->save($tmp);
				$rnd=rand(1000,9999);
				$sekil_yol=$yol.$rnd."-".$name;
				$yenile=$db->prepare("UPDATE haqqinda set 
					Basliq=:bas,
					mezmun=:mezmun,
					video=:video,
					sekil=:sekil

					");
				$update=$yenile->execute(array(
					'bas'=>$post['Basliq'],
					'mezmun'=>$post['mezmun'],
					'video'=>$post['video'],
					'sekil'=>substr($sekil_yol,6)
				));
				if($update){
					unlink("../../$k_sekil");
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
			$yenile=$db->prepare("UPDATE haqqinda set 
				basliq=:bas,
				mezmun=:mezmun,
				video=:video

				");
			$update=$yenile->execute(array(
				'bas'=>$post['Basliq'],
				'mezmun'=>$post['mezmun'],
				'video'=>$post['video']
			));
			if($update){
				return 1;
			}else{
				return 0;
			}
		}

	}

}



?>