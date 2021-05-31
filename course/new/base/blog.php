<?php require_once 'header.php'; require_once 'nav.php';  require_once '../settings/code/blog.php'; ?>
<!-- Page -->
<div class="page">
	<div class="page-header">
		<h1 class="page-title">Bloglar</h1>
		<button  data-toggle="modal" data-target="#elaveet" class="btn btn-animate btn-animate-side btn-info">
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
								<td>Əlavə Edilmə Tarixi</td>
								<th>Yenilənmə Tarixi</th>
								<th>Baxış Sayı</th>
								<th>Müəllif</th>
								<th>status</th>
								<th class="text-nowrap">Əməliyyatlar</th>
							</tr>
						</thead>
						<tbody>
							<?php for ($i=0; $i < count($data) ; $i++) {  ?>
							
							<tr align="center">
								<td><img width="75" src="../../<?= $data[$i]['sekil']  ?>"></td>
								<td><?= $data[$i]['Basliq'] ?></td>
								<td><?= $data[$i]['yazilma_tarixi'] ?></td>
								<td><?= $data[$i]['yenilenme_tarixi'] ?></td>
								<td><?= $data[$i]['oxunma_sayi'] ?></td>
								<td><?= $data[$i]['muellif'] ?></td>
								<td>
									<?php if ($data[$i]['status']==1): ?>
                              <a href="blog.php?id=<?= $data[$i]['id']?>&status=deaktiv">
                              <button class="btn btn-danger btn-sm">Deaktiv Et</button></a>
                              <?php endif ?>
                              <?php if ($data[$i]['status']==0): ?>
                                <a href="blog.php?id=<?= $data[$i]['id']?>&status=aktiv">
                                <button class="btn btn-info btn-sm">Aktiv Et</button></a>
                              <?php endif ?>
								</td>
								<td>

									<a href="blog-redakte.php?data=redakte&id=<?= $data[$i]['id'] ?>"><button class="btn btn-outline-info btn-sm">Redaktə</button></a>

									<button class="btn btn-outline-danger btn-sm" onclick="sil(<?= $data[$i]['id'];?>,'<?= $data[$i]['sekil'];?>')">Sil</button>
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
   function sil(id) {
      x = confirm("Blogun silinməsinə əminsinizmi?");
      if(x){
         window.location.href = "blog.php?status=sil&id="+id;
      }
      else{
         alert("İmtina edildi");
      }
   }
</script>

<div class="modal fade" id="elaveet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">data Əlavə Et</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="#" enctype="multipart/form-data">
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Başlıq:</label>
						<input type="text" name="basliq" class="form-control" id="recipient-name">
					</div>
					<div class="form-group">
						<label for="message-text" class="col-form-label">Məzmun:</label>
						<textarea name="mezmun" class="form-control" id="message-text"></textarea>
					</div>
					<div class="col-xl-12 form-group">
						<label>Şəkil seç</label>
						<input type="file" class="filestyle" name="sekil" required="required" data-input="false" data-buttonname="btn-secondary">
					</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
				<button type="submit" class="btn btn-primary" name="elv">Əlavə Et</button>
			</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js">
</script>
<script>
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