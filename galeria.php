<?php include "cabecalho.php" ?>

<?php

$filme1 = [
    "titulo"=> "Vingadores: Ultimato", 
"nota"=>9.4,
"sinopse"=> "Após os eventos devastadores de Vingadores: Guerra Infinita, o universo está em ruínas devido aos esforços do Titã Louco, Thanos. Com a ajuda de aliados remanescentes, os Vingadores devem se reunir mais uma vez a fim de desfazer as ações de Thanos e restaurar a ordem no universo de uma vez por todas, não importando as consequências.",
"poster"=>"https://www.themoviedb.org/t/p/original/nE4FYx6jJlA33BZxwQOfiggzKff.jpg"
];
$filme2 = [
    "titulo"=> "O Ultimo Duelo", 
"nota"=> 8.5,
"sinopse"=> "História sobre o duelo entre o cavaleiro Jean de Carrouges e o escudeiro Jaques Le Gris, acusado de ter violado a esposa do cavaleiro. A luta, estabelecida pelo próprio rei da França, Carlos VI, marca o grande drama de vingança e crime do século XIV, que tem a esperança de ser resolvido somente após o combate.",
"poster"=>"https://www.themoviedb.org/t/p/original/xar94bKFkno6gGmVV1crcKeWZpV.jpg"];
$filme3 = [
    "titulo"=> "American Pie: O Reencontro", 
"nota"=> 6.3,
"sinopse"=> "Para comemorar dez anos de formatura do ensino médio, a turma toda se reúne em East Great Falls, Michigan, durante um fim de semana. Cada um deles vive um momento diferente, mas alguns hábitos nunca mudam.",
"poster"=>"https://www.themoviedb.org/t/p/original/4W7IesamkKtItZevNgbcZF5pwGo.jpg"];
$filme4 = [
    "titulo"=> "Venom: Tempo de Carnificina", 
"nota"=> 7.8,
"sinopse"=> "Em busca de seu próximo furo de reportagem, o jornalista Eddie Brock consegue uma entrevista exclusiva com Cletus Kasady, um assassino no corredor da morte, que descobre o segredo de Eddie e se torna o hospedeiro de Carnificina, um simbionte aterrorizante e ameaçador. Eddie e Venom precisam superar sua relação atribulada e trabalhar em conjunto para derrotar Carnificina.",
"poster"=>"https://www.themoviedb.org/t/p/original/tvji5OnBjMlpgmusRvSPgh5Jhst.jpg"];

$filmes =[$filme1, $filme2, $filme3, $filme4];

?>

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
    <?php foreach ($filmes as $filme) :
        ?>
        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="<?= $filme["poster"]?>">
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                </div>
                <div class="card-content">
                    <p class="valing-wrapper">
                        <i class="material-icons amber-text">star</i><?= $filme["nota"]?>
                    </p>
                    <span class="card-title"><?= $filme["titulo"]?></span>
                    <p><?= $filme["sinopse"]?></p>
                </div>
            </div>
        </div>
        <?php endforeach ?>

        <div class="row">
            <div class="col s3">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="<?= $filme2["poster"]?>">
                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                    </div>
                    <div class="card-content">
                        <p class="valing-wrapper">
                            <i class="material-icons amber-text">star</i><?= $filme2["nota"]?>
                        </p>
                        <span class="card-title"><?= $filme2["titulo"]?></span>
                        <p><?= $filme2["sinopse"]?></p>
                    </div>
                </div>
            </div>
            <div class="row">
        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="<?= $filme3["poster"]?>">
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                </div>
                <div class="card-content">
                    <p class="valing-wrapper">
                        <i class="material-icons amber-text">star</i><?= $filme3["nota"]?>
                    </p>
                    <span class="card-title"><?= $filme3["titulo"]?></span>
                    <p><?= $filme3["sinopse"]?></p>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="<?= $filme4["poster"]?>">
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                </div>
                <div class="card-content">
                    <p class="valing-wrapper">
                        <i class="material-icons amber-text">star</i><?= $filme4["nota"]?>
                    </p>
                    <span class="card-title"><?= $filme4["titulo"]?></span>
                    <p><?= $filme4["sinopse"]?></p>
                </div>
            </div>
        </div>
        </div>


</body>

</html>
