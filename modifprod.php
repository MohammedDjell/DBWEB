<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
    <title>Edit produit</title>
</head>
<body class="w3-padding w3-center">
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $file = 'produits.txt';

        $lines = file($file, FILE_IGNORE_NEW_LINES);

        foreach ($lines as $line) {
            $data = explode('|', $line);
            if ($data[0] == $id) {
                ?>
                <form action="update.php" name="update" method="POST">
                    <label class="w3-margin-right w3-border-bottom w3-block w3-padding" for="name">Name</label>
                    <input class="w3-input" type="text" name="name" id="name" placeholder="name d article" value="<?= $data[1] ?>"><br>
                    <label class="w3-margin-right w3-border-bottom w3-block w3-padding" for="categorie">Catégorie</label>
                    <input class="w3-input" type="text" name="categorie" id="categorie" value="<?= $data[2] ?>"><br>
                    <label class="w3-margin-right w3-border-bottom w3-block w3-padding" for="prix">Prix</label>
                    <input class="w3-input" type="text" name="prix" id="prix" value="<?= $data[3] ?>" onchange="verifPrix(this.value)""><br>
                    <label class="w3-margin-right w3-border-bottom w3-block w3-padding"  for="image">Image</label>
                    <input class="w3-input" type="text" name="image" id="image" value="<?= $data[4] ?>"><br>
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input class="w3-btn w3-block w3-theme-l3" type="submit" value="modifier" name="modifier" id="modifier">
                    <a href='supprimerproduit.php?id=<?= $id ?>' class='w3-btn w3-block w3-theme-l3'>Supprimer</a>
                </form>
                <?php
                break;
            }
        }
    }
    ?>

    <script>
        function prixValid(value) {
            return !isNaN(value) && isFinite(value);
        }
        function verifPrix(value) {
            if (!prixValid(value)) {
                alert("il faut que le prix soit que des chiffres");
            }
        }
    </script>
</body>
</html>
