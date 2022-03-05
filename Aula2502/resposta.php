<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" 
        content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body class="container">
    <h1>Cálculos</h1>

    <?php 
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        echo "Valor 1: $valor1 Valor 2: $valor2";
        echo "<br/>";
        $soma = $valor1 + $valor2;
        echo "A soma dos dois valores é: $soma";
        echo "<br/>";
        $subtracao = $valor1 - $valor2;
        echo "A subtração dos dois valores é:  $subtracao";
        echo "<br/>";
        $multiplicacao = $valor1 * $valor2;
        echo "A multiplicação dos dois valores é:  $multiplicacao";
        echo "<br/>";
        if ($valor2 != 0) {
          $divisao = $valor1 / $valor2;
          echo "A divisão dos dois valores é: $divisao";
          echo "<br/>";
        }else {
          echo "Divisão por zero!";
          echo "<br/>";
        }
        /*$divisao = $valor1 / $valor2;
        echo "A divisão dos dois valores é: $divisao";
        echo "<br/>";*/
        if($valor1 % 2 === 0){
            echo "Valor 1 é par.<br/>";
        }else{
            echo"Valor 1 é ímpar.<br/>";
        }
        if ($valor2 % 2 === 0) {
            echo"Valor 2 é par.<br/>";
        }else {
            echo"Valor 2 é ímpar.<br/>";
        }

        $resultado = $valor1 % 2 == 0 ? "Valor 1 é par!" : "Valor 1 é impar!";
        echo $resultado;
        echo "<br/>";

        for ($i=0; $i < 10; $i++) { 
          echo "Valor de i: $i</br>";
        }
        echo "</br>";
        echo "</br>";
        for ($i=0; $i < 10; ++$i) { 
          echo "Valor de i: $i</br>";
        }
    ?>
   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>