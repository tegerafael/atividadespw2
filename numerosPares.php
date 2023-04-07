<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Números Pares</title>
</head>

<body>
    <header>    
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="calcularMedia.php">Calcular Nota</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="calcularFatorial.php">Calcular Fatorial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="numerosPares.php">Calcular Pares</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="calcularFuncaoQuadratica.php">Calcular Função Quadrática</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="calcularTriangulo.php">Calcular Triângulo</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <form class="row g-3" method="get">        
                <div class="col-3">
                    <label for="lbNota1" class="form-label">Número 1:</label>
                    <input type="text" class="form-control" placeholder="Digite o primeiro número..." name="txtNumero1">
                </div>
                <div class="col-3">
                    <label for="lbNota2" class="form-label">Número 2:</label>
                    <input type="text" class="form-control" placeholder="Digite o segundo número..." name="txtNumero2">
                </div>
                <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="btnContar">Contar</button>
                </div>
                <div class="col-3">
                <?php
                    if (filter_has_var(INPUT_GET, 'btnContar')){

                    $numero1 = $_GET['txtNumero1'];
                    $numero2 = $_GET['txtNumero2'];
                    $cont = 0;

                    for($i = $numero1; $i <= $numero2; $i ++) {
                        if($i % 2 != 0) {
                            continue;
                        }
                        $cont++;
                    }
                    
                    echo "Entre $numero1 e $numero2 existem $cont números pares";
                    }
                ?>
                </div>
            </form>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>