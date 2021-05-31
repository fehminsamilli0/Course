<?php require_once 'header.php'; require_once 'nav.php';  require_once '../settings/code/telimler.php'; ?>
<!-- Page -->
<div class="page">
	<div class="page-header">
		<h1 class="page-title">Təlim Məzmunları</h1>
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
								<th>Şəkil</th>
								<th>Ad</th>
								<td>Kateqoriyası</td>
								<td>Qiyməti</td>
								<th>Endirim</th>
								<th>Məzmun</th>
								<th>status</th>
								<th class="text-nowrap">Əməliyyatlar</th>
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
										<button onclick="sil(<?= $mezmun_data[$i]['id']?>,'../../<?= $mezmun_data[$i]['sekil']?>')" class="btn btn-outline-danger btn-sm">Sil</button>
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


<div class="modal fade" id="exampleFormModal" aria-hidden="false" aria-labelledby="exampleFormModalLabel"
role="dialog" tabindex="-1">
<div class="modal-dialog modal-simple">
	<form  method="POST" action="#" class="modal-content" enctype="multipart/form-data">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
			<h4 class="modal-title" id="exampleFormModalLabel">Yeni Məzmun Əlavə Edirsiniz</h4>
		</div>
		<div class="modal-body">
			<div class="row">

				<div class="col-xl-12 form-group"> 
					<label>Təlim Kateqoriyası</label>
					<select name="tel_kat" class="form-control">
						<?php for ($i=0; $i < count($data) ; $i++) { ?>
							<option value="<?= $data[$i]["id"] ?>"><?= $data[$i]["ad"] ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="col-xl-12 form-group">
					<input class="form-control" required="required" name="Basliq" type="text" placeholder="Başlıq Əlavə Et" id="basliq" />
				</div>
				<div class="col-xl-12 form-group">
					<input class="form-control" required="required" min="0" name="qiymet" type="number" placeholder="Qiymət daxil edin.." id="qiymet">
				</div>
				<div class="col-xl-12 form-group">
					<input class="form-control" required="required" min="0" max="100" name="Endirim" type="number" placeholder="Endirim daxil edin.." id="Endirim">
				</div>
				<div class="col-xl-12 form-group">
					<label>Şəkil seç</label>
					<input type="file" class="filestyle" name="sekil" required="required" data-input="false" data-buttonname="btn-secondary">
				</div>
				<div class="col-xl-12 form-group">
					<textarea class="form-control" id="mezmun" rows="15" name="mezmun"></textarea>
				</div>
				<div class="col-md-12 float-right">
					<button class="btn btn-outline-info btn-block" name="t_elave">Əlavə Et</button>
				</div>
			</div>
		</div>
	</form>
</div>
</div>
<script>
	function sil(id,sekil) {
		x = confirm("Təlim məzmununun silinməsinə əminsinizmi?");
		if (x) {
			window.location.href = "telim-mezmunlari.php?status=mezmunsil&id="+id+"&sekil="+sekil;
		}
		else{
			alert("İmtina edildi!");
		}
	}
</script>
<script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js">
</script>

<script type="text/javascript">
	tinymce.init({

		entity_encoding : "raw",
		selector: "textarea",
		theme: "modern",
		plugins: [
		"advlist autolink lists link image charmap print preview hr anchor pagebreak",
		"searchreplace wordcount visualblocks visualchars code fullscreen",
		"insertdatetime media nonbreaking save table contextmenu directionality",
		"emoticons template paste textcolor colorpicker textpattern imagetools"
		],
		toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
		toolbar2: "print preview media | forecolor backcolor emoticons | ltr rtl",
		image_advtab: true,
		templates: [
		{ title: 'Test template 1', content: 'Test 1' },
		{ title: 'Test template 2', content: 'Test 2' }
		],

	});
</script>
<?php require_once 'footer.php'; ?>