<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Resultado busca CEP</title>
  </head>
  <body>


  <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Endereço do CEP </h5>
    <p class="card-text">
    
        <?php
        function get_endereco($cep)
        {
            $cep = preg_replace("/[^0-9]/", "", $cep);
            $url = "http://viacep.com.br/ws/$cep/xml/";
            $xml = simplexml_load_file($url);
            return $xml;
        }

        $endereco = get_endereco($_POST["txtCEP"]);
        echo "Rua: $endereco->logradouro";
        echo "<br>";
        echo "Complemento: $endereco->complemento";
        echo "<br>";
        echo "Bairro: $endereco->bairro";
        echo "<br>";
        echo "Cidade: $endereco->localidade";
        echo "<br>";
        echo "Estado: $endereco->uf";
        echo "<br>";
        echo "<br>";
        ?>
    
    </p>

  </div>
</div>


  </body>
</html>

