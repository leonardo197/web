<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
		alert("Página Pronta")
		
			$("button").click(function(){
				$("p").hide();
			});
			
		});
		</script>
	</head>
	<body>
	
		<p>Olá Lixos!!</p>
		<button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-log-in"></span> Entrar</button>
		
	</body>
</html>