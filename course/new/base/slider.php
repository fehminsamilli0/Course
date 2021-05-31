<?php require_once 'header.php'; require_once 'nav.php';  require_once '../settings/code/slider.php'; ?>
<!-- Page -->
<div class="page">
	<div class="page-header">
		<h1 class="page-title">Slider</h1>
		<div style="margin:20px 0 0 0">
		<a href="slider-elave.php"><button class="btn btn-animate btn-animate-side btn-info">
			<span><i class="icon wb-edit" aria-hidden="true"></i>Əlavə Et</span>
		</button></a>
		</div>
	</div>
	<div class="page-content">
		<div class="col-lg-12">
			<!-- Example Bordered Table -->
			<div class="example-wrap">
				<div class="example table-responsive">
					<table class="table table-bordered">
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
                              <a href="slider.php?id=<?= $data[$i]['id']?>&status=deaktiv">
                              <button class="btn btn-danger btn-sm">Deaktiv Et</button></a>
                              <?php endif ?>
                              <?php if ($data[$i]['status']==0): ?>
                                <a href="slider.php?id=<?= $data[$i]['id']?>&status=aktiv">
                                <button class="btn btn-info btn-sm">Aktiv Et</button></a>
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
			<!-- End Example Bordered Table -->
		</div>
	</div>
</div>
<!-- End Page -->

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