<?php 
header ("Content-Type: text/html; charset=utf-8");
include("db.php");

?>
<html>
<body>
	<h1>Магазин Филкос</h1>
	<?php 
		$query = $pdo->query("SELECT * FROM categories;");
		$rows = $query->fetchAll();

		echo "<ul>";
		foreach ($rows as $row) {
			echo "<li><a href='/category.php/?id=" . $row['id'] . "'>" . $row['title'] . "</a></li>";
		}
		echo "</ul>";
	?>
</body>
</html>
