<!DOCTYPE html>
<html>
<head>
	<?php 
	require_once 'settings/database.php';

	$isci=$db->prepare("SELECT * from isciler where id={$_GET['id']}");
	$isci->execute();
	$isci_getir=$isci->fetch(PDO::FETCH_ASSOC);

	?>

	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

	<div class="container">
		<div class="row">
			<form class="col s12 col m12 col l12" action="settings/emeliyyatlar.php" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?= $isci_getir['id'] ?>" />
				<input type="hidden" name="k_sekil" value="<?= $isci_getir['sekil'] ?>" />
				<div class="row">
					<div class="input-field col s12" >
						<img width="200" class="materialboxed" src="<?= $isci_getir['sekil'] ?>">
					</div>
				</div>
				<div class="row">
					<div class="file-field input-field">
						<div class="btn">
							<span>Şəkil Seç</span>
							<input type="file" name="sekil" />
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input id="adsoyad" type="text" name="y" value="<?= $isci_getir['AdSoyad'] ?>"  class="validate">
						<label for="adsoyad">Ad Soyad</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<i class="material-icons prefix">email</i>
						<input id="email" type="email" name="email" value="<?= $isci_getir['email'] ?>" class="validate"/>
						<label for="email">email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<i class="material-icons prefix">business_center</i>
						<input id="vezife" type="text" name="vezife" value="<?= $isci_getir['Vezife'] ?>" class="validate"/>
						<label for="vezife">Vəzifə</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<i class="material-icons prefix">account_balance_wallet</i>
						<input id="maas" type="text" class="validate" name="Maas" value="<?= $isci_getir['maas'] ?>" />
						<label for="maas">Maaş</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<i class="material-icons prefix">wc</i>
						<select for="av" name="av">
							<!--<option value="" disabled selected>Choose your option</option>-->
							<option value="Evli" <?= $isci_getir['av']=="Evli"?"selected=\"selected\"":"" ?> >Evli</option>
							<option value="Subay" <?= $isci_getir['av']=="Subay"?"selected=\"selected\"":"" ?>>Subay</option>
						</select>
						<label for="av">Ailə Vəziyyəti</label>
					</div>
					<div class="row">
						<div class="center-align">
							<button class="btn waves-effect waves-light" type="submit" name="redakte">Təsdiq Et
								<i class="material-icons right">send</i>
							</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$('select').formSelect();
			$('.materialboxed').materialbox();
		});
	</script>
	<!--JavaScript at end of body for optimized loading-->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>