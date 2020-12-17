<?php 
header ("Content-Type: text/html; charset=utf-8");
include("db.php");

?>
<html>
<body>
	<?php 
		$query = $pdo->query("SELECT * FROM categories WHERE id = " . $_GET['id'] . " LIMIT 1;");
		$category = $query->fetch();

		echo "<h1>" . $category['title'] . "</h1>";

		$query = $pdo->query("SELECT * FROM items WHERE id_category = " . $category['id'] . ";");
		$rows = $query->fetchAll();		
		
		echo "<ul>";
		foreach ($rows as $row) {
			echo "<li><a href='/item.php/?id=" . $row['id'] . "'>" . $row['title'] . ", " . $row['price'] . "руб.</a></li>";
		}
		echo "</ul>";
	?>
</body>
</html>
