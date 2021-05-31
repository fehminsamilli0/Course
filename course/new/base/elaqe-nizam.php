<?php require_once 'header.php'; require_once 'nav.php';  require_once '../settings/code/nizam.php'; ?>

<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Əlaqə Nizamlamaları</h1>
  </div>

  <div class="page-content">
    <!-- Panel Form Elements -->
    <div class="panel">
      <div class="panel-body container-fluid">
        <div class="row row-lg">
          <div class="col-md-12 col-lg-12">
            <form method="POST" action="#">
             <input type="hidden" name="nizam" value="elaqe" />
             <div class="example-wrap">
              <h4 class="example-title">Ünvan</h4>
              <input type="text" class="form-control round"  name="address" type="text" type="text" value="<?= $data['address'] ?>">
            </div>
            <div class="example-wrap">
              <h4 class="example-title">Əlaqə nömrəsi ( Mobil )</h4>
              <input type="tel" class="form-control round" name="mobile" type="text" value="<?= $data['mobile'] ?>">
            </div>
            <div class="example-wrap">
              <h4 class="example-title">Əlaqə nömrəsi ( Ofis )</h4>
              <input type="tel" class="form-control round" name="office"  type="text" value="<?= $data['office'] ?>" >
            </div>
            <div class="example-wrap">
              <h4 class="example-title">E-mail</h4>
              <input type="email" class="form-control round" name="email" type="text" value="<?= $data['email'] ?>" >
            </div>
            <div class="example-wrap">
              <h4 class="example-title">Poçt İndeksi</h4>
              <input type="text" class="form-control round" name="post_code" type="text" value="<?= $data['post_code'] ?>">
            </div>

            <button type="submit"  name="e_yenile" class="btn btn-animate btn-animate-side btn-success float-right">
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