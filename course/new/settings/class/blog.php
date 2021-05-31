<?php 


class Blog{

	public function Getir()
	{
		global $db;

		$getir = $db->prepare("SELECT * from blog");
		$getir->execute();

		$massiv = array();

		while ($sl_getir=$getir->fetch(PDO::FETCH_ASSOC)) {
			array_push($massiv,$sl_getir);
		}

		return $massiv;

	}

	public function Sil($post){
		global $db;
		$sil = $db->prepare("DELETE from blog where id=:id");
		$x = $sil->execute(array('id'=>$post['id']));
		return $x ? 1 : 0;
	}



	public function AktivEt($post)
   	{
   		global $db;
   
   		$deyis = $db->prepare("UPDATE blog set status=:s where id=:id");
   		$x = $deyis->execute(array(
   			's'=>1,
   			'id'=>$post['id']
   		));
   		return $x ? 1 : 0;
   	}

   	public function DeaktivEt($post)
   	{
   		global $db;
   
   		$deyis = $db->prepare("UPDATE blog set status=:s where id=:id ");
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

				$yol="../../sekil/blog/";
				$image= new SimpleImage();

				$image->load($tmp);
				$image->resize(600,519);//en hundurluk
				$image->save($tmp);
				$rnd=rand(1000,9999);
				$sekil_yol=$yol.$rnd."-".$name;
				$elave=$db->prepare("INSERT into blog set 
					Basliq=:basliq,
					mezmun=:mezmun,
					sekil=:sekil,
					yazilma_tarixi=:trx,
					yenilenme_tarixi=:ytrx

					");
				$ins=$elave->execute(array(
					'basliq'=>$post['basliq'],
					'mezmun'=>$post['mezmun'],
					'sekil'=>substr($sekil_yol,6),
					'trx'=>date("Y-m-d H:i:s"),
					'ytrx'=>date("Y-m-d H:i:s")
				));
				if($ins){
					move_uploaded_file($tmp, $sekil_yol);
					return 1;
				}else{
					return 0;
				}
			}
			else{
				return 0;
			}
		}
		else{
			return 0;
		}

	}	

	public function RGetir($id)
	{
		global $db;

		$getir = $db->prepare("SELECT * from blog where id=:id");
		$getir->execute(array('id'=>$id));

		$sl_getir=$getir->fetch(PDO::FETCH_ASSOC);

		return $sl_getir;

	}


	public function RedakteEt($post)
	{
		global $db;
		$olcu=$_FILES['sekil']['size'];
		$tip=$_FILES['sekil']['type'];
		$tmp=$_FILES['sekil']['tmp_name'];
		$name=$_FILES['sekil']['name'];
		$tipler=array("image/jpeg","image/png");
		if($olcu>0){
			if (in_array($tip,$tipler)) {

				$yol="../../sekil/blog/";
				$image= new SimpleImage();

				$image->load($tmp);
				$image->resize(603,519);//en hundurluk
				$image->save($tmp);
				$rnd=rand(1000,9999);
				$sekil_yol=$yol.$rnd."-".$name;
				$redakte=$db->prepare("UPDATE blog set
					Basliq=:bas,
					mezmun=:mezmun,
					sekil=:sekil
					where id=:id
					");
				$red=$redakte->execute(array(
					'bas'=>$post['Basliq'],
					'mezmun'=>$post['mezmun'],
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
         $redakte=$db->prepare("UPDATE blog set 
               Basliq=:bas,
               mezmun=:mezmun            
               where id=:id
            ");
         $red=$redakte->execute(array(
            'bas'=>$post['Basliq'],
            'mezmun'=>$post['mezmun'],
            'id'=>$post['id']
         ));
         if($red){
            return 1;
         }else{
            return 0;
         }
      }

   }


}


?>