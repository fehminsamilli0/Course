<?php require_once 'header.php'; require_once 'nav.php'; require_once '../settings/code/slider.php'; ?>
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
                     <input type="hidden" name="tarix" value="<?= date("Y-m-d H:i:s");  ?>" />
                     <div class="card-body">
                        <h4 class="mt-0 header-title">Slider</h4>
                        <div class="form-group row">
                           <label for="basliq" class="col-sm-2 col-form-label">Ad</label>
                           <div class="col-sm-10"><input class="form-control" name="ad" type="text"  id="basliq"></div>
                        </div>
                        <div class="form-group row">
                           <label for="basliq" class="col-sm-2 col-form-label">Şəkil</label>
                           
                              <input type="file" class="filestyle" name="sekil" data-input="false" data-buttonname="btn-secondary">
                           </div>
                        </div>
                        <button style="margin: 0px 0px 10px 10px;" class="btn btn-outline-info " name="s_elave">Əlavə Et</button>
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