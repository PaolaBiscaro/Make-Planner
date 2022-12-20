<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Planner</title>

    <!-- CSS only -->
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

</head>

<header>
    <nav>
        <div id="menu">
            <a href="/index.php"><img src="/assets/img/logo.png" width="300px"></a>

            <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                <button type="button" class="btn btn-dark"><a href="/index.php"><i class="fa-solid fa-house"></i> Home</a></button>
                <button type="button" class="btn btn-dark"> <a href="/admin/modelos.php"><i class="fa-solid fa-clipboard"></i> Modelos</a></button>
                <button type="button" class="btn btn-dark"> <a href="/admin/meusPlanners.php"><i class="fa-solid fa-thumbtack"></i> Meus Planners</a></button>
                <button type="button" class="btn btn-dark"> <a href="/admin/novoPlanner.php"> <i class="fa-solid fa-pen-to-square"></i> Novo Planner</a></button>
                <button type="button" class="btn btn-dark"><a href="/admin/configuracoes.php"><i class="fa-solid fa-gear"></i> Configurações</a></button>
                <button type="button" class="btn btn-dark"><a href="/admin/ajuda.php"><i class="fa-regular fa-circle-question"></i> Ajuda</a></button>


                <button id="buttonLogout" type="button" class="btn btn-dark"><i class="fa-solid fa-right-to-bracket"></i> Log out</button>
            </div>
        </div>

        <div id="cabecalho">
            <div class="d-flex ">
                <div class="p-2 flex-fill">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="iconePesquisa"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input id="txtPesquisa" type="text" class="form-control" placeholder="Pesquisar..." aria-label="Username" aria-describedby="basic-addon1">
                        <!-- <input id="txtPesquisa" type="text" placeholder="Pesquisar..."> -->
                    </div>
                </div>

                <div class="p-2 flex-fill d-flex justify-content-end">

                    <img id="imgPerfil" src="/assets/img/iconeperfil.png" width="80px">
                    <p>Nome Usuario <br>
                        email@email.com</p>
                    <i class="fa-solid fa-bell-slash"></i>
                    <i class="fa-solid fa-bell"></i>
                </div>
            </div>
        </div>
    </nav>
</header>