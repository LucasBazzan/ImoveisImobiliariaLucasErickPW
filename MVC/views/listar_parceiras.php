<!DOCTYPE html>
<?php 
include_once('../model/imovel_model.php'); 
include_once('../model/imobiliaria_model.php'); 

$imobiliaria = new Imobiliaria();
$imobiliarias = $imobiliaria->listar_imobiliarias();
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <title>Wellersons | Nossas Parceiras</title>
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

    .card-parceira { transition: transform 0.2s ease, box-shadow 0.2s ease; }
    .card-parceira:hover { transform: translateY(-4px); }
</style>
<body>
    <div class="container-fluid d-flex flex-column gap-5">
        <div class="navbar align-items-center justify-content-between px-4 mt-2 gap-4 bg-dark rounded-5">
            <div class="text-white display-2"> WELLERSONS </div>
            <div class="d-flex gap-4 align-items-center">
                <button class="btn btn-dark m-2 fs-3 px-3 rounded-4 border-white" onclick="window.location.href = 'index.php'"> Voltar </button>
            </div>
        </div>
        <div class="container my-2 px-3">
            <h2 class="display-5 text-center text-dark mb-5">Nossas Parceiras</h2>
            <?php if (!empty($imobiliarias)): ?>
                <div class="row g-4 justify-content-center">
                    <?php foreach ($imobiliarias as $item): ?>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card card-parceira shadow border-0 rounded-4 p-4 h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <h3 class="fs-3 fw-semibold text-dark mb-0">
                                            <?= htmlspecialchars($item['Nome']) ?>
                                        </h3>
                                        <span class="badge bg-dark rounded-pill px-3 py-2">
                                            #<?= htmlspecialchars($item['ID']) ?>
                                        </span>
                                    </div>
                                    <hr class="text-muted my-3">
                                    <div class="d-flex flex-column gap-2 fs-6 text-secondary">
                                        <div>
                                            <strong class="text-dark">Telefone:</strong> 
                                            <?= htmlspecialchars($item['Telefone']) ?>
                                        </div>
                                        <div>
                                            <strong class="text-dark">Contato:</strong> 
                                            <?= htmlspecialchars($item['Contato']) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="card shadow border-0 rounded-4 p-5 text-center">
                            <p class="fs-4 text-secondary mb-0">Nenhuma imobiliária parceira cadastrada no momento.</p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    
    <script src="../../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
