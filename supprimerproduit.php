<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $file = "produits.txt";
    $lines = file($file, FILE_IGNORE_NEW_LINES);

    $updatedLines = array();
    foreach($lines as $line){
        $data = explode('|', $line);
        if($data[0] != $id){
            $updatedLines[] = $line;
        }
    }

    $updatedContent = implode("\n", $updatedLines);
    $updatedContent .= "\n";
    file_put_contents($file, $updatedContent);

    header("Location: produits.php");
    exit();
}
?>
