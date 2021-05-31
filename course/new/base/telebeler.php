<?php require_once 'header.php'; require_once 'nav.php';  require_once '../settings/code/telebe.php'; ?>
<!-- Page -->
<div class="page">
 <div class="page-header">
  <h1 class="page-title">Tələbələr</h1>
  <button  name="u_yenile" data-target="#exampleFormModal" data-toggle="modal" class="btn btn-animate btn-animate-side btn-info">
    <span><i class="icon wb-edit" aria-hidden="true"></i>Əlavə Et</span>
  </button>
</div>
<div class="page-content">
  <div class="col-lg-12">
   <!-- Example Bordered Table -->
   <div class="tab-pane animation-slide-left" id="maas" role="tabpanel">

    <div class="panel-body">
     <table  class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
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

         <a href="telebe.php?etrafli=ok&id=<?= $telebeler[$i]['id'] ?>"><button class="btn btn-outline-info btn-block">Ətraflı</button></a>

       </td>
     </tr>
   <?php } ?>
 </tbody>
</table>
</div>
</div>
<!-- End Example Bordered Table -->
</div>
</div>
</div>
<!-- End Page -->
<!-- content -->
<?php require_once 'footer.php'; ?>