<?php require_once 'header.php'; require_once 'nav.php'; require_once '../settings/code/isci.php'; ?>
<!-- Start right Content here --><!-- ============================================================== -->
<div class="content-page">
 <!-- Start content -->
 <div class="content">
  <div class="container-fluid">
   <div class="row">
    <div class="col-sm-12">
    </div>
  </div>
  <!-- end row -->
  <div class="row">
    <div class="col-12">
     <div class="card m-b-20">
      <form method="POST" action="#" enctype="multipart/form-data">
        <input type="hidden" name="id"  value="<?= $i_getir['id'] ?>" />
        <input type="hidden" name="k_sekil"  value="../../<?= $i_getir['sekil'] ?>" />
       <div class="card-body">
        <h4 class="mt-0 header-title">İşçi Redakte Etmə Paneli</h4>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Cari Şəkil</label> 
          <div class="col-sm-10">                      
            <img width="200" src="../../<?= $i_getir['sekil'] ?>" />
          </div>
        </div>
        <div class="form-group row">
         <label class="col-sm-2 col-form-label">Şəkil Seç</label> 
         <div class="col-sm-10">                      
          <input type="file" name="sekil" class="filestyle" data-buttonname="btn-secondary">
        </div>
      </div>
      <div class="form-group row">
       <label for="adsoyad" class="col-sm-2 col-form-label">Ad Soyad</label>
       <div class="col-sm-10">
        <input class="form-control" name="adsoyad" type="text" value="<?= $i_getir['AdSoyad'] ?>" id="adsoyad" required="required">
      </div>
    </div>
    <div class="form-group row">
     <label for="email" class="col-sm-2 col-form-label">Email</label>
     <div class="col-sm-10">
      <input class="form-control" name="email" type="email" value="<?= $i_getir['email'] ?>" id="email" required="required">
    </div>
  </div>
  <div class="form-group row">
   <label for="tel" class="col-sm-2 col-form-label">Telefon</label>
   <div class="col-sm-10">
    <input class="form-control" name="tel" type="tel" value="<?= $i_getir['tel'] ?>" id="tel" required="required">
  </div>
</div>
<div class="form-group row">
 <label for="vezife" class="col-sm-2 col-form-label">Vəzifə</label>
 <div class="col-sm-10">
  <input class="form-control" name="vezife" type="text" value="<?= $i_getir['Vezife'] ?>" id="vezife" required="required">
</div>
</div>
<div class="form-group row">
 <label class="col-sm-2 col-form-label">İşçi Tip</label>
 <div class="col-sm-10">
  <select  class="form-control" name="muellim" >
   <option disabled="disabled" >Seçin..</option>
   <option <?= $i_getir['muellim']==1 ? 'selected="selected' : '' ?> value="1">Müəllim</option>
   <option <?= $i_getir['muellim']==0 ? 'selected="selected' : '' ?> value="0">İşçi</option>
 </select>
</div>
</div>
<div class="form-group row">
  <label class="col-sm-2 col-form-label">Maaş Tipi</label>
  <div class="col-sm-10">
   <select id="maas_tip" class="form-control" name="maas_tip" onchange="Maas_Tip()">
    <option disabled="disabled" selected="selected" >Maaş tipini seçin..</option>
    <option <?= $i_getir['Maas_Tip']=="sabit" ? 'selected="selected' : '' ?> value="sabit">Sabit</option>
    <option <?= $i_getir['Maas_Tip']=="faiz" ? 'selected="selected' : '' ?> value="faiz">Faiz</option>
  </select>
</div>
</div>
<div class="form-group row">
 <label for="maas" class="col-sm-2 col-form-label">Maaş</label>
 <div class="col-sm-10">
  <input class="form-control" name="maas" type="number" step="0.01" value="<?= $i_getir['Maas'] ?>" min="0" id="maas" required="required">
</div>
</div>

<div class="form-group row">
  <label for="sifre" class="col-sm-2 col-form-label">Şifrə</label>
 <div class="col-sm-10">
  <input class="form-control" name="sifre" type="text" value="<?= $i_getir['sifre_askar'] ?>" id="sifre" required="required">
</div>
</div>

<button class="btn btn-outline-info btn-block" name="isci_redakte">Redaktə Et</button>
</div>
</form>
</div>
</div>
<!-- end col -->
</div>
<!-- end row -->
</div>
<!-- container-fluid -->
</div>
<!-- content -->

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


</script>


<?php require_once 'footer.php'; ?>