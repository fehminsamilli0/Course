<?php require_once 'header.php'; require_once 'nav.php';  require_once '../settings/code/nizam.php'; ?>

<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Sosial Nizamlamalar</h1>
  </div>

  <div class="page-content">
    <!-- Panel Form Elements -->
    <div class="panel">
      <div class="panel-body container-fluid">
        <div class="row row-lg">
          <div class="col-md-12 col-lg-12">
            <form method="POST" action="#">
             <input type="hidden" name="nizam" value="sosial" />
             <div class="example-wrap">
              <h4 class="example-title">Facebook</h4>
              <input type="url" class="form-control round"  name="facebook" value="<?= $data['facebook'] ?>">
            </div>
            <div class="example-wrap">
              <h4 class="example-title">Youtube</h4>
              <input type="url" class="form-control round" name="youtube" value="<?= $data['youtube'] ?>">
            </div>
            <div class="example-wrap">
              <h4 class="example-title">Instagram</h4>
              <input type="url" class="form-control round" name="instagram"  value="<?= $data['instagram'] ?>" id="instagram" >
            </div>
         

            <button type="submit"  name="s_yenile" class="btn btn-animate btn-animate-side btn-success float-right">
              <span><i class="icon wb-edit" aria-hidden="true"></i>Yenilə</span>
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