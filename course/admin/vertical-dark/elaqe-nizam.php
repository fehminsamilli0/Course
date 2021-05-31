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
                     <input type="hidden" name="nizam" value="elaqe" />
                     <div class="card-body">
                        <h4 class="mt-0 header-title">Əlaqə Nizamlamaları</h4>
                        <div class="form-group row">
                           <label for="basliq" class="col-sm-2 col-form-label">Ünvan</label>
                           <div class="col-sm-10"><input class="form-control" name="address" type="text" value="<?= $data['address'] ?>" id="basliq"></div>
                        </div>
                        <div class="form-group row">
                           <label for="mobile" class="col-sm-2 col-form-label">Əlaqə nömrəsi ( Mobil )</label>
                           <div class="col-sm-10"><input class="form-control" name="mobile" type="tel" value="<?= $data['mobile'] ?>" id="mobile"></div>
                        </div>
                        <div class="form-group row">
                           <label for="office" class="col-sm-2 col-form-label">Əlaqə nömrəsi ( Ofis )</label>
                           <div class="col-sm-10"><input class="form-control" name="office" type="tel" value="<?= $data['office'] ?>" id="office"></div>
                        </div>
                        <div class="form-group row">
                           <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                           <div class="col-sm-10"><input class="form-control" name="email" type="email" value="<?= $data['email'] ?>" id="email"></div>
                        </div>
                        <div class="form-group row">
                           <label for="post_code" class="col-sm-2 col-form-label">Poçt İndeksi</label>
                           <div class="col-sm-10"><input class="form-control" name="post_code" type="text" value="<?= $data['post_code'] ?>" id="post_code"></div>
                        </div>
                        <button class="btn btn-outline-info btn-block" name="e_yenile">Yenilə</button>
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