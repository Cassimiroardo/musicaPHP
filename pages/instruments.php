<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/global.css">
    <title>MusicaPHP</title>
</head>
<body>
    <div class="container">
        <header>
            <a href="../index.php">
                <h1>Voltar</h1>
            </a>
        </header>
        <nav>
            <a href="/pages/instruments.php">
                <h3>Instrumentos</h3>
            </a>
            <a href="/pages/bands.php">
                <h3>Bandas</h3>
            </a>
            <a href="/pages/musics.php">
                <h3>Musicas</h3>
            </a>
         </nav>
        <section>
          <form name="form" method="POST">
            <input name="nome" placeholder="Nome do instrumento"/>
            <input type="number" name="cordas" min="0" max="50" placeholder="Quantidade de cordas"/>
            <select name="afinacao">
              <option value="#">Escolha uma afinação</option>
              <option value="Mi">E (Mí)</option>
              <option value="Ré">D (Ré)</option>
              <option value="Dó">C (Dó)</option>
              <option value="#">Sem afinação</option>
            </select>
            <input type="submit" value="Salvar"/>
          </form>
        </section>
        <section id="content">
          <table>
            <tr>
              <th>Nome</th>
              <th>Cordas</th>
              <th>Afinação</th>
            </tr>
            <tr>
              <td>
                <?php 
                  if (isset($_POST['nome']))
                    echo$_POST['nome'];
                ?>
              </td>
              <td>
                <?php 
                  if (isset($_POST['cordas']))
                    echo$_POST['cordas'];
                ?>
              </td>
              <td>
                <?php 
                  if (isset($_POST['afinacao']))
                    echo$_POST['afinacao'];
                ?>
              </td>
            </tr>
          </table>
        </section>
        <footer>
          <h5>
            MúsicaPHP
          </h5>
        </footer>
    </div>      
</body>
</html>