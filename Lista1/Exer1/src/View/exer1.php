<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" 
            content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Exercício 01</title>
    </head>
    <body class="container">
        <h1>Calculadora de troco</h1>
        <br>
        <form action="resultado.php" method="POST">
            <div class="row">
                <div class="col">
                    <label for="valorproduto" class="label-control">Valor do Produto:</label>
                    <input type="number" name="valorproduto" placeholder="R$ " id="valorproduto" class="form-control">
                </div>
                <div class="col">
                    <label for="valorpago" class="label-control">Valor pago:</label>
                    <input type="number" name="valorpago" placeholder="R$ " id="valorpago" class="form-control">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <button type="submit" class="btn btn-success">Calcular Troco</button>
                </div>
            </div>
        </form>
        <?php
            if (isset($troco)) {
                echo "Seu troco é de R$ $troco";
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