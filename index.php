<!DOCTYPE html>
<html>
    <head>
        <header class="w3-container w3-theme-l2 w3-center">
		</header>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
		<script type="text/javascript" src="script.js"></script>
		<link rel="stylesheet" href="style.css">
        <title>Md's Store</title>
    </head>

    <body>
        <?php 
        include 'menu.php';
		
         
        if (isset($_GET["page"])){
            include $_GET["page"];
        }
        else{
            include 'homepage.php';
        }

        
        ?>

<footer class="w3-container w3-large w3-bottom w3-theme-l3 w3-center"> 
<?php
        echo "<p class='w3-left w3-margin-left'>Md's Phone <br><span>Store</span></p>";
		echo "
		<p class='w3-right' ><a href='www.facebook.com'><i class='fa fa-facebook-square fa-fw w3-margin-right w3-xxlarge'></i></a>
                            <a href='www.twitter.com'><i class='fa fa-twitter-square fa-fw w3-margin-right w3-xxlarge'></i></a>
                            <a href='www.twitter.com'><i class='fa fa-linkedin-square fa-fw w3-margin-right w3-xxlarge'></i></a>
                            </p>";
?>

</footer>

    </body>
</html>
