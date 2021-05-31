<?php require_once 'header.php'; require_once 'nav.php';  require_once '../settings/code/nizam.php'; ?>

<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Ümumi Nizamlamalar</h1>
  </div>

  <div class="page-content">
    <!-- Panel Form Elements -->
    <div class="panel">
      <div class="panel-body container-fluid">
        <div class="row row-lg">
          <div class="col-md-12 col-lg-12">
            <form method="POST" action="#">
             <input type="hidden" name="nizam" value="umumi" />
             <div class="example-wrap">
              <h4 class="example-title">Başlıq</h4>
              <input type="text" class="form-control round" name="title" type="text" value="<?= $data['title'] ?>">
            </div>
            <div class="example-wrap">
              <h4 class="example-title">Açıqlama</h4>
              <input type="text" class="form-control round" name="description" type="text" value="<?= $data['description'] ?>">
            </div>
            <div class="example-wrap">
              <h4 class="example-title">Açar söz</h4>
              <input type="text" class="form-control round" name="keywords" type="text" value="<?= $data['keywords'] ?>">
            </div>
            <button type="submit" name="u_yenile" class="btn btn-animate btn-animate-side btn-success float-right">
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