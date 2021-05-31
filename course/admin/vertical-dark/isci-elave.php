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
                     <div class="card-body">
                        <h4 class="mt-0 header-title">İşçi Əlavə Etmə Paneli</h4>
                        <div class="form-group row">
                           <label class="col-sm-2 col-form-label">Şəkil Seç</label> 
                           <div class="col-sm-10">                      
                              <input type="file" name="sekil" class="filestyle" data-buttonname="btn-secondary">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="adsoyad" class="col-sm-2 col-form-label">Ad Soyad</label>
                           <div class="col-sm-10">
                              <input class="form-control" name="adsoyad" type="text" placeholder="İşçinin Ad Soyadını daxil edin.." id="adsoyad" required="required">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="email" class="col-sm-2 col-form-label">Email</label>
                           <div class="col-sm-10">
                              <input class="form-control" name="email" type="email" placeholder="İşçinin emailini daxil edin.." id="email" required="required">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="tel" class="col-sm-2 col-form-label">Telefon</label>
                           <div class="col-sm-10">
                              <input class="form-control" name="tel" type="tel" placeholder="İşçinin Telefonunu daxil edin.." id="tel" required="required">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="vezife" class="col-sm-2 col-form-label">Vəzifə</label>
                           <div class="col-sm-10">
                              <input class="form-control" name="vezife" type="text" placeholder="İşçinin Vəzifəsini daxil edin.." id="vezife" required="required">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-sm-2 col-form-label">İşçi Tip</label>
                           <div class="col-sm-10">
                              <select  class="form-control" name="muellim" >
                               <option disabled="disabled" selected="selected" >Seçin..</option>
                               <option value="1">Müəllim</option>
                               <option value="0">İşçi</option>
                            </select>
                         </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Maaş Tipi</label>
                        <div class="col-sm-10">
                           <select id="maas_tip" class="form-control" name="maas_tip" onchange="Maas_Tip()">
                            <option disabled="disabled" selected="selected" >Maaş tipini seçin..</option>
                            <option value="sabit">Sabit</option>
                            <option value="faiz">Faiz</option>
                         </select>
                      </div>
                   </div>
                   <div class="form-group row">
                     <label for="maas" class="col-sm-2 col-form-label">Maaş</label>
                     <div class="col-sm-10">
                        <input class="form-control" name="maas" type="number" step="0.01" placeholder="Maaş daxil edin...." min="0" id="maas" required="required">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-2 col-form-label">Şifrə Qur</label>
                     <div class="col-sm-10">
                       <button type="button" class="btn btn-info btn-sm" onclick="generatePassword()">Qur</button>
                       <b id="sifre_goster"></b>
                       <input name="sifre" type="hidden" readonly="readonly"  id="sifre" >
                    </div>
                 </div>

                 <button class="btn btn-outline-info btn-block" name="isci_elave">Əlavə Et</button>
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