<?php require_once 'header.php'; require_once 'nav.php';  require_once '../settings/code/portfolio.php'; ?>
<!-- Page -->
<div class="page">
   <div class="page-header">
      <h1 class="page-title">Portfolio Məzmunları</h1>
      <button  name="m_yenile" data-target="#exampleFormModal" data-toggle="modal" class="btn btn-animate btn-animate-side btn-info">
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
                     <tr align="center">
                        <th>Şəkil</th>
                        <th>Başlıq</th>
                        <td>Kateqoriyası</td>
                        <th>status</th>
                        <th class="text-nowrap">Əməliyyatlar</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php for ($i=0; $i < count($m_data) ; $i++) {  ?>
                     <tr align="center">
                        <td>
                           <img width="75" src="../../<?= $m_data[$i]['sekil']  ?>">
                        </td>
                        <td><?= $m_data[$i]['Basliq'] ?></td>
                        <td><?= $portfolio->Mez_Kat_Getir($m_data[$i]['port_kat_id']); ?></td>
                        <td>
                           <?php if ($m_data[$i]['status']==1): ?>
                           <a href="portfolio-mezmunlari.php?id=<?= $m_data[$i]['id']?>&m_status=deaktiv"><button class="btn btn-danger btn-sm">Deaktiv Et</button></a>
                           <?php endif ?>
                           <?php if ($m_data[$i]['status']==0): ?>
                           <a href="portfolio-mezmunlari.php?id=<?= $m_data[$i]['id']?>&m_status=aktiv"><button class="btn btn-info btn-sm">Aktiv Et</button></a>
                           <?php endif ?>
                        </td>
                        <td>

                            <a href="portfolio-mezmun-redakte.php?data=mredakte&id=<?= $m_data[$i]['id'] ?>"><button class="btn btn-outline-info btn-sm">Redaktə</button></a>
                           
                           <button onclick="sil(<?= $m_data[$i]['id']?>,'../../<?= $m_data[$i]['sekil']?>')" class="btn btn-outline-danger btn-sm">Sil</button>
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
                  <label>Xidmət Kateqoriyası</label>
                  <select name="port_kat" class="form-control">
                     <?php for ($i=0; $i < count($k_data) ; $i++) { ?>
                     <option value="<?= $k_data[$i]["id"] ?>"><?= $k_data[$i]["ad"] ?></option>
                     <?php } ?>
                  </select>
               </div>
               <div class="col-xl-12 form-group">
                  <input class="form-control" required="required" name="Basliq" type="text" placeholder="Başlıq Əlavə Et" id="basliq" />
               </div>
               <div class="col-xl-12 form-group">
                  <label>Şəkil seç</label>
                  <input type="file" class="filestyle" name="sekil" required="required"data-buttonname="btn-secondary">					 
               </div>
               
               <div class="col-md-12 float-right">
                  <button class="btn btn-primary btn-block" name="x_elave">Əlavə Et</button>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>

<script>
   function sil(id) {
      x = confirm("Xidmət Məzmunun silinməsinə əminsinizmi?");
      if(x){
         window.location.href = "portfolio-mezmunlari.php?m_status=sil&id="+id;
      }
      else{
         alert("İmtina edildi");
      }
   }
</script>
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
<?php require_once 'footer.php'; ?>