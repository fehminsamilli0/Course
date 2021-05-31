<?php require_once 'header.php'; require_once 'nav.php';  require_once '../settings/code/blog.php'; ?>
<script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
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
<!-- Page -->
<div class="page">
   <div class="page-header">
      <h1 class="page-title">Blog Redaktə Edlimə Paneli</h1>
   </div>
   <div class="page-content">
      <!-- Panel Form Elements -->
      <div class="panel">
         <div class="panel-body container-fluid">
            <div class="row row-lg">
               <div class="col-md-12 col-lg-12">
                  <form method="POST" action="#" enctype="multipart/form-data">
                  	<input type="hidden" name="id" value="<?= $data['id'] ?>" />
                     <input type="hidden" name="k_sekil" value="<?= $data['sekil'] ?>" />

                     <div class="example-wrap">
                        <h4 class="example-title">Cari Şəkil</h4>
                        <img width="150" src="../../<?= $data['sekil']  ?>" />         
                     </div>

                     <div class="example-wrap">
                        <h4 class="example-title">Yeni Şəkil</h4>
                        <input type="file" class="filestyle" name="sekil"  data-buttonname="btn-secondary">       
                     </div>

                     <div class="example-wrap">
                        <h4 class="example-title">Başlıq</h4>
                        <input  class="form-control round" required="required" name="Basliq" type="text" value="<?= $data['Basliq'] ?>" id="basliq">
                     </div>

                     <div class="example-wrap">
                        <h4 class="example-title">Məzmun</h4>
                        <div class="col-xl-12 form-group">
                           <textarea class="form-control" id="mezmun" rows="15" name="mezmun"><?= $data['mezmun'] ?></textarea>
                        </div>
                     </div>
               
                     <button class="btn btn-outline-info btn-block" name="b_redakte">Redaktə Et</button>
                  </form>
                  <!-- End Example Rounded Input -->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End Page -->
<?php require_once 'footer.php'; ?>