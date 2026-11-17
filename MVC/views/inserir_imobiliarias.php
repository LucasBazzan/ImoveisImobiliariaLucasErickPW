<!DOCTYPE html>
<?php 
include_once('../controller/imovel_controller.php'); 
include_once('../controller/imobiliaria_controller.php');
include_once('../model/imovel_model.php'); 
include_once('../model/imobiliaria_model.php'); 

$imobiliaria = new Imobiliaria();
$modelo      = $imobiliaria->listar_imobiliarias();
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <title>Wellersons | Inserir Imobiliárias</title>
</head>
<style>
    body { background: rgb(246, 252, 255); }
    .nav-link a { font-size: 1.2rem !important; text-decoration: none !important; }
    
    .nav-link svg { 
        fill: #ffffff; 
        width: 50px; 
        height: 50px;
        transition: fill 0.2s ease;
    }

    a:hover .icon-twitter   { fill: rgb(125, 221, 250); }
    a:hover .icon-instagram { fill: rgb(255, 158, 247); }
    a:hover .icon-facebook  { fill: rgb(125, 165, 250); }

    ::-webkit-inner-spin-button, ::-webkit-outer-spin-button { appearance: none; }

</style>
<body>
    <div class="container-fluid d-flex flex-column gap-5">
        <div class="navbar align-items-center justify-content-between px-4 mt-2 gap-4 bg-dark rounded-5">
            <div class="text-white display-2"> WELLERSONS </div>
            <div class="d-flex gap-4 align-items-center">
                <button class="btn btn-dark m-2 fs-3 px-3 rounded-4 border-white" onclick="window.location.href = 'index.php'"> Voltar </button>
            </div>
        </div>
        <div class="row justify-content-center my-4 px-3">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card shadow border-0 rounded-4 p-4 p-md-5">
                    <h2 class="display-6 text-center text-dark mb-4">Inserir Imobiliária</h2>
                    <form action="../controller/imobiliaria_controller.php?action=inserir" method="POST" enctype="multipart/form-data" class="d-flex flex-column gap-4">
                        <input type="hidden" name="action" value="inserir">
                        
                        <div class="form-group">
                            <input type="text" name="input-nome-imobiliaria" 
                                placeholder="Nome da Imobiliária" 
                                class="form-control form-control-lg fs-6" 
                                style="border-radius: 8px; border: 1px solid #d1d5db;" required>
                        </div>
                        <div class="form-group">
                            <input type="number" name="input-telefone-imobiliaria" 
                                placeholder="Telefone" 
                                class="form-control form-control-lg fs-6" 
                                style="border-radius: 8px; border: 1px solid #d1d5db;" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="input-contato-imobiliaria" 
                                placeholder="Contato" 
                                class="form-control form-control-lg fs-6" 
                                style="border-radius: 8px; border: 1px solid #d1d5db;" required>
                        </div>
                        <button type="submit" class="btn btn-dark btn-lg rounded-3 py-2 fs-5 mt-2 shadow-sm"> Cadastrar Imobiliária </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
