<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Gerenciar Pontuações</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-5">
      <h1 class="mb-5">Gerenciar Pontuações</h1>
      <table class="table">
        <thead>
          <tr>
            <th>Nome do Jogador</th>
            <th>Pontuação</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include 'php/get_ranking.php';
            $ranking = get_ranking();
            foreach ($ranking as $jogador) {
              echo "<tr>
                      <td>{$jogador['nome']}</td>
                      <td>
                        <form method='POST' action='php/update_score.php'>
                          <div class='form-group'>
                            <div class='input-group'>
                              <input type='number' class='form-control' name='pontuacao' value='{$jogador['pontuacao']}' required>
                              <input type='hidden' name='id' value='{$jogador['id']}'>
                              <div class='input-group-append'>
                                <button type='submit' class='btn btn-success'>Salvar</button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </td>
                      <td>
                        <form method='POST' action='php/update_score.php' onsubmit='return confirm(\"Tem certeza que deseja excluir a pontuação de {$jogador['nome']}?\")'>
                          <input type='hidden' name='id' value='{$jogador['id']}'>
                          <button type='submit' class='btn btn-danger'>Excluir</button>
                        </form>
                      </td>
                    </tr>";
            }
          ?>
        </tbody>
