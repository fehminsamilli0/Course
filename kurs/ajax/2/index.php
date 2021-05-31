<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Ajax</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

	<form>
		<input type="text" name="ad" placeholder="Adınızı daxil edin..."  />
		<input type="text" name="soyad" placeholder="Soyadınızı daxil edin..."  />
		<button type="button" id="hmm">Ok</button>
	</form>
	<i id="cavab"></i>

	<script>
		$('#hmm').click(function(){
			$.ajax({
				type:'POST',
				url: 'settings.php',
				data: $('form').serialize(),
				dataType:"html",
				success:function(data){
					$('#cavab').html(data);
				},
				error:function(){
					alert("Xəta");
				}
			});
		});
	</script>

</body>
</html>