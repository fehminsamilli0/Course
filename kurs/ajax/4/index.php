<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Ajax</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style type="text/css">
		table,td,th{
			border: 1px solid black;
			padding: 20px;
			border-collapse: collapse;

		}
	</style>
</head>
<body>

	<form >
		<select name="Vezife">
			<option value="HR">HR</option>
			<option value="Mühasib">Mühasib</option>
			<option value="SMM">SMM</option>
			<option value="Çayçı">Çayçı</option>
		</select>
	</form>
	<div id="cavab"></div>

	<script>
		$("select").change(function(){
			$.post("settings.php",$('form').serialize(),
				function(data){
					$('#cavab').html(data);
				},"html"
				).fail(function(response,status,xhr){
					$('#cavab').html('Xəta: '+response.status+': '+xhr);
				});
		});
	</script>

</body>
</html>