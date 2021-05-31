<?php require_once 'header.php'; ?>
<?php require_once 'nav.php'; require_once '../settings/code/slider.php'; ?>
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
               <div align="right" style="margin: 10px 10px 0 0;">
                  <a href="slider-elave.php"><button class="btn btn-outline-info">Əlavə Et</button></a>
               </div>
               <div class="card-body">
                  <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                     <thead>
                        <tr>
                           <th>şəkil</th>
                           <th>ad</th>
                           <th>tarix</th>
                           <th>status</th>
                           <th>Əməliyyat</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php for ($i=0; $i < count($data) ; $i++) {  ?>
                        <tr>
                           <td><img width="50" src="../../<?= $data[$i]['sekil'] ?>"></td>
                           <td><?= $data[$i]['ad'] ?></td>
                           <td><?= $data[$i]['tarix'] ?></td>
                           <td>
                              <?php if ($data[$i]['status']==1): ?>
                              <a href="slider.php?id=<?= $data[$i]['id']?>&status=deaktiv"><button class="btn btn-danger btn-sm">Deaktiv Et</button></a>
                              <?php endif ?>
                              <?php if ($data[$i]['status']==0): ?>
                                <a href="slider.php?id=<?= $data[$i]['id']?>&status=aktiv"><button class="btn btn-info btn-sm">Aktiv Et</button></a>
                              <?php endif ?>
                           </td>
                           <td>
                           	
                           	<button class="btn btn-outline-danger btn-block" onclick="sil(<?= $data[$i]['id'];?>,'<?= $data[$i]['sekil'];?>')">Sil</button>

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