<?php require_once 'header.php'; require_once 'nav.php';  require_once '../settings/code/slider.php'; ?>
<!-- Page -->
<div class="page">
   <div class="page-header">
      <h1 class="page-title">Slider Əlavə Etmə Paneli</h1>
   </div>
   <div class="page-content">
      <!-- Panel Form Elements -->
      <div class="panel">
         <div class="panel-body container-fluid">
            <div class="row row-lg">
               <div class="col-md-12 col-lg-12">
                  <form method="POST" action="#" enctype="multipart/form-data">
                     <input type="hidden" name="tarix" value="<?= date("Y-m-d H:i:s");  ?>" />
                     <div class="example-wrap">
                        <h4 class="example-title">Ad</h4>
                        <input  class="form-control round" name="ad" type="text" id="basliq">
                     </div>
                     
                     <div class="example-wrap">
                        <h4 class="example-title">Şəkil</h4>
                        <input type="file" class="filestyle" name="sekil" data-input="false" data-buttonname="btn-secondary">         
                     </div>
                     
                     <button type="submit" name="s_elave" class="btn btn-animate btn-animate-side btn-success float-right">
                     <span><i class="icon wb-edit" aria-hidden="true"></i>Əlavə Et</span>
                     </button>
                  </form>
                  <!-- End Example Rounded Input -->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End Page -->
<?php require_once 'footer.php'; ?>