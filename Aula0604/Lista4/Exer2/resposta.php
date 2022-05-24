<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" 
            content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Lista de exercícios 4</title>
    </head>
    <body class="container">
        <h1>Resposta do Exercício 02</h1>
        <br/>
        <?php
            if ($_POST) {
                session_start();
                $cheque = $_SESSION['num_cheque'];
                $valor = $_SESSION['total'];
                $soma = 0;
                for ($i=1; $i <= $cheque; $i++) { 
                    $valor_cheque[$i] = $_POST['valor_cheque'.$i];
                    $soma = $soma + $valor_cheque[$i];
                    //return $soma;
                }
                if ($soma == $valor) {
                    echo "A soma deu: R$ $soma<br>";
                    echo "Lote OK!";
                }elseif ($soma < $valor) {
                    echo "Diferença negativa.";
                }
            }
        
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->
    </body>
</html>