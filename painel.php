<?php
  include_once("templates/headerpainel.php");
?>
  <div id="backpainel" class="container-fluid">
    <?php if(isset($printMsg) && $printMsg != ''): ?>
      <p id="msg"><?= $printMsg ?></p>
    <?php endif; ?>
    <h1 id="main-title">Lista de alunos</h1>
    <?php if(count($contacts) > 0): ?>
      
      <table class="table" id="contacts-table">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Filial</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($contacts as $contact): ?>
            <tr>
              <td><?= $contact["name"] ?></td>
              <td><?= $contact["phone"] ?></td>
              <td><?= $contact["observations"] ?></td>
              <td class="actions">
              <a href="<?= $BASE_URL ?>show.php?id=<?= $contact["id"] ?>"> <img id="icon" src="images/documento.png" alt="icone"></a>
              <a href="<?= $BASE_URL ?>edit.php?id=<?= $contact["id"] ?>"><img id="icon" src="images/editar.png" alt="icone"></a>
              <form class="delete-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
                  <input type="hidden" name="type" value="delete">
                  <input type="hidden" name="id" value="<?= $contact["id"] ?>">
                  <button type="submit" class="delete-btn"><img id="icon" src="images/excluir.png" icone></button>
                </form>              
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    
      <?php else: ?>  
      <p id="empty-list-text">Aluno não encontrado, <a href="<?= $BASE_URL ?>index.php">clique aqui para adicionar</a>.</p>
    <?php endif; ?>
  </div>
<?php
  include_once("templates/footer.php");
?>