<?php
  include_once("templates/headerpainel.php");
?>
  
<div id="backpainel" class="container-fluid">
<p>&nbsp</p>
<div class="container" id="view-contact-container">
  <br>
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Editar cadastro</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
      <input type="hidden" name="type" value="edit">
      <input type="hidden" name="id" value="<?= $contact['id'] ?>">
      <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" value="<?= $contact['name'] ?>" required>
      </div><br>
      <div class="form-group">
        <label for="phone">Telefone:</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" value="<?= $contact['phone'] ?>" required>
      </div><br>
      
      <div class="form-group">
            <label for="observations">Filial</label>
            <select name="observations" id="observations" class="form-control" require>
            <option selected disabled value=""></option>  
              <option>Tijuca</option>
              <option>Centro</option>
              <option>Barra</option>
            </select>
      </div>
      <br>
           
      <button type="submit" class="btn btn-primary">Atualizar</button>
    </form><br>
  </div>
</div>
<?php
  include_once("templates/footer.php");
?>
