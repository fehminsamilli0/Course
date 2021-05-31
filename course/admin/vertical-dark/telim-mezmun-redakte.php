<?php require_once 'header.php'; require_once 'nav.php'; require_once '../settings/code/telimler.php'; ?>
<!-- Start right Content here --><!-- ============================================================== -->
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
						<form method="POST" action="#" enctype="multipart/form-data">
							<input type="hidden" name="id" value="<?= $mdata['id'] ?>" />
							<input type="hidden" name="k_sekil" value="<?= $mdata['sekil'] ?>" />
							<div class="card-body">
								<h4 class="mt-0 header-title">Təlim Redaktə</h4>
								<div class="form-group row">
									<label for="sekil" class="col-sm-2 col-form-label">Cari Şəkil </label>
									<div class="col-sm-10">
										<img width="150" src="../../<?= $mdata['sekil'] ?>">
									</div>
								</div>
								<div class="form-group row">
									<label for="mezmun" class="col-sm-2 col-form-label">Təlim Kateqoriyası</label>
									<div class="col-sm-10">
										<select name="tel_kat" class="form-control">
											<?php for ($i=0; $i < count($data) ; $i++) { ?>
												<option <?= $data[$i]['id']==$mdata['tel_kat_id'] ? 'selected="selected"' : '' ?> value="<?= $data[$i]["id"] ?>"><?= $data[$i]["ad"] ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label for="basliq" class="col-sm-2 col-form-label">Başlıq </label>
									<div class="col-sm-10"><input class="form-control" required="required" name="Basliq" type="text" value="<?= $mdata['Basliq'] ?>"	 id="basliq"></div>
								</div>
								<div class="form-group row">
									<label for="mezmun" class="col-sm-2 col-form-label">Məzmun</label>
									<div class="col-sm-10">
										<textarea class="form-control" id="mezmun" rows="15" name="mezmun"><?= $mdata['mezmun'] ?></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label for="qiymet" class="col-sm-2 col-form-label">Qiymət</label>
									<div class="col-sm-10"><input class="form-control" required="required" min="0" name="qiymet" type="number" value="<?= $mdata['qiymet'] ?>" id="qiymet"></div>
								</div>
								<div class="form-group row">
									<label for="Endirim" class="col-sm-2 col-form-label">Endirim</label>
									<div class="col-sm-10"><input class="form-control" required="required" min="0" max="100" name="Endirim" type="number" value="<?= $mdata['endirim_faiz'] ?>" id="Endirim"></div>
								</div>
								<div class="card-body">
									<h4 class="mt-0 header-title">Şəkil</h4>
									<div class="form-group">
										<input type="file" class="filestyle" name="sekil"  data-input="false" data-buttonname="btn-secondary"></div>
									</div>
									<div class="card-body">
										<button class="btn btn-outline-info btn-block" name="t_m_redakte">Redaktə Et</button>
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