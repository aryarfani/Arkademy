<?php  
$conn = mysqli_connect('localhost','root','','quick_count');
$result = mysqli_query($conn, 'SELECT * FROM candidates');
$rows = [];
while($row = mysqli_fetch_assoc($result)) {
	$rows[] = $row;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>QUICK COUNT PRESIDENT</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container col-md-8">
	<h1 class="mb-3 text-center">Real Count KPU</h1>
	<form action="" method="post">
		<table class="table table-hover table-striped">
			<thead class="thead-dark">
				<tr>
					<th>Nama</th>
					<th>Earned Vote</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($rows as $row) : ?>
					<tr>
						<td class="font-weight-bold"><?= $row["nama"]; ?></td>
						<td class="font-weight-bold"><?= $row["earned_vote"]; ?></td>
						<td><a class="btn btn-primary" href="vote.php?id=<?= $row["id"]; ?>">VOTE</a></td>
					</tr>
				<?php endforeach; ?>			
			</tbody>
		</table>
	</form>
</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>