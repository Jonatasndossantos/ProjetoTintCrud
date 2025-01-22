<?php
    namespace PHP\Modelo\Tela;

    require_once('..\Cliente.php');

    use PHP\Modelo\Cliente;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="container">
    <div class="mx-auto">
        <form method="POST">
            <div class="mb-3">
              <label for="lCpf" class="form-label">Cpf</label>
              <input type="text" class="form-control" name="tCpf" id="tCpf" placeholder="99999999999">
            </div>

            <div class="mb-3">
              <label for="lNome" class="form-label">Nome</label>
              <input type="text" class="form-control" name="tNome" id="tNome" placeholder="Nome">
            </div>

            <div class="mb-3">
              <label for="lTelefone" class="form-label">Telefone</label>
              <input type="text" class="form-control" name="tTelefone" id="tTelefone" placeholder="999999999">
            </div>

            <div class="mb-3">
              <label for="lEndereco" class="form-label">Endereco</label>
              <input type="text" class="form-control" name="tEndereco" id="tEndereco" placeholder="rua xxxxxx">
            </div>

            <div class="mb-3">
              <label for="lTotal" class="form-label">Total De Compras</label>
              <input type="text" class="form-control" name="tTotal" id="tTotal" placeholder="999999">
            </div>
            <button type="submit">Cadastrar
                <?php
                    try{
                    $cpf      = $_POST ['tCpf'];
                    $nome     = $_POST ['tNome'] ;
                    $telefone = $_POST ['tTelefone'];
                    $endereco = $_POST ['tEndereco'];
                    $total    = $_POST ['tTotal'];

                    $clientel = new Cliente($cpf,
                                            $nome,
                                            $telefone,
                                            $endereco,
                                            $total);
                    }catch
                ?>
            </button>
        </form>
        <?php
            echo $clientel->imprimir();
        ?>
    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>