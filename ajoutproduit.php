<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
    <title>Ajouter produit</title>
</head>
<body class="w3-container w3-center w3-padding">
<script>

</script>

    <?php
    $randomIDD = rand(1,99999);

    echo"<form action='ajoutproduit.php' name='ajout' method='POST'>";
    echo"<label for='id'>ID:</label>";
    echo"<input class='w3-input' type='text' name='id' id='id' value='$randomIDD' readonly >";
    echo"<br>";
    echo"<label for='name'>Name</label>";
    echo"<input class='w3-input' type='text' name='name' id='name'><br>";
    echo"<label for='categorie'>Categorie</label>";
    echo"<input class='w3-input' type='text' name='categorie' id='categorie'><br>";
    echo"<label for='prix'>Prix</label>";
    echo"<input class='w3-input' type='text' name='prix' id='prix'><br>";
    echo"<label for='image'>Image</label>";
    echo"<input class='w3-input' type='text' name='image' id='image'><br>";
    echo"<input class='w3-btn w3-block w3-theme-l3' type='submit' value='envoyer' name='envoyer' id='envoyer'>";
    echo"</form>";
    if(isset($_POST['envoyer'])){
        if (!empty($_POST["id"]) and !empty($_POST["name"]) and !empty($_POST["categorie"]) and !empty($_POST["prix"]) and !empty($_POST["image"])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $categorie=$_POST['categorie'];
        $prix=$_POST['prix'];
        $image=$_POST['image'];
        $file=fopen("produits.txt","a");
        $save=$id."|".$name."|".$categorie."|".$prix."|".$image."\n";
        fwrite($file,$save);
        fclose($file); 

        }
        header('Location: produits.php');
        exit;
}

    ?>



</body>
</html>