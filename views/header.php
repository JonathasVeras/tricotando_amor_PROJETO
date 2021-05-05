<!DOCTYPE html>
<html>
<head>
    <title>Tricotando amor</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<body>
    <header>
<!--NAVBAR-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!--CONTAINER-->
            <div class="container container-sm" style="min-height: 120px;" id="container_navbar">
                <!--LOGO-->
                <a href="main"><img src="img/logo.png" alt="..." style="width: 80px;"></a>
                <!--Título-->
                <a class="navbar-brand" href="main" id="logo_string">Tricotando amor</a>
                <!---------->
                <!--Botão sanduíche-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!------------------>
                <!--Menu com opções de seleção (Com colapso caso a tela diminua demais, 
                caso entre em colapso, o BOTÃO SANDUÍCHE é chamado)-->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <!--Lista não ordenada-->
                    <ul class="navbar-nav container-sm flex-row-reverse" id="menu_list" style="padding: 10px;">
                        <!--QUEM SOMOS-->
                        <li class="nav-item link_menu">
                        <a class="nav-link" href="?pagina=sobre">| Quem somos |</a>
                        </li>
                        <!--FALE CONOSCO-->
                        <li class="nav-item link_menu">
                        <a class="nav-link" href="?pagina=fale_conosco">| Fale conosco |</a>
                        </li>
                        <!--Login-->
                        <li class="nav-item link_menu">
                        <a class="nav-link" href="#">| Login |</a>
                        </li>
                        <!--Carrinho-->
                        <li class="nav-item link_menu">
                        <a class="nav-link" href="#">| Carrinho |</a>
                        </li>
                        <!--HOME-->
                        <li class="nav-item link_menu">
                        <a class="nav-link active" aria-current="page" href="?pagina=main">| Home |</a>
                        </li>
                    </ul>
                </div>
                <!------------------------------------>
            </div>
            <!--/CONTAINER-->
        </nav>
<!--/NAVBAR-->
    </header>
<!--- FINAL DA HEADER --->
