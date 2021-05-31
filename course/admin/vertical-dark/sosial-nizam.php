<?php require_once 'header.php'; require_once 'nav.php'; require_once '../settings/code/nizam.php'; ?>
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
                     <input type="hidden" name="nizam" value="sosial" />
                     <div class="card-body">
                        <h4 class="mt-0 header-title">Sosial Nizamlamaları</h4>
                        <div class="form-group row">
                           <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
                           <div class="col-sm-10"><input class="form-control" name="facebook" type="url" value="<?= $data['facebook'] ?>" id="facebook"></div>
                        </div>
                        <div class="form-group row">
                           <label for="youtube" class="col-sm-2 col-form-label">Youtube</label>
                           <div class="col-sm-10"><input class="form-control" name="youtube" type="url" value="<?= $data['youtube'] ?>" id="youtube"></div>
                        </div>
                        <div class="form-group row">
                           <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
                           <div class="col-sm-10"><input class="form-control" name="instagram" type="url" value="<?= $data['instagram'] ?>" id="instagram"></div>
                        </div>


                        <button class="btn btn-outline-info btn-block" name="s_yenile">Yenilə</button>
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