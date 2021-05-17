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
                <h1>Voltar</h2>
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
            <input name="nome" placeholder="Nome da banda"/>
            <input type="number" name="integrantes" min="0" max="50" placeholder="Quantidade de integrantes"/>
            <select name="genero">
              <option value="#">Escolha um gênero</option>
              <option value="Rock">Rock</option>
              <option value="Gospel">Gospel</option>
              <option value="Reggae">Reggae</option>
              <option value="Blues">Blues</option>
            </select>
            <input type="submit" value="Salvar"/>
          </form>
        </section>
        <section id="content">
          <table>
            <tr>
              <th>Nome</th>
              <th>Integrantes</th>
              <th>Gênero</th>
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
                  if (isset($_POST['integrantes']))
                    echo$_POST['integrantes'];
                ?>
              </td>
              <td>
                <?php 
                  if (isset($_POST['genero']))
                    echo$_POST['genero'];
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
    <div>      
</body>
</html>