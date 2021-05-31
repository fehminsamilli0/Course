<?php require_once 'header.php'; require_once 'nav.php'; require_once '../settings/code/isci.php';?>

<!-- Page -->
<div class="page">
	<div class="page-content container-fluid">
		<div class="row">
			<div class="col-lg-3">
				<!-- Page Widget -->
				<div class="card card-shadow text-center">
					<div class="card-block">
						<a class="avatar avatar-lg" href="javascript:void(0)">
							<img  src="../../<?= $egetir['sekil'] ?>" alt="...">
						</a>
						<h4 class="maas-user"><?= $egetir['AdSoyad'] ?></h4>
						<p class="maas-job"><?= $egetir['Vezife'] ?></p>
						<p><?= $egetir['Maas_Tip'] ?> : <?= $egetir['Maas'] ?> <?= $egetir['Maas_Tip']=="sabit" ? " AZN" : " %"  ?></p>
						<hr />
						<div class="maas-social">
							<i class="fas fa-phone"></i> <?= $egetir['tel'] ?> <br />
							<i class="fas fa-envelope"></i> <?= $egetir['email'] ?>
						</div>
						<?php if ($egetir['status']==1): ?>
							<button class="btn btn-info">Aktiv</button>
						<?php endif ?>
						<?php if ($egetir['status']==0): ?>
							<button class="btn btn-danger">De aktiv</button>
						<?php endif ?>
					</div>
				</div>
				<!-- End Page Widget -->
			</div>
			<div class="col-lg-9">
				<!-- Panel -->
				<div class="panel">
					<div class="panel-body nav-tabs-animate nav-tabs-horizontal" data-plugin="tabs">
						<ul class="nav nav-tabs nav-tabs-line" role="tablist">
							<li class="nav-item" role="presentation"><a class="active nav-link" data-toggle="tab" href="#melumatlar"
								aria-controls="melumatlar" role="tab">Məlumatlar</a></li>
								<li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#maas" aria-controls="maas"
									role="tab">Maaşlar</a></li>

									<li class="nav-item dropdown">
										<a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" aria-expanded="false">Menu </a>
										<div class="dropdown-menu" role="menu">
											<a class="active dropdown-item" data-toggle="tab" href="#melumatlar" aria-controls="melumatlar"
											role="tab">Məlumatlar</a>
											<a class="dropdown-item" data-toggle="tab" href="#maas" aria-controls="maas"
											role="tab">Maaşlar</a>

										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane active animation-slide-left" id="melumatlar" role="tabpanel">
										<div class="row">
											<div class="col-12">
												<div class="panel">
													<header class="panel-heading">
														<div class="panel-actions"></div>
													</header>
													<div class="panel-body">
														<table class="table table-hover  table-striped w-full">
															<thead>
																<tr>
																	<th>Şifrə</th>
																	<th>İşə başlama tarixi:</th>
																	<th>İşdən çıxma tarixi:</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><?= $egetir['sifre_askar'] ?></td>
																	<td><?= $egetir['baslama_tarixi'] ?></td>
																	<td> <?php if($egetir['bitirme_tarixi']==null) echo "<b>Hal-hazırda işləyir</b>"; else echo $egetir['bitirme_tarixi']; ?></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="tab-pane animation-slide-left" id="maas" role="tabpanel">
										
										<div class="panel-body">
											<table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
												<thead>
													<tr>
														<td><strong>Kod</strong></td>
														<td class="text-center"><strong>Ödənilmə Tarixi</strong></td>
														<td class="text-center"><strong>Məbləq</strong></td>
													</tr>
												</thead>
												<tbody>
													<?php 
													$cem = 0;
													for ($i=0; $i < count($odenis) ; $i++) {
														$cem += $odenis[$i]["odenilen_mebleq"];
														?>
														<tr>
															<td>ÖK-<?= $odenis[$i]["id"] ?></td>
															<td class="text-center"><?= $odenis[$i]["odenme_tarixi"] ?></td>
															<td class="text-center"><?= $odenis[$i]["odenilen_mebleq"] ?> AZN</td>

														</tr>
													<?php } ?>
													<tr>
														<td class="no-line"></td>
														<td class="no-line"></td>
														<td class="no-line text-right">
															<h4 class="m-0">Ümumi cəm: <?= $cem ?> AZN</h4>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="d-print-none">
											<div class="float-right"><a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa-print"></i></a> </div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- End Panel -->
		<?php require_once 'footer.php'; ?>