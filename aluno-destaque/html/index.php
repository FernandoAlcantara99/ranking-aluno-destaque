<!DOCTYPE html>
<html>
<head>
	<title>Ranking de Jogadores</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			updateRanking(); // atualiza ranking ao carregar a página
			setInterval(updateRanking, 5000); // atualiza ranking a cada 5 segundos
		});

		function updateRanking() {
			$.ajax({
				url: "php/get_ranking.php",
				method: "GET",
				success: function(data) {
					$("#ranking-table").html(data);
				}
			});
		}
	</script>
</head>
<body>
	<div class="container mt-3">
		<h1>Ranking de Jogadores</h1>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Posição</th>
					<th>Nome</th>
					<th>Pontuação</th>
				</tr>
			</thead>
			<tbody id="ranking-table">
			</tbody>
		</table>
	</div>
</body>
</html>
