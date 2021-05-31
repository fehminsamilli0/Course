<?php require_once 'header.php'; require_once 'nav.php'; require_once '../settings/code/telebe.php';?>
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-8">
					<div class="page-title-box">
						<h4 class="page-title"><?= $telebe_etrafli[0]["AdSoyad"] ?> - <?= $telebe_etrafli[0]["telim"] ?> Təlimi</h4>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="m-t-20" align="right">
						<button class="btn btn-outline-info">Redaktə Et</button>
						<button class="btn btn-outline-danger">Sil</button>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<div class="card m-b-20">
						<div class="card-body">
							<h4 class="mt-0"> Şəxsi Məlumatları</h4>
							<table class="table table-bordered mb-0">
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
				<!-- end col -->
				<div class="col-6">
					<div class="card m-b-20">
						<div class="card-body">
							<h4 class="mt-0"> Tədris Məlumatları</h4>
							<table class="table table-bordered mb-0">
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
				</div>
				<!-- end col -->
				<div class="col-6">
					<div class="card m-b-20">
						<div class="card-body">
							<h4 class="mt-0"> Ödəniş Məlumatları</h4>
							<table class="table table-bordered mb-0">
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
				</div>
				<!-- end col -->
				<div class="col-6">
					<div class="card m-b-20">
						<div class="card-body">
							<h4 class="mt-0"> Dəvamiyyət Məlumatları</h4>
							<table class="table table-bordered mb-0">
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
				</div>
				<!-- end col -->
				<?php if($telebe_etrafli[0]["bitirdiyi_tarix"]!=null){ ?>
				<div class="col-12">
					<div class="card m-b-20">
						<div class="card-body">
							<h4 class="mt-0">Tələbənin Son Göstəriciləri</h4>
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
				<!-- end col -->
			<?php } ?>
		</div>

	</div>
	<!-- container-fluid -->
</div>
<!-- content -->
<?php require_once 'footer.php'; ?>