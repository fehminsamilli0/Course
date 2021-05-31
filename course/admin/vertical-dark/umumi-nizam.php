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
                     <input type="hidden" name="nizam" value="umumi" />
                     <div class="card-body">
                        <h4 class="mt-0 header-title">Ümumi Nizamlamalar</h4>
                        <div class="form-group row">
                           <label for="basliq" class="col-sm-2 col-form-label">Başlıq (Title)</label>
                           <div class="col-sm-10"><input class="form-control" name="title" type="text" value="<?= $data['title'] ?>" id="basliq"></div>
                        </div>
                        <div class="form-group row">
                           <label for="description" class="col-sm-2 col-form-label">Açıqlama ( Description)</label>
                           <div class="col-sm-10"><input class="form-control" name="description" type="text" value="<?= $data['description'] ?>" id="description"></div>
                        </div>
                        <div class="form-group row">
                           <label for="keywords" class="col-sm-2 col-form-label">Açar sözlər ( Keywords)</label>
                           <div class="col-sm-10"><input class="form-control" name="keywords" type="text" value="<?= $data['keywords'] ?>" id="keywords"></div>
                        </div>
                        <button class="btn btn-outline-info btn-block" name="u_yenile">Yenilə</button>
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