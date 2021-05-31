<?php require_once 'header.php'; require_once 'nav.php';  require_once '../settings/code/xidmetler.php'; ?>
<!-- Page -->
<div class="page">
   <div class="page-header">
      <h1 class="page-title">Xidmət Kateqoriyaları</h1>
      <button  name="u_yenile" data-target="#exampleFormModal" data-toggle="modal" class="btn btn-animate btn-animate-side btn-info">
      <span><i class="icon wb-edit" aria-hidden="true"></i>Əlavə Et</span>
      </button>
   </div>
   <div class="page-content">
      <div class="col-lg-12">
         <!-- Example Bordered Table -->
         <div class="example-wrap">
            <div class="example table-responsive">
               <table class="table table-bordered">
                  <thead>
                     <tr>
                        <th>Ad</th>
                        <th>Sıra</th>
                        <th>Status</th>
                        <th class="text-nowrap">Əməliyyatlar</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php for ($i=0; $i < count($k_data) ; $i++) {  ?>
                     <tr>
                        <td><?= $k_data[$i]['ad'] ?></td>
                        <td><?= $k_data[$i]['sira'] ?></td>
                        <td> 
                           <?php if ($k_data[$i]['status']==1): ?>
                           <a href="xidmet-kateqoriyalari.php?id=<?= $k_data[$i]['id']?>&status=deaktiv"><button class="btn btn-danger btn-sm">Deaktiv Et</button></a>
                           <?php endif ?>
                           <?php if ($k_data[$i]['status']==0): ?>
                           <a href="xidmet-kateqoriyalari.php?id=<?= $k_data[$i]['id']?>&status=aktiv"><button class="btn btn-info btn-sm">Aktiv Et</button></a>
                           <?php endif ?>
                        </td>
                        <td class="text-nowrap">
                           <button class="btn btn-outline-danger btn-block" onclick="sil(<?= $k_data[$i]['id'];?>)">Sil</button>
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
<div class="modal fade" id="exampleFormModal" aria-hidden="false" aria-labelledby="exampleFormModalLabel"
   role="dialog" tabindex="-1">
   <div class="modal-dialog modal-simple">
      <form  method="POST" action="#" class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="exampleFormModalLabel">Yeni Kateqoriya Əlavə Edirsiniz</h4>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-xl-12 form-group">
                  <input type="text" class="form-control"name="ad" required="required" type="text" placeholder="Ad daxil edin">
               </div>
               <div class="col-xl-12 form-group">
                  <select class="form-control" id="sira" name="sira">
                     <?php for ($i=1; $i <= 10 ; $i++) { 
                        if (in_array($i,$x)) {continue;}
                        ?>
                     <option value="<?= $i ?>"><?= $i ?></option>
                     <?php } ?>
                  </select>
               </div>
               <div class="col-md-12 float-right" align="right">
                  <button type="button" class="btn btn-primary btn-outline" data-dismiss="modal">Çıxış</button>
                  <button name="k_elave" class="btn btn-primary"  type="submit">Əlavə Et</button>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>
<div class="modal" id="exampleFormModal1" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <form method="POST" action="#" enctype="multipart/form-data" class="modal-content">
         <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title">Kateqoriyanin Redaktəsi</h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="row">
                  <label for="ad" class="col-sm-2 col-form-label">Ad </label>
                  <div class="col-xl-12 form-group">                        
                     <input class="form-control" required="required" name="ad" type="text" value="<?= $k_data['ad'] ?>" id="ad">
                  </div>
                  <div class="col-xl-12 form-group">
                     <select class="form-control" id="sira" name="sira" value="<?= $k_data['sira'] ?>">
                        <?php for ($i=1; $i <= 10 ; $i++) { 
                           if (in_array($i,$x)) {continue;}
                           ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                        <?php } ?>
                     </select>
                  </div>
                  <div class="col-md-12 float-left" align="right">
                     <button type="button" class="btn btn-primary btn-outline" data-dismiss="modal">Çıxış</button>
                     <button name="k_redakte" type="submit" class="btn btn-primary">Redakte ET</button>
                  </div>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>
<script>
   function sil(id) {
     x = confirm("Xidmet Kateqoriyasının silinməsinə əminsinizmi?");
     if (x) {
       window.location.href = "xidmet-kateqoriyalari.php?status=sil&id="+id;
     }
     else{
       alert("İmtina edildi!");
     }
   }
</script>
<?php require_once 'footer.php'; ?>