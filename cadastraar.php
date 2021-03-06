<?php include "cabecalho.php"?>



<body>
    <nav class="nav-extended grey darken-1">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>M A X - C I N E</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent grey darken-4">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a href="#test2">Assistidos</a></li>
                <li class="tab "><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>

    <div class="row">
        <div class="col s6 offset-s3">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Cadastrar Filme</span>

                    <!-- input titulo-->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="titulo" type="text" class="validate">
                            <label for="titulo">Título do Filme</label>
                        </div>
                    </div>
                    <!-- input sinopse-->
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="sinopse" class="materialize-textarea"></textarea>
                                    <label for="sinopse">Sinopse</label>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- input nota-->
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="nota" type="number" step=".1" min="0" max="10" class="validate" required>
                            <label for="nota">Nota</label>
                        </div>
                    </div>
                    <!-- input capa-->
                    <div class="file-field input-field">
                        <div class="btn grey darken-4 ">
                            <span>Capa</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>

                    <div class="card-action">
                        <a class="btn waves-effect waves-light grey" href="galeria.php">Cancelar</a>
                        <button type="submit" class="waves-effect waves-light btn grey darken-4">Confirmar</button>
                    </div>
                </div>
            </div>
        </div>
