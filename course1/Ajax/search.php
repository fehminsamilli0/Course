<?php


require_once './db.php';

$db = new DBConnection();


if (isset($_POST)){
    $soz = $_POST["axtar"];
    $x = $db->prepare("SELECT * from isciler where AdSoyad LIKE ?");
    $z = $x->execute(["%$soz%"]);
    $say = $x->rowCount();
    if($say>0){
        $tbl = '
        <tr>
            <th>Ad Soyad</th>
            <th>Vəzifə</th>
            <th>Maaş</th>
        </tr>
        ';
        while($data = $x->fetch(PDO::FETCH_ASSOC)){
            $tbl .= '
                <tr>
                    <td>'.$data["AdSoyad"].'</td>
                    <td>'.$data["Vezife"].'</td>
                    <td>'.$data["Maas"].' AZN</td>
                </tr>
            ';
        }
        echo $tbl;
    }
    else{
        echo "Tapılmadı!";
    }


}
