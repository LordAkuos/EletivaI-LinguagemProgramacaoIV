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
        <h1>Exercício 01 - Cadastrar tempos</h1>
        <br/>
        <?php
            session_start();
            $voltas = $_POST['voltas'];
            $_SESSION['voltas'] = $voltas;
            for ($i=1; $i <= $voltas; $i++) { 
        
        ?>
        <form action="resposta.php" method="POST">
            <div class="row">
                <div class="col">
                    <label for="tempo">Informe o tempo da volta <?= $i ?></label>
                    <input type="time" id="tempo" name="tempo" class="form-control">
                </div>
            </div>
            <div class="row">
                <button type="submit" class="btn btn-warning">Cadastrar tempos</button>
            </div>
        </form>
        <?php
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