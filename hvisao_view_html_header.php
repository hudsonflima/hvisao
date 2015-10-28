<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="/css/bootstrap-theme.css" rel="stylesheet" />
    <link href="/css/bootstrap.css" rel="stylesheet" />
    <script src="/js/jquery-2.1.4.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/npm.js"></script>
</head>
<body>

<!-- Início Menu -->
<div class="container">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">HVISÃO</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/index.html">Home</a></li>
                    <li class="dropdown" id="cadastro">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Cadastro de Medicamentos</li>
                            <li><a href="/cadastro.html">Novo</a></li>
                            <li><a href="#">Editar</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Consulta de Medicamentos</li>
                            <li><a href="#">Consultar</a></li>
                        </ul>
                    <li class="dropdown" id="receituario">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Receituários<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Criar</li>
                            <li><a href="#">Receituários Oculares</a></li>
                            <li><a href="#">Receituários Médicos</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Consultar</li>
                            <li><a href="#">Receituários Oculares</a></li>
                            <li><a href="#">Receituários Médicos</a></li>
                        </ul>
                    </li>
                    <li class="dropdown" id="prescricao">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Prescrições<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Criar</li>
                            <li><a href="#">Novo</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Consulta</li>
                            <li><a href="#">Consultar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>