<?php

require_once './db.php';

$db = new DBConnection();


if (isset($_POST)){
    if($_POST["AdSoyad"]=="" || $_POST["Vezife"]=="" || $_POST["Maas"]=="" ){
        echo "Bütün Xanaları Doldurun";
        exit;
    }
    $x = $db->prepare("INSERT into isciler set
    AdSoyad=:x,
    Vezife=:v,
    Maas=:m
");
    $data = $x->execute([
        'x'=>$_POST["AdSoyad"],
        'v'=>$_POST["Vezife"],
        'm'=>$_POST["Maas"]
    ]);
    if($x){
       echo "Uğurla Əlavə Edildi!";
        exit;
    }
    else{
        echo "Əlavə Edilmədi!";
        exit;
    }
}


