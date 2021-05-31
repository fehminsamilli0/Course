<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajax</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<b style="cursor:pointer;user-select:none;"id="hmm">Click et</b>
	<i id="cavab"></i>

	<script>
		$('#hmm').click(function(){
			$.ajax({
				type:'POST',
				url:'settings.php',
				data:{ad:"Fehmin",soyad:"Shamilli"},
				dataType:"html",
				success:function(data){
					$('#cavab').html(data);
				},
				error:function(){
					alert("Xeta");
				}
			});
		});
	</script>

</body>
</html>