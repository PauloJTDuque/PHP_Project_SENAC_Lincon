<?php
$n = $_GET['n'];
$fatorial = 1;

for ($count = 1; $count <= $n; $count++)
    $fatorial *= $count;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Resolver o fatorial da entrada</title>
</head>

<body>
    <div class="jumbotron">
        <h1 class="display-4">Verifique o Fatorial da Entrada</h1>
        <p class="lead">Aqui você irá incluir os valores para a soma</p>
        <hr>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 offset-2">
            <h2 style="text-align: center; color: blue;">Resultado do Fatorial</h2>
                    <hr>
                <form method="get" action="" name="form" id="form">
                    <div class="form-group">
                        <label for="numero">Digite o Fatorial</label>
                        <input type="nunber" name="n" id="n" class="form-control mb-2" value="<?php echo $n; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="fatorial">Resultado do Fatorial</label>
                        <input type="number" name="resultado" style="font-size: 24px; color:green" class="form-control" value="<?php echo $fatorial; ?>" readonly>
                    </div>

                    <!-- <button class="btn btn-primary" type="submit" value="ok">Calcular a Soma</button> -->
                    <a href="fatorial.html" target="_self"><button class="btn btn-outline-secondary" type="button" value="voltar">Voltar ao início</button></a>

                </form>
            </div>
        </div>
    </div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>