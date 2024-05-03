<?php
  include_once("templates/headerpainel.php");
?>


<div id="backpainel" class="container-fluid">
  <p>&nbsp</p>
  <div class="container" id="view-contact-container">
    <br>
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Perfil do aluno</h1>
    
    <p class="bold">Nome:</p>
    <p><?= $contact["name"] ?></p>
    
    <p class="bold">Telefone:</p>
    <p><?= $contact["phone"] ?></p>
    <p class="bold">Filial:</p>
    <p><?= $contact["observations"] ?></p><br>
  </div>
</div>
<?php
  include_once("templates/footer.php");
?>
