<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">

   <style>
    /* Estilo para centralizar o h2 */
    h2 {
      text-align: center;
    }
  </style>
  

  <title>Formulários retroalimentados</title>
</head>

<body>

    <?PHP
        //Capturando os dados  do formulário retroalimentado
        $valor1 = $_POST['v1'] ?? 0;
        $valor2 = $_POST['v2'] ?? 0;


    ?>

  <main>

  <h1>Somador de Valores</h1>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
      <label for="v1">Valor 1</label>
      <input type="number" name="v1" id="v1" value="<?=$valor1?>">

      <label for="v2">Valor 2</label>
      <input type="number" name="v2" id="v2" value="<?=$valor2?>">

      <input type="submit" value="Somar">
    </form>
  </main>

  <section id="resultado">
    <h2>Resultado da soma</h2>
    <?php 
      $soma = $valor1 + $valor2;
      print "<p> A soma entre os valores  $valor1 e $valor2 é igual à <strong>$soma</strong>.</p>";
    ?>
  </section>
</body>

</html>
