<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>TESTANDO WEBSERVICE</title>
</head>

<body>

    <div class="align-items-center justify-content-center">
        <form action="buscarCEP.php" method="post" class="row g-3">
            <div class="col-auto">
                <label class="visually-hidden">CEP</label>
            </div>
            <div class="col-auto">
                <label class="visually-hidden">CEP</label>
                <input name="txtCEP" type="text" class="form-control" placeholder="00000000">
            </div>
            <div class="col-auto">
                <button name="btnBuscar" class="btn btn-primary mb-3">Buscar</button>
            </div>
        </form>
    </div>

</body>

</html>