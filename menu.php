<nav class="w3-bar w3-theme-l3">
   



<div class="w3-sidebar w3-theme-l3 w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Fermer &times;</button>
  <a href="produits.php" class="w3-bar-item w3-button">Liste des Produits</a>
  <a href="ajoutproduit.php" class="w3-bar-item w3-button">Ajouter Produits</a>
</div>

<div id="main">

<div class="w3-theme-l3">
  <button id="openNav" class="w3-button w3-xlarge" onclick="w3_open()">&#9776;</button>
</div>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "12%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>
</nav>



