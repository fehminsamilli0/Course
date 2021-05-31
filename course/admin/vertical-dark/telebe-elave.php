<?php require_once 'header.php'; require_once 'nav.php'; require_once '../settings/code/telebe.php'; ?>
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
               <form method="POST" action="#">
                  <div class="card-body">
                     <h4 class="mt-0 header-title">Tələbə Əlavə Etmə Paneli</h4>
                     <div class="form-group row">
                        <label for="adsoyad" class="col-sm-2 col-form-label">Ad Soyad</label>
                        <div class="col-sm-10">
                           <input class="form-control" name="adsoyad" type="text" placeholder="Tələbənin Ad Soyadını daxil edin.." id="adsoyad" required="required">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                           <input class="form-control" name="email" type="email" placeholder="Tələbənin emailini daxil edin.." id="email" required="required">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="tel" class="col-sm-2 col-form-label">Telefon</label>
                        <div class="col-sm-10">
                           <input class="form-control" name="tel" type="tel" placeholder="Tələbənin Telefonunu daxil edin.." id="tel" required="required">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="sv" class="col-sm-2 col-form-label">Şəxsiyyət vəsiqəsinin nömrəsi</label>
                        <div class="col-sm-10">
                           <input class="form-control" name="sv" type="text" placeholder="Tələbənin Şəxsiyyət vəsiqəsi daxil edin.." id="sv" required="required">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="tevellud" class="col-sm-2 col-form-label">Doğum Tarixi</label>
                        <div class="col-sm-10">
                           <input class="form-control" name="tevellud" type="date"  id="tevellud" required="required">
                        </div>
                     </div>
                     <div class="form-group row">
                      <label for="uni" class="col-sm-2 col-form-label">Universitet</label>
                        <div class="col-sm-10">
                         <input class="form-control" name="uni" type="text" placeholder="Tələbənin universitetini daxil edin.."  id="uni" required="required">
                        </div>
                     </div>
                     <div class="form-group row">
                      <label for="tmuddeti" class="col-sm-2 col-form-label">Təlim müddəti</label>
                        <div class="col-sm-10">
                         <input class="form-control" name="tmuddeti" type="number" min="1" placeholder="Tələbənin təlim müddətini daxil edin.."  id="tmuddeti" required="required">
                        </div>
                     </div>

                       <div class="form-group row">
                      <label for="hef_ders_muddeti" class="col-sm-2 col-form-label">Həftəlik Dərslər (2 Dəfə)</label>
                        <div class="col-sm-10">
                         <input class="form-control" name="hef_ders_muddeti" type="number" min="1" max="7" placeholder="Tələbənin həftədə neçə dəfə gələcəyini daxil edin.."  id="hef_ders_muddeti" required="required">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="endirim" class="col-sm-2 col-form-label">Endirim %</label>
                        <div class="col-sm-10">
                           <input class="form-control" name="endirim" type="text" min="0" max="100" placeholder="Endirimi faizlə daxil edin.." id="endirim" required="required">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="odenis" class="col-sm-2 col-form-label">Ödəniş (Endirimsiz daxil edin)</label>
                        <div class="col-sm-10">
                           <input class="form-control" name="odenis" type="text" min="1" max="9999" placeholder="Ödəniş daxil edin.." id="odenis" required="required">
                        </div>
                     </div>
                     <div class="form-group row">
                      <label for="unvan" class="col-sm-2 col-form-label">Ünvan</label>
                        <div class="col-sm-10">
                         <input class="form-control" name="unvan" type="text" placeholder="Tələbənin ünvanını daxil edin.." id="unvan" required="required">
                        </div>
                     </div>
                     <div class="form-group row">
                      <label for="uni" class="col-sm-2 col-form-label">Təlim</label>
                        <div class="col-sm-10">
                        <select name="telim" class="form-control">
                          <?php for ($i=0; $i < count($tAdlari); $i++) { ?>
                          <option value="<?= $tAdlari[$i]['Basliq'] ?>"><?= $tAdlari[$i]['Basliq'] ?></option>
                        <?php } ?>
                        </select>
                        </div>
                     </div>
                     <div class="form-group row">
                      <label for="unvan" class="col-sm-2 col-form-label">Təlim Növü</label>
                        <div class="col-sm-10">
                         <select name="ferdi" class="form-control">
                          <option value="0">Qrup</option>
                            <option value="1">Fərdi</option>
                         </select>
                        </div>
                     </div>
                     <div class="form-group row">
                      <label for="uni" class="col-sm-2 col-form-label">Müəllim</label>
                        <div class="col-sm-10">
                        <select name="muellim" class="form-control">
                          <?php for ($i=0; $i < count($mAdlari); $i++) { ?>
                          <option value="<?= $mAdlari[$i]['AdSoyad'] ?>"><?= $mAdlari[$i]['AdSoyad'] ?></option>
                        <?php } ?>
                        </select>
                        </div>
                     </div>
                     <button class="btn btn-outline-info btn-block" name="telebe_elave">Əlavə Et</button>
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
<?php require_once 'footer.php'; ?>