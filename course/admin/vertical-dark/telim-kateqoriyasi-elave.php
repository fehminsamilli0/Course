<?php require_once 'header.php'; require_once 'nav.php'; require_once '../settings/code/telimler.php'; ?>

<!-- Start right Content here --><!-- ============================================================== -->
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
				</div>
			</div>
			<!-- end row -->
			<div class="row">
				<div class="col-12">
					<div class="card m-b-20">
						<form method="POST" action="#">
							<div class="card-body">
								<h4 class="mt-0 header-title">Təlim Kateqoriyası Əlavə Etmə Paneli</h4>
								<div class="form-group row">
									<label for="basliq" class="col-sm-2 col-form-label">Adı</label>
									<div class="col-sm-10"><input class="form-control" name="ad" type="text" placeholder="Ad daxil edin" id="basliq"></div>
								</div>
								<div class="form-group row">
									<label for="description" class="col-sm-2 col-form-label">Sıra</label>
									<div class="col-sm-10">
										<select class="form-control" id="sira" name="sira">
											<?php for ($i=1; $i <= 10 ; $i++) { 
												if (in_array($i,$x)) {continue;}
												?>
												<option value="<?= $i ?>"><?= $i ?></option>

											<?php } ?>
										</select>
									</div>
								</div>
								<button class="btn btn-outline-info btn-block" name="t_k_elave">Əlavə Et</button>
							</div>
						</form>
					</div>
				</div>
				<!-- end col -->
			</div>
			<!-- end row -->
		</div>
		<!-- container-fluid -->
	</div>
	<!-- content -->
	<?php require_once 'footer.php'; ?>