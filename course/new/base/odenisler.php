<?php require_once 'header.php'; require_once 'nav.php';  require_once '../settings/code/odenis.php'; ?>
<!-- Page -->
<div class="page">
	<div class="page-header">
		<h1 class="page-title">Ödənişlər</h1>
	</div>
	<div class="page-content">
		<div class="col-lg-12">
			<!-- Example Bordered Table -->
			<div class="tab-pane animation-slide-left" id="maas" role="tabpanel">

				<div class="panel-body">
					<table  class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
						<thead>
							<tr>
								<th>Ad Soyad</th>
								<th>Fənn</th>
								<th>Aylıq Ödəniş</th>
								<th>Ümumi Ödədiyi</th>
								<th>Qalıq Borc</th>
								<th>Ödənişlər</th>
								<th>Əməliyyat</th>
							</tr>
						</thead>
						<tbody>
							<?php for($i=0; $i<count($data[0]) ;$i++) {?>
								<tr>
									<td><?= $data[0][$i]["AdSoyad"] ?></td>
									<td><?= $data[0][$i]["telim"] ?></td>
									<td><?= $odenis->AyliqOdenis($data[0][$i]["id"]) ?> AZN</td>
									<td><?= $odenis->Umumiodediyi($data[0][$i]["id"]) ?> AZN</td>
									<td><?= $odenis->Qaliq($data[0][$i]["id"]) ?> AZN</td>
									<td><button data-toggle="modal" data-target="#id_<?= $data[0][$i]["id"] ?>" class="btn btn-info">Ödənişlər Cədvəli</button></td>
									<td>
										<button class="btn btn-primary" data-toggle="modal" data-target="#odenis_<?= $data[0][$i]["id"] ?>">Ödəniş Əlavə Et</button>
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
<!-- content -->
<!-- Button trigger modal -->
<?php for($i=0; $i < count($data[0]); $i++) { $cedvel = $odenis->OdenisCedveli($data[0][$i]["id"]); ?>

<!-- Modal -->
<div class="modal fade" id="id_<?= $data[0][$i]["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle"><?= $data[0][$i]["AdSoyad"] ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<table class="table">
					<tr>
						<th>No:</th>
						<th>Ödəniş Tarixi</th>
						<th>Ödədiyi Məbləğ</th>
						<th>Ödəniş Tipi</th>
					</tr>
					<?php  $say = 0; for($j=0;$j<count($cedvel);$j++) { if($cedvel[$j]['odeme_tarixi']==null){ continue;} ?>
					<tr>
						<td><?= ++$say ?></td>
						<td><?= $cedvel[$j]['odeme_tarixi'] ?></td>
						<td><?= $cedvel[$j]['odenis'] ?> AZN</td>
						<td><span style="color: red;"><?= mb_strtoupper($cedvel[$j]['status']) ?></span> Ödəniş</td>
					</tr>
				<?php } ?>
			</table>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
		</div>
	</div>
</div>
</div>
<?php } ?>
<?php for($i=0; $i<count($data[0]) ;$i++) {?>
	<div class="modal fade" id="odenis_<?= $data[0][$i]["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><?= $data[0][$i]["AdSoyad"] ?> - <?= $odenis->AyliqOdenis($data[0][$i]["id"]) ?> AZN</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="#">
						<input type="hidden" name="id" value="<?= $data[0][$i]["id"] ?>" />
						<div class="form-group">
							<label style="color: #000;" for="recipient-name" class="col-form-label">Ödəniş tipi:</label>
							<select name="status" class="form-control">
								<option disabled="disabled" selected="selected">Ödəniş tipini seçin..</option>
								<option value="tam">Tam</option>
								<option value="qismen">Qismən</option>
							</select>
						</div>
						<div class="form-group">
							<label style="color: #000;" for="message-text" class="col-form-label">Ödəniş:</label>
							<input type="number" class="form-control" placeholder="Ödəniş Əlavə Et" step="0.01" min="1" max="9999" name="odenis" />
						</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
						<button type="submit" class="btn btn-primary" name="odenis_elave">Əlavə Et</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php } ?>
<?php require_once 'footer.php'; ?>