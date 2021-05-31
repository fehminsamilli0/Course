<?php require_once 'header.php'; ?>
<?php require_once 'nav.php'; 
require_once '../settings/code/isci.php'; ?>
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
                              <th>şəkil</th>
                              <th>Ad Soyad</th>
                              <th>Vəzifə</th>
                              <th>status</th>
                              <th>Maaş</th>
                              <th>Ətraflı</th>
                           </tr>
                        </thead>
                        <tbody>

                           <?php for ($i=0; $i <count($data) ; $i++) { ?>

                             <tr align="center">
                              <td><img width="50" height="50" src="../../<?= $data[$i]['sekil'] ?>"></td>
                              <td><?= $data[$i]['AdSoyad'] ?></td>
                              <td><?= $data[$i]['Vezife'] ?></td>
                              <td>
                                 <?php if ($data[$i]['status']==1): ?>
                                  <a href="isciler.php?id=<?= $data[$i]['id'] ?>&status=deaktiv"> <button class="btn btn-danger">Deaktiv Et</button></a>
                               <?php endif ?>
                               <?php if ($data[$i]['status']==0): ?>
                                 <a href="isciler.php?id=<?= $data[$i]['id'] ?>&status=aktiv">  <button class="btn btn-info">Aktiv Et</button></a>
                              <?php endif ?>
                           </td>
                           <td>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#isci_<?= $data[$i]['id'] ?>" data-whatever="@getbootstrap">Maaş Əlavə Et</button>
                           </td>
                           <td>
                              <a href="isci-etrafli.php?isci_etrafli=ok&id=<?= $data[$i]['id'] ?>"><button class="btn btn-outline-info">Ətraflı</button></a>
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
<?php for ($i=0; $i <count($data) ; $i++) { ?>
   <div class="modal fade" id="isci_<?= $data[$i]['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
     <div class="modal-content">
      <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel"><?= $data[$i]['AdSoyad'] ?> ( <?= $data[$i]['Vezife'] ?> )</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
        </button>
     </div>
     <div class="modal-body">
      <form method="POST" action="#">
         <input type="hidden" name="id" value="<?= $data[$i]['id'] ?>" />
         <div class="form-group">
            <label for="recipient-name" class="col-form-label">Maaş:</label>
            <input type="number" step="0.01" name="maas" min="0" max="9999" placeholder="Maaş daxil edin.." class="form-control" id="recipient-name" />
         </div>

      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">İmtina</button>
       <button type="submit" name="maas_elave" class="btn btn-primary">Əlavə Et</button>
    </div> 
 </form>
</div>
</div>
</div>
<?php } ?>
<?php require_once 'footer.php'; ?>