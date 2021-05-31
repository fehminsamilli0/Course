<?php require_once 'header.php'; ?>
<?php require_once 'nav.php'; require_once '../settings/code/telimler.php'; ?>
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div class="page-title-box">
						<h4 class="page-title">Təlim Məzmunları</h4>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card m-b-20">
						<div align="right" style="margin: 10px 10px 0 0;">
							<a href="telim-mezmun-elave.php"><button class="btn btn-outline-info">Əlavə Et</button></a>
						</div>
						<div class="card-body">
							<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
								<thead>
									<tr>
										<th>Şəkil</th>
										<th>Ad</th>
										<td>Kateqoriyası</td>
										<td>Qiyməti</td>
										<th>Endirim</th>
										<th>Məzmun</th>
										<th>status</th>
										<th>Əməliyyat</th>
									</tr>
								</thead>
								<tbody>
									<?php for ($i=0; $i < count($mezmun_data) ; $i++) {  ?>
										<tr align="center">
											<td>
												<img width="75" src="../../<?= $mezmun_data[$i]['sekil']  ?>">
											</td>
											<td><?= $mezmun_data[$i]['Basliq'] ?></td>
											<td><?= $telimler->RGetir($mezmun_data[$i]['tel_kat_id']); ?></td>
											<td>
												<?= $mezmun_data[$i]['qiymet'] ?> AZN
												<?= $mezmun_data[$i]['endirim_faiz']>0 ? "( ".number_format(((100-$mezmun_data[$i]['endirim_faiz'])/100)*$mezmun_data[$i]['qiymet'],2)." AZN)" : '' ?>

											</td>
											<td><?= $mezmun_data[$i]['endirim_faiz'] ?> %</td>
											<td><button class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#mezmun_<?= $mezmun_data[$i]['id'] ?> ">Bax</button></td>
											<td>
												<?php if ($mezmun_data[$i]['status']==1): ?>
													<a href="telim-mezmunlari.php?id=<?= $mezmun_data[$i]['id']?>&statusad=deaktiv&table=telim_mez"><button class="btn btn-danger btn-sm">Deaktiv Et</button></a>
												<?php endif ?>
												<?php if ($mezmun_data[$i]['status']==0): ?>
													<a href="telim-mezmunlari.php?id=<?= $mezmun_data[$i]['id']?>&statusad=aktiv&table=telim_mez"><button class="btn btn-info btn-sm">Aktiv Et</button></a>
												<?php endif ?>
											</td>
											<td>
												<a href="telim-mezmun-redakte.php?data=mredakte&id=<?= $mezmun_data[$i]['id'] ?>"><button class="btn btn-outline-info btn-sm">Redaktə</button></a>
												<button class="btn btn-outline-danger btn-sm">Sil</button>
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
		function sil(id) {
			x = confirm("Təlim Kateqoriyasının silinməsinə əminsinizmi?");
			if (x) {
				window.location.href = "telim-kateqoriyalari.php?status=sil&id="+id;
			}
			else{
				alert("İmtina edildi!");
			}
		}
	</script>
	<!-- Button trigger modal -->


	<!-- Modal -->
	<?php for ($i=0; $i < count($mezmun_data) ; $i++) {  ?>
		<div class="modal fade" id="mezmun_<?= $mezmun_data[$i]['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalCenterTitle"><?= $mezmun_data[$i]['Basliq'] ?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?= $mezmun_data[$i]['mezmun'] ?>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	<?php require_once 'footer.php'; ?>