<!DOCTYPE html>
<html>
<head>
	<title>My Store</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">

</head>
<body class="w3-container w3-padding">

<form action="" method="post">
	<h4>Filter <span class="w3-right"><a href="init.php" class="w3-btn">Acceuil</a></span></h4>

<?php
	$file = fopen('produits.txt', 'r');
	$categories = [];
	while (($line = fgets($file)) !== false) {
    	$data = explode('|', $line);
    	$category = trim($data[2]);
    	if (!in_array($category, $categories)) {
			$categories[] = $category;
    	}
	}

	fclose($file);

	echo "<ul class='w3-ul'>";
	foreach ($categories as $category) {
    	$categoryId = strtolower(str_replace(' ', '_', $category));
    	echo "<li><label><input class='w3-check' type=\"checkbox\" name=\"categories[]\" value=\"$category\"> $category</label></li>";
	}
	echo "</ul>";
	?>

	<input class="w3-button w3-theme-l3 w3-block w3-margin-top" type="submit" value="Filter">

	<hr style="border-top : 1px dashed blue;" class="w3-theme-l3">
</form>

<?php
echo"<div class=''";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$selectedCategories = $_POST['categories'];

	$file = fopen('produits.txt', 'r');

	while (($line = fgets($file)) !== false) {
		$data = explode('|', $line);
		$id=$data[0];
		$nom=$data[1];
		$category=$data[2];
		$prix=$data[3];
		$image=$data[4];

    	if (in_array($category, $selectedCategories)) {
			echo "<div class='w3-card l3 s6'>";
			echo "  <div class='w3-container w3-third w3-card  w3-padding w3-margin-top'>";
			echo "    <img src='$image' style='width: 100%;'>";
			echo "    <p class='w3-border-bottom w3-padding'>$id</p>";
			echo "    <p class='w3-border-bottom w3-padding'>$nom</p>";
			echo "    <p class='w3-border-bottom w3-padding'>$category</p>";
			echo "    <p class=' w3-padding'><b>$prix</b><span class='w3-right'>
			<a href='modifprod.php?id=$id' class='w3-margin-right w3-btn'>Modifier</a>
			";
			echo "  </div>";
			echo "</div>";
    	}
	}
		fclose($file);
	}else{
	$file = fopen('produits.txt', 'r');
	while (($line = fgets($file)) !== false) {
		$data = explode('|', $line);
		$id=$data[0];
		$nom=$data[1];
		$category=$data[2];
		$prix=$data[3];
		$image=$data[4];
		echo "<div class='w3-card l3 s6'>";
		echo "  <div class='w3-container w3-third w3-card  w3-padding w3-margin-top'>";
		echo "    <img src='$image' style='width: 100%;'>";
		echo "    <p class='w3-border-bottom w3-padding'>$id</p>";
		echo "    <p class='w3-border-bottom w3-padding'>$nom</p>";
		echo "    <p class='w3-border-bottom w3-padding'>$category</p>";
		echo "    <p class=' w3-padding'><b>$prix</b><span class='w3-right'>
		<a href='modifprod.php?id=$id' class='w3-margin-right w3-btn'>Modifier</a>
		";
		
		echo "  </div>";
		echo "</div>";
	}
	fclose($file);

}
echo"</div>";
?>

</body>
</html>


