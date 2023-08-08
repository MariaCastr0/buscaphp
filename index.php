<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de busca - Pesquisar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">

        <h1 class="mt-4 mb-4">Pesquisar do Sistema</h1>

        <form class="mb-4" id="pesq-produto-form" method="POST">

            <div class="col-12 mb-3">
                <input type="text" name="produto" class="form-control" id="produto" placeholder="Digite a palavra" onkeyup="carregar_produtos(this.value)">
                <span id="resultado_pesquisa"></span>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-success">Pesquisar</button>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script src="js/custom.js"></script>

  </body>
</html>