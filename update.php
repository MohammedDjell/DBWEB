<?php
if(isset($_POST['modifier'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $categorie = $_POST['categorie'];
    $prix = $_POST['prix'];
    $image = $_POST['image'];

    $file = "produits.txt";
    $lines = file($file, FILE_IGNORE_NEW_LINES);

    foreach($lines as $line){
        $data = explode('|', $line);
        if($data[0] == $id){
            $newLine =$id."|".$name."|".$categorie."|".$prix."|".$image."\n";
            $updatedLines[] = $newLine;
        } else {
            $updatedLines[] = $line;
        }
    }

    $updatedContent = implode("\n", $updatedLines);
    file_put_contents($file, $updatedContent);

    header("Location: produits.php");
    exit();
}
?>
