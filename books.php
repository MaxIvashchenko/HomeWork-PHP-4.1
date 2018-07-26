<?php
$connect=mysqli_connect("localhost", "mivaschenko", "neto1797", "global");
$connect->set_charset("utf8");
$sql="select * from books";
$res=mysqli_query($connect, $sql);
?>

<!DOCTYPE html>
<meta charset="utf-8"> 
<html>
<head>
<style type="text/css">
	table,th,td {
    border-collapse: collapse;
    border: 1px solid;
    padding: 5px;
   	border: 1px solid;
   	}
   	thead {
    background-color: grey; 
    font-weight: bold;
    text-align: center; 
   	}
</style>
</head>
<body>
	<h1>Книги</h1>
	<table>
		<thead>
			<th>Номер</th>
			<th>Название</th>
			<th>Автор</th>
			<th>Год выпуска</th>
			<th>Жанр</th>
		</thead>
	<?php while ($data=mysqli_fetch_array($res)) { ?>
		<tbody>
			<tr>
				<td><?php echo $data["id"] ?></td>
				<td><?php echo $data["name"] ?></td>
				<td><?php echo $data["author"] ?></td>
				<td><?php echo $data["year"] ?></td>
				<td><?php echo $data["genre"] ?></td>
			</tr>
		</tbody>
	<?php } ?>
	</table>
</body>
</html>