<?php require_once 'header.php'; require_once 'nav.php'; require_once '../settings/code/telebe.php';?>

<!-- Page -->
<div class="page">
	<div class="page-content container-fluid">
		<div class="row">
			<div class="col-lg-3">
				<!-- Page Widget -->
				<div class="card card-shadow text-center">
					<div class="card-block">
						<a class="avatar avatar-lg" href="javascript:void(0)">
							<img  src="assets/images/telebe.ico" alt="...">
						</a>
						<h4 class="tedris-user"><?= $telebe_etrafli[0]["AdSoyad"] ?> </h4>
						<p class="tedris-job"><?= $telebe_etrafli[0]["telim"] ?> Təlimi</p>
						<p>Müəllimi: <?= $telebe_etrafli[0]["muellimi"] ?></p>
						<hr />
						<?php if ($telebeler[$i]['bitirdiyi_tarix']!=null): ?>
							<a href="#"><button class="btn btn-danger btn-sm">Təlimi Bitirmişdir</button></a>
						<?php endif ?>
						<?php if ($telebeler[$i]['bitirdiyi_tarix']==null): ?>
							<a href="#"><button class="btn btn-info btn-sm">Təlimi Davam Edir</button></a>
						<?php endif ?>
						<hr />
						<a href="telebe-redakte.php?redakte=ok&id=<?= $telebe_etrafli[0]['id'] ?>"><button class="btn btn-outline-info">Redaktə Et</button></a>
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
								aria-controls="melumatlar" role="tab">Şəxsi Məlumatları</a></li>
								<li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#tedris" aria-controls="tedris"
									role="tab">Tədris Məlumatları</a></li>
									<li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#odenis" aria-controls="odenis"
										role="tab">Ödəniş Məlumatları</a></li>
										<li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#devamiyyet" aria-controls="devamiyyet"
											role="tab">Dəvamiyyət Məlumatları</a></li>
											<li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#son" aria-controls="son"
												role="tab">Tələbənin Son Göstəriciləri</a></li>

												<li class="nav-item dropdown">
													<a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" aria-expanded="false">Daha Çox </a>
													<div class="dropdown-menu" role="menu">
														<a class="active dropdown-item" data-toggle="tab" href="#melumatlar" aria-controls="melumatlar"
														role="tab">Şəxsi Məlumatları</a>
														<a class="dropdown-item" data-toggle="tab" href="#tedris" aria-controls="tedris"
														role="tab">Tədris Məlumatları</a>
														<a class="dropdown-item" data-toggle="tab" href="#odenis" aria-controls="odenis"
														role="tab">Ödəniş Məlumatları</a>
														<a class="dropdown-item" data-toggle="tab" href="#devamiyyet" aria-controls="devamiyyet"
														role="tab">Dəvamiyyət Məlumatları</a>
														<a class="dropdown-item" data-toggle="tab" href="#son" aria-controls="son"
														role="tab">Tələbənin Son Göstəriciləri</a>

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
																		<tr>
																			<th>Ad Soyad</th>
																			<td><?= $telebe_etrafli[0]["AdSoyad"] ?></td>
																		</tr>
																		<tr>
																			<th>Şəxsiyyət Vəsiqəsi</th>
																			<td><?= $telebe_etrafli[0]["sv_nomresi"] ?></td>
																		</tr>
																		<tr>
																			<th>Təvəllüdü</th>
																			<td><?= $telebe_etrafli[0]["tevellud"] ?></td>
																		</tr>
																		<tr>
																			<th>Universitet</th>
																			<td><?= $telebe_etrafli[0]["uni"] ?></td>
																		</tr>
																		<tr>
																			<th>Əlaqə Nömrəsi</th>
																			<td><?= $telebe_etrafli[0]["tel"] ?></td>
																		</tr>
																		<tr>
																			<th>Email</th>
																			<td><?= $telebe_etrafli[0]["email"] ?></td>
																		</tr>
																		<tr>
																			<th>Ünvan</th>
																			<td><?= $telebe_etrafli[0]["unvan"] ?></td>
																		</tr>
																	</table>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="tab-pane animation-slide-left" id="tedris" role="tabpanel">

													<div class="panel-body">
														<table class="table table-hover  table-striped w-full">
															<tr>
																<th>Təlim</th>
																<td><?= $telebe_etrafli[0]["telim"] ?></td>
															</tr>
															<tr>
																<th>Müəllimi</th>
																<td><?= $telebe_etrafli[0]["muellimi"] ?></td>
															</tr>
															<tr>
																<th>Başlama Tarixi</th>
																<td><?= $telebe_etrafli[0]["bas_tarix"] ?></td>
															</tr>
															<tr>
																<th>Bitirmə Tarixi</th>
																<td><?= $telebe_etrafli[0]["bitirdiyi_tarix"] ?></td>
															</tr>
															<tr>
																<th>Müddəti</th>
																<td><?= $telebe_etrafli[0]["muddeti"] ?> Ay</td>
															</tr>
															<tr>
																<th>Fərdi/Qrup</th>
																<td><?= $telebe_etrafli[0]["Ferdi"] ? "Fərdi dərslər" : "Qrup dərsləri" ?></td>
															</tr>
															<tr>
																<th>Həftəlik Dərs Müddəti</th>
																<td><?= $telebe_etrafli[0]["hef_ders_muddeti"] ?> Dəfə</td>
															</tr>
															<tr>
																<th>Ümumi Təlim Saatı</th>
																<td><?= $telebe_etrafli[1]["umumi_ders_sayi"]*2 ?> Akademik Saat</td>
															</tr>
														</table>
													</div>
												</div>
												<div class="tab-pane animation-slide-left" id="odenis" role="tabpanel">
													<div class="panel-body">
														<table class="table table-hover  table-striped w-full">
															<tr>
																<th>Aylıq Ödəniş</th>
																<td><?= $telebe_etrafli[2]["ayliq_odenis"] ?> AZN</td>
															</tr>
															<tr>
																<th>Endirim faizi</th>
																<td><?= $telebe_etrafli[0]["endirim"] ?> %</td>
															</tr>
															<tr>
																<th>Endirimsiz Ödəniş</th>
																<td><?= $telebe_etrafli[2]["endirimsiz_odenis"] ?> AZN</td>
															</tr>
															<tr>
																<th>Ümumi Borc</th>
																<td><?= $telebe_etrafli[2]["umumi_borc"] ?> AZN</td>
															</tr>
															<tr>
																<th>Ödədiyi Məbləq</th>
																<td><?= $telebe_etrafli[2]["umumi_odenilen"] ?> AZN</td>
															</tr>
															<tr>
																<th>Qalıq Borc</th>
																<td><?= $telebe_etrafli[2]["qaliq_borc"] ?> AZN</td>
															</tr>
														</table>
													</div>
												</div>
												<div class="tab-pane animation-slide-left" id="devamiyyet" role="tabpanel">
													<div class="panel-body">
														<table class="table table-hover  table-striped w-full">
															<tr>
																<th>Ümumi Dərs Sayı</th>
																<td><?= $telebe_etrafli[1]["umumi_ders_sayi"] ?></td>
															</tr>
															<tr>
																<th>İştirak Etdiyi Dərs Sayı</th>
																<td><?= $telebe_etrafli[1]["umumi_ders_sayi"]-$telebe_etrafli[1]["qalan_ders_sayi"] ?></td>
															</tr>
															<tr>
																<th>Qalan Dərs Sayı</th>
																<td><?= $telebe_etrafli[1]["qalan_ders_sayi"] ?></td>
															</tr>
														</table>
													</div>
												</div>
												<div class="tab-pane animation-slide-left" id="son" role="tabpanel">
													<div class="panel-body">
														<table class="table table-hover  table-striped w-full">
															<table class="table table-bordered mb-0">
																<tr>
																	<th>Sertifikat Nömrəsi</th>
																	<th>Ümumi Göstərici</th>
																	<th>Müəllim Rəyi</th>
																</tr>
																<tr>
																	<td><?= $telebe_etrafli[0]["sertifikat_nomresi"] ?></td>
																	<td><?= $telebe_etrafli[0]["umumi_gosterivcisi"] ?></td>
																	<td><?= $telebe_etrafli[0]["muellim_rey"] ?></td>
																</tr>
															</table>
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