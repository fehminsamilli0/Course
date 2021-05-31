<?php require_once 'header.php'; ?>
<?php require_once 'nav.php'; require_once '../settings/code/telimler.php'; ?>
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div class="page-title-box">
						<h4 class="page-title">Təlim Kateqoriyaları</h4>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card m-b-20">
						<div align="right" style="margin: 10px 10px 0 0;">
							<a href="telim-kateqoriyasi-elave.php"><button class="btn btn-outline-info">Əlavə Et</button></a>
						</div>
						<div class="card-body">
							<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
								<thead>
									<tr>
										<th>ad</th>
										<th>Sıra</th>
										<th>status</th>
										<th>Əməliyyat</th>
									</tr>
								</thead>
								<tbody>
									<?php for ($i=0; $i < count($data) ; $i++) {  ?>
										<tr>
											<td><?= $data[$i]['ad'] ?></td>
											<td><?= $data[$i]['sira'] ?></td>
											<td>
												<?php if ($data[$i]['status']==1): ?>
													<a href="telim-kateqoriyalari.php?id=<?= $data[$i]['id']?>&statusad=deaktiv&table=telim_kat"><button class="btn btn-danger btn-sm">Deaktiv Et</button></a>
												<?php endif ?>
												<?php if ($data[$i]['status']==0): ?>
													<a href="telim-kateqoriyalari.php?id=<?= $data[$i]['id']?>&statusad=aktiv&table=telim_kat"><button class="btn btn-info btn-sm">Aktiv Et</button></a>
												<?php endif ?>
											</td>
											<td>

												<button class="btn btn-outline-danger btn-block" onclick="sil(<?= $data[$i]['id'];?>)">Sil</button>

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
	<?php require_once 'footer.php'; ?>