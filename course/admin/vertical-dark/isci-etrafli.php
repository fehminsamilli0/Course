	<?php require_once 'header.php'; require_once 'nav.php'; require_once '../settings/code/isci.php'; ?>
	<!-- ============================================================== --><!-- Start right Content here --><!-- ============================================================== -->
 <div class="content-page">
  <!-- Start content -->
  <div class="content">
   <div class="container-fluid">
    <div class="row">
     <div class="col-sm-12">
      <div class="page-title-box">
      </div>
    </div>
  </div>
  <!-- end row -->
  <div class="row">
   <div class="col-12">
    <div class="card m-b-20">
     <div class="card-body">
      <div class="row">
       <div class="col-12">
        <div class="invoice-title">
         <h4 class="float-right font-16"><strong>İşçi ID # YUP_<?= $egetir['id'] ?></strong></h4>
         <h3 class="mt-0">
           <?= $egetir['AdSoyad']." ( ".$egetir['Vezife'] ?> )
         </h3>
       </div>
       <hr>
       <div class="row">
        <div align="center"  class="col-12">
         <img src="../../<?= $egetir['sekil'] ?>" alt="logo" height="105" class="d-print-none">
       </div>
       <div class="col-6">
         <h3>Əlaqə Məlumatları</h3>
         <p>Email: <?= $egetir['email'] ?></p>
         <p>Telefon: <?= $egetir['tel'] ?></p>
       </div>
       <div class="col-6 text-right">
         <h3>Əmək Haqqı</h3>
         <p><?= $egetir['Maas_Tip'] ?> : <?= $egetir['Maas'] ?> <?= $egetir['Maas_Tip']=="sabit" ? " AZN" : " %"  ?> </p>
       </div>
     </div>
     <div class="row">
       <div class="col-6 m-t-30">
         <h3>Şifrə:</h3>
         <p><?= $egetir['sifre_askar'] ?></p>
       </div>
       <div class="col-6 m-t-30 text-right">
         <h3>Tarixlər</h3>
         <p>İşə başlama tarixi: <?= $egetir['baslama_tarixi'] ?> </p>
         <p>İşdən çıxma tarixi: <?php if($egetir['bitirme_tarixi']==null) echo "<b>Hal-hazırda işləyir</b>"; else echo $egetir['bitirme_tarixi']; ?></p>
         <a href="isci-redakte.php?i_redakte=ok&id=<?= $egetir['id'] ?>" class="btn btn-primary waves-effect waves-light">Profildə düzəliş Et</a>
       </div>
     </div>
   </div>
 </div>
 <div class="row">
  <div class="col-12">
   <div>
    <div class="p-2">
     <h3 class="font-16"><strong>Maaşlar</strong></h3>
   </div>
   <div class="">
     <div class="table-responsive">
      <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
<!-- end row -->
</div>
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