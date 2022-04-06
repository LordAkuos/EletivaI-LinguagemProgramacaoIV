<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" 
            content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Lista de exercícios 3</title>
    </head>
    <body class="container">
        <h1>Resposta do exercício 05</h1>
        <br/>
        <?php

            function calcularIMC($peso, $altura){
                $imc = $peso / $altura;
                if ($imc <= 18.5) {
                    echo "IMC: ".$imc." Abaixo do peso.";
                }
                if ($imc >= 18.6 && $imc <= 24.9){
                    echo "IMC: ".$imc." Peso ideal (Parabéns!).";
                }
                if ($imc >= 25 && $imc <= 29.9){
                    echo "IMC: ".$imc." Levemente acima do peso.";
                }
                if ($imc >= 30 && $imc <= 34.9) {
                    echo "IMC: ".$imc." Obesidade grau I.";
                }
                if ($imc >= 35 && $imc <= 39.9) {
                    echo "IMC: ".$imc." Obesidade grau II (severa).";
                }
                if ($imc >= 40) {
                    echo "IMC: ".$imc." Obesidade grau III (mórbida).";
                }
                return $imc;
            }

            $peso = $_POST['peso'];
            $altura = $_POST['altura'];
            echo calcularIMC($peso, $altura);

        
        ?>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->
    </body>
</html>