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
            <a href="../index.html">
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
            <input type="text" name="album" placeholder="Nome do album">
            <input type="text" name="nome" placeholder="Nome da música"/>
            <input type="number" name="faixa" min="0" placeholder="Número da faixa"/>
            <input type="text" name="duracao" placeholder="Duração da música"/>
            <input type="submit" value="Salvar"/>
          </form>
        </section>
        <section id="content">
          <table>
            <tr>
              <th>Nome</th>
              <th>Album</th>
              <th>Duração</th>
              <th>Faixa</th>
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
                  if (isset($_POST['album']))
                    echo$_POST['album'];
                ?>
              </td>
              <td>
                <?php 
                  if (isset($_POST['duracao']))
                    echo$_POST['duracao'];
                ?>
              </td>
              <td>
                <?php 
                  if (isset($_POST['faixa']))
                    echo$_POST['faixa'];
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