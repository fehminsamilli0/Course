<?php require_once 'header.php'; require_once 'nav.php';  require_once '../settings/code/isci.php'; ?>
<!-- Page -->
<div class="page">
 <div class="page-header">
  <h1 class="page-title">İşçilər</h1>
  <button  name="u_yenile" data-target="#exampleFormModal" data-toggle="modal" class="btn btn-animate btn-animate-side btn-info">
    <span><i class="icon wb-edit" aria-hidden="true"></i>Əlavə Et</span>
  </button>
</div>
<div class="page-content">
  <div class="col-lg-12">
   <!-- Example Bordered Table -->
   <div class="example-wrap">
    <div class="example table-responsive">
     <table class="table table-bordered">
      <thead>
       <tr>
        <th>şəkil</th>
        <th>Ad Soyad</th>
        <th>Vəzifə</th>
        <th>status</th>
        <th>Maaş</th>
        <th>Ətraflı</th>
      </tr>
    </thead>
    <tbody>
      <?php for ($i=0; $i <count($data) ; $i++) { ?>
       <tr align="center">
        <td><img width="50" height="50" src="../../<?= $data[$i]['sekil'] ?>"></td>
        <td><?= $data[$i]['AdSoyad'] ?></td>
        <td><?= $data[$i]['Vezife'] ?></td>
        <td>
         <?php if ($data[$i]['status']==1): ?>
          <a href="isciler.php?id=<?= $data[$i]['id'] ?>&status=deaktiv"> <button class="btn btn-danger">Deaktiv Et</button></a>
        <?php endif ?>
        <?php if ($data[$i]['status']==0): ?>
         <a href="isciler.php?id=<?= $data[$i]['id'] ?>&status=aktiv">  <button class="btn btn-info">Aktiv Et</button></a>
       <?php endif ?>
     </td>
     <td>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#isci_<?= $data[$i]['id'] ?>" data-whatever="@getbootstrap">Maaş Əlavə Et</button>
    </td>
    <td>
      <a href="isci.php?isci_etrafli=ok&id=<?= $data[$i]['id'] ?>"><button class="btn btn-outline-info">Ətraflı</button></a>
    </td>
  </tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
<!-- End Example Bordered Table -->
</div>
</div>
</div>
<!-- End Page -->
<!-- content -->
<?php for ($i=0; $i <count($data) ; $i++) { ?>
 <div class="modal fade" id="isci_<?= $data[$i]['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <div class="modal-content">
    <div class="modal-header">
     <h5 class="modal-title" id="exampleModalLabel"><?= $data[$i]['AdSoyad'] ?> ( <?= $data[$i]['Vezife'] ?> )</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>
   <div class="modal-body">
    <form method="POST" action="#">
     <input type="hidden" name="id" value="<?= $data[$i]['id'] ?>" />
     <div class="form-group">
      <label for="recipient-name" class="col-form-label">Maaş:</label>
      <input type="number" step="0.01" name="maas" min="0" max="9999" placeholder="Maaş daxil edin.." class="form-control" id="recipient-name" />
    </div>

  </div>
  <div class="modal-footer">
   <button type="button" class="btn btn-secondary" data-dismiss="modal">İmtina</button>
   <button type="submit" name="maas_elave" class="btn btn-primary">Əlavə Et</button>
 </div> 
</form>
</div>
</div>
</div>
<?php } ?>

<div class="modal fade" id="exampleFormModal" aria-hidden="false" aria-labelledby="exampleFormModalLabel"
role="dialog" tabindex="-1">
<div class="modal-dialog modal-simple">
  <form  method="POST" action="#" enctype="multipart/form-data" class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      <h4 class="modal-title" id="exampleFormModalLabel">Yeni işçi Əlavə Edirsiniz</h4>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-xl-12 form-group">
          <label>Şəkil Seç</label>
          <input type="file" name="sekil" class="filestyle" data-buttonname="btn-secondary">
        </div>
        <div class="col-xl-12 form-group"> 
          <input class="form-control" name="adsoyad" type="text" placeholder="İşçinin Ad Soyadını daxil edin.." id="adsoyad" required="required">
        </div>
        <div class="col-xl-12 form-group"> 
          <input class="form-control" name="email" type="email" placeholder="İşçinin emailini daxil edin.." id="email" required="required">
        </div>
        <div class="col-xl-12 form-group"> 
          <input class="form-control" name="tel" type="tel" placeholder="İşçinin Telefonunu daxil edin.." id="tel" required="required">
        </div>
        <div class="col-xl-12 form-group"> 
          <input class="form-control" name="vezife" type="text" placeholder="İşçinin Vəzifəsini daxil edin.." id="vezife" required="required">
        </div>
        <div class="col-xl-12 form-group"> 
          <select  class="form-control" name="muellim" >
           <option disabled="disabled" selected="selected" > İşçi Tip Seçin..</option>
           <option value="1">Müəllim</option>
           <option value="0">İşçi</option>
         </select>
       </div>
       <div class="col-xl-12 form-group"> 
        <select id="maas_tip" class="form-control" name="maas_tip" onchange="Maas_Tip()">
          <option disabled="disabled" selected="selected" >Maaş tipini seçin..</option>
          <option value="sabit">Sabit</option>
          <option value="faiz">Faiz</option>
        </select>
      </div>
      <div class="col-xl-12 form-group"> 
        <input class="form-control" name="maas" type="number" step="0.01" placeholder="Maaş daxil edin...." min="0" id="maas" required="required">
      </div>
      <div class="col-xl-12 form-group"> 
        <button type="button" class="btn btn-info btn-sm" onclick="generatePassword()"> Şifrə Qur</button>
        <b id="sifre_goster"></b>
        <input name="sifre" type="hidden" readonly="readonly"  id="sifre" >
      </div>

      <div class="col-md-12 float-right">
        <button class="btn btn-outline-info btn-block" name="isci_elave">Əlavə Et</button>
      </div>
    </div>
  </div>
</form>
</div>
</div>
<script>

 function Maas_Tip() {
  var length = 0;
  var tip = document.getElementById("maas_tip").value;
  if (tip=="sabit") {
   length = 9999;
 }
 else{
   length = 100;
 }
 document.getElementById("maas").setAttribute("max",length); 
}

function generatePassword() {
 var length = 8,
 charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789#-!()@_*",
 retVal = "";
 for (var i = 0, n = charset.length; i < length; ++i) {
   retVal += charset.charAt(Math.floor(Math.random() * n));
 }
 document.getElementById("sifre").value = retVal;
 document.getElementById("sifre_goster").innerHTML = retVal;
}

</script>
<?php require_once 'footer.php'; ?>