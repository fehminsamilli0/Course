<?php require_once 'header.php'; require_once 'nav.php'; require_once '../settings/code/telebe.php';?>
<!-- Page -->
<div class="page">
   <div class="page-content container-fluid">
      <div class="row">
         <div class="col-lg-12">
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
                  <form method="POST" action="#">
                     <input type="hidden" name="id" value="<?= $telebe_etrafli[0]["id"] ?>" />
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
                                             <td><input type="text" required="required" name="AdSoyad" class="form-control round" value="<?= $telebe_etrafli[0]["AdSoyad"] ?>"></td>
                                          </tr>
                                          <tr>
                                             <th>Şəxsiyyət Vəsiqəsi</th>
                                             <td><input type="text" required="required" name="sv" class="form-control round" value="<?= $telebe_etrafli[0]["sv_nomresi"] ?>"></td>
                                          </tr>
                                          <tr>
                                             <th>Təvəllüdü</th>
                                             <td><input type="date" required="required" name="tv" class="form-control round" value="<?= $telebe_etrafli[0]["tevellud"] ?>"></td>
                                          </tr>
                                          <tr>
                                             <th>Universitet</th>
                                             <td><input type="text" required="required" name="uni" class="form-control round" value="<?= $telebe_etrafli[0]["uni"] ?>"></td>
                                          </tr>
                                          <tr>
                                             <th>Əlaqə Nömrəsi</th>
                                             <td><input type="tel" required="required" name="tel" class="form-control round" value="<?= $telebe_etrafli[0]["tel"] ?>"></td>
                                          </tr>
                                          <tr>
                                             <th>Email</th>
                                             <td><input type="email" required="required" name="email" class="form-control round" value="<?= $telebe_etrafli[0]["email"] ?>"></td>
                                          </tr>
                                          <tr>
                                             <th>Ünvan</th>
                                             <td><input type="text" required="required" name="unvan" class="form-control round" value="<?= $telebe_etrafli[0]["unvan"] ?>"></td>
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
                                    <td>
                                       <select name="telim" class="form-control">
                                          <?php for ($i=0; $i < count($tAdlari); $i++) { ?>
                                          <option value="<?= $tAdlari[$i]['Basliq'] ?>" <?= $telebe_etrafli[0]["telim"]== $tAdlari[$i]['Basliq'] ? 'selected="selected"' : '' ?>><?= $tAdlari[$i]['Basliq'] ?></option>
                                          <?php } ?>
                                       </select>
                                    </td>
                                 </tr>
                                 <tr>
                                    <th>Müəllimi</th>
                                    <td>
                                       <select name="muellim" class="form-control">
                                          <?php for ($i=0; $i < count($mAdlari); $i++) { ?>
                                          <option value="<?= $mAdlari[$i]['AdSoyad'] ?>" <?= $telebe_etrafli[0]["muellimi"]== $mAdlari[$i]['AdSoyad'] ? 'selected="selected"' : '' ?>><?= $mAdlari[$i]['AdSoyad'] ?></option>
                                          <?php } ?>
                                       </select>
                                 </tr>
                                 <tr>
                                    <th>Başlama Tarixi</th>
                                    <td><input type="date" required="required" disabled="disabled" name="bas_tarix" class="form-control round" value="<?= $telebe_etrafli[0]["bas_tarix"] ?>"></td>
                                 </tr>
                                 <tr>
                                    <th>Bitirmə Tarixi</th>
                                    <td><input type="date" name="bit_tarix" value="<?= $telebe_etrafli[0]["bitirdiyi_tarix"]!=null ? $telebe_etrafli[0]["bitirdiyi_tarix"] : "" ?>" class="form-control round"></td>
                                 </tr>
                                 <tr>
                                    <th>Müddəti (Ay)</th>
                                    <td><input type="number" required="required" name="muddeti" class="form-control round" value="<?= $telebe_etrafli[0]["muddeti"] ?>"></td>
                                 </tr>
                                 <tr>
                                    <th>Fərdi/Qrup</th>
                                    <td>
                                       <select name="Ferdi" class="form-control round">
                                          <option value="1" <?= $telebe_etrafli[0]["Ferdi"]== 1 ? 'selected="selected"' : '' ?>>Fərdi</option>
                                          <option value="0" <?= $telebe_etrafli[0]["Ferdi"]== 0 ? 'selected="selected"' : '' ?>>Qrup</option>
                                       </select>
                                    </td>
                                 </tr>
                                 <tr>
                                    <th>Həftəlik Dərs Müddəti (Dəfə)</th>
                                    <td><input type="number" required="required" name="hef_ders_muddeti" class="form-control round" value="<?= $telebe_etrafli[0]["hef_ders_muddeti"] ?>"></td>
                                 </tr>
                                 <tr>
                                    <th>Ümumi Təlim Saatı ( Akademik Saat)</th>
                                    <td><input type="number" disabled="disabled" required="required" name="umumi" class="form-control round" value="<?= $telebe_etrafli[1]["umumi_ders_sayi"]*2 ?>"></td>
                                 </tr>
                              </table>
                           </div>
                        </div>
                        <div class="tab-pane animation-slide-left" id="odenis" role="tabpanel">
                           <div class="panel-body">
                              <table class="table table-hover  table-striped w-full">
                                 <tr>
                                    <th>Aylıq Ödəniş (AZN)</th>
                                    <td><input type="number" required="required" name="endirimsiz_odenis" class="form-control round" value="<?= $telebe_etrafli[2]["endirimsiz_odenis"] ?>"></td>
                                 </tr>
                                 <tr>
                                    <th>Endirim faizi (%)</th>
                                    <td><input type="number" required="required" name="endirim" class="form-control round" value="<?= $telebe_etrafli[0]["endirim"] ?>">
                                    </td>
                                 </tr>
                                 <tr>
                                    <th>Endirimli Ödəniş</th>
                                    <td><?= $telebe_etrafli[2]["ayliq_odenis"] ?> AZN</td>
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
                                    <td>
                                       <input type="number"  name="ser_nom" class="form-control round" value="<?= $telebe_etrafli[0]["sertifikat_nomresi"] ?>">
                                    </td>
                                    <td> <input type="number"  name="umumi_gos" class="form-control round" value="<?= $telebe_etrafli[0]["umumi_gosterivcisi"] ?>"></td>
                                    <td>
                                       <textarea class="form-control round"><?= $telebe_etrafli[0]["muellim_rey"] ?></textarea>
                                    </td>
                                 </tr>
                              </table>
                           </div>
                        </div>
                        <button type="submit" class="btn btn-info" name="t_r">REDAKTƏ ET</button>
                  </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End Panel -->
<?php require_once 'footer.php'; ?>