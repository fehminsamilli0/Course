<?php 
   class Xidmetler extends General{
   
   	public function K_Getir()
   	{
   		global $db;
   
   		$getir = $db->prepare("SELECT * from xidmet_kat");
   		$getir->execute();
   
   		$massiv = array();
   
   		while ($sl_getir=$getir->fetch(PDO::FETCH_ASSOC)) {
   			array_push($massiv,$sl_getir);
   		}
   
   		return $massiv;
   
   	}
   
   	public function K_Sil($post)
   	{
   		global $db;
   		$sil = $db->prepare("DELETE from xidmet_kat
   		 where id=:id");
   		$x = $sil->execute(array('id'=>$post['id']));
   		return $x ? 1 : 0;
   	}
   
   	public function AktivEt($post)
   	{
   		global $db;
   
   		$deyis = $db->prepare("UPDATE xidmet_kat set status=:s where id=:id");
   		$x = $deyis->execute(array(
   			's'=>1,
   			'id'=>$post['id']
   		));
   		return $x ? 1 : 0;
   	}
   
   	public function DeaktivEt($post)
   	{
   		global $db;
   
   		$deyis = $db->prepare("UPDATE xidmet_kat set status=:s where id=:id ");
   		$x = $deyis->execute(array(
   			's'=>0,
   		    'id'=>$post['id']
   		));
   		return $x ? 1 : 0;
   	}
   
   	public function K_ElaveEt($post)
   	{
   		global $db;
   		$elave=$db->prepare("INSERT into xidmet_kat set 
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
   
   	public function Sira()
   	{
   		global $db;
   
   		$getir = $db->prepare("SELECT sira from xidmet_kat order by sira ASC");
   		$getir->execute();
   		$massiv = array();
   		while ($tgetir = $getir->fetch(PDO::FETCH_ASSOC))
   		{
   			array_push($massiv,$tgetir);
   		}
   		sort($massiv);
   		return $massiv;
   	}
   
   	//mezmun
   
   	public function M_Getir()
   	{
   		global $db;
   
   		$getir = $db->prepare("SELECT * from xidmet_mez");
   		$getir->execute();
   
   		$massiv = array();
   
   		while ($sl_getir = $getir->fetch(PDO::FETCH_ASSOC)) {
   			array_push($massiv, $sl_getir);
   		}
   		return $massiv;
   
   	}
   
   	public function Mez_Kat_Getir($id)
   	{
   		global $db;
   
   		$getir = $db->prepare("SELECT * from xidmet_kat where id=:id");
   		$getir->execute(array('id'=>$id));
   
   		$sl_getir=$getir->fetch(PDO::FETCH_ASSOC);
   
   		return $sl_getir['ad'];
   
   	}
   
   	 public function M_AktivEt($post)
      {
         global $db;
      
         $deyis = $db->prepare("UPDATE xidmet_mez set status=:s where id=:id ");
         $x = $deyis->execute(array(
            's'=>1,
            'id'=>$post['id']
         ));
         return $x ? 1 : 0;
      }
   
       public function M_DeaktivEt($post)
      {
         global $db;
           
         $deyis = $db->prepare("UPDATE xidmet_mez set status=:s where id=:id ");
         $x = $deyis->execute(array(
            's'=>0,
            'id'=>$post['id']
         ));
         return $x ? 1 : 0;
      }
   
       public function M_Sil($post)
      {
         global $db;
         $sil = $db->prepare("DELETE from xidmet_mez where id=:id");
         $x = $sil->execute(array('id'=>$post['id']));
         return $x ? 1 : 0;
      }
   
   	public function M_ElaveEt($post)
   	{
   		global $db;
   		$olcu=$_FILES['sekil']['size'];
   		$tip=$_FILES['sekil']['type'];
   		$tmp=$_FILES['sekil']['tmp_name'];
   		$name=$_FILES['sekil']['name'];
   		$tipler=array("image/jpeg","image/png");
   		if($olcu>0){
   			if (in_array($tip,$tipler)) {
   
   				$yol="../../sekil/xidmetler/";
   				$image= new SimpleImage();
   
   				$image->load($tmp);
   				$image->resize(603,519);//en hundurluk
   				$image->save($tmp);
   				$rnd=rand(1000,9999);
   				$sekil_yol=$yol.$rnd."-".$name;
   				$elave=$db->prepare("INSERT into xidmet_mez set 
   					xid_kat_id=:kid,
   					Basliq=:bas,
   					mezmun=:mezmun,
   					sekil=:sekil
   
   					");
   				$ins=$elave->execute(array(
   					'kid'=>$post['xid_kat'],
   					'bas'=>$post['Basliq'],
   					'mezmun'=>$post['mezmun'],
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

   	public function RMGetir($id)
	{
		global $db;

		$getir = $db->prepare("SELECT * from xidmet_mez where id=:id");
		$getir->execute(array('id'=>$id));

		$sl_getir=$getir->fetch(PDO::FETCH_ASSOC);

		return $sl_getir;

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

				$yol="../../sekil/xidmetler/";
				$image= new SimpleImage();

				$image->load($tmp);
				$image->resize(603,519);//en hundurluk
				$image->save($tmp);
				$rnd=rand(1000,9999);
				$sekil_yol=$yol.$rnd."-".$name;
				$redakte=$db->prepare("UPDATE xidmet_mez set 
					xid_kat_id=:kid,
					Basliq=:bas,
					mezmun=:mezmun,
					sekil=:sekil
					where id=:id
					");
				$red=$redakte->execute(array(
					'kid'=>$post['xid_kat_id'],
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
         $redakte=$db->prepare("UPDATE xidmet_mez set 
               xid_kat_id=:kid,
               Basliq=:bas,
               mezmun=:mezmun            
               where id=:id
            ");
         $red=$redakte->execute(array(
            'kid'=>$post['xid_kat_id'],
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