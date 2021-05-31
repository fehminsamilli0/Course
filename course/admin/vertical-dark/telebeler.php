<?php require_once 'header.php'; ?>
<?php require_once 'nav.php'; require_once '../settings/code/telebe.php'; ?>
<div class="content-page">
<!-- Start content -->
<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12">
            <div class="page-title-box">
               <h4 class="page-title">Slider</h4>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <div class="card m-b-20">
               <div class="card-body">
                  <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                     <thead>
                        <tr>
                           <th>Ad Soyad</th>
                           <th>Fənn</th>
                           <th>Əlaqə Nömrəsi</th>
                           <th>status</th>
                           <th>Əməliyyat</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php for ($i=0; $i < count($telebeler) ; $i++) {  ?>
                        <tr>
                           <td><?= $telebeler[$i]['AdSoyad'] ?></td>
                           <td><?= $telebeler[$i]['telim'] ?></td>
                           <td><?= $telebeler[$i]['tel'] ?></td>
                           <td>
                              <?php if ($telebeler[$i]['bitirdiyi_tarix']!=null): ?>
                              <a href="#"><button class="btn btn-danger btn-sm">Təlimi Bitirmişdir</button></a>
                              <?php endif ?>
                              <?php if ($telebeler[$i]['bitirdiyi_tarix']==null): ?>
                                <a href="#"><button class="btn btn-info btn-sm">Təlimi Davam Edir</button></a>
                              <?php endif ?>
                           </td>
                           <td>
                            
                             <a href="telebe-etrafli.php?etrafli=ok&id=<?= $telebeler[$i]['id'] ?>"><button class="btn btn-outline-info btn-block">Ətraflı</button></a>

                           </td>
                        </tr>
                        <?php } ?>
                     </tbody>
                  </table>
               </div>
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
  function sil(id,sekil) {
    x = confirm("Sliderın silinməsinə əminsinizmi?");
    if (x) {
      window.location.href = "slider.php?status=sil&id="+id+"&sekil="+sekil;
    }
    else{
      alert("İmtina edildi!");
    }
  }
</script>
<?php require_once 'footer.php'; ?>