<html>
    <head>
        <title>Delta'Li</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Caesar+Dressing|Lexend+Deca|Livvic&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" type="text/css">
    </head>
    <body>
        <nav class="navbar topnav">
            <div class="container">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo BASE_URL; ?>">Home</a></li>
                    <li><a href="<?php echo BASE_URL; ?>contact">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav nav-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">English<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">English</a></li>
                            <li><a href="#">Portuguese</a>
                            </li>
                            <li><a href="Espanish"></a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo BASE_URL;?>login">Login</a></li>
                </ul>
            </div>
        </nav>
        
        <!--
        Contato/Carrinho
        -->
        
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-2 logo">
                        <a href="<?php echo BASE_URL;?>"><img src="<?php echo BASE_URL;?>asserts/images/logo.png"/></a>
                    </div>
                    <div class="col-sm-7">
                        <div class="head_help">(12)981236548</div>
                        <div class="head_email">
                            
                            contato@<span>deltali.com.br</span>
                        </div>
                        <div class="serch_area">
                            <form method="GET">
                                <input type="text" name="s" required placeholder="Search item"/>
                                <select name="category">
                                    <option value="">All categories</option>
                                </select>
                                <input type="submit" value=""/>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <a href="<?php echo BASE_URL;?>cart">
                            <div class="cartarea">
                                <div class="carticon">
                                    <div class="cartqt">
                                        9
                                    </div>
                                </div>
                                <div class="cattotal">
                                    Your cart:<br/>
                                    <span>R$ 999,99</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>        
        </header>
        <main>

        </main>
        <footer>

        </footer>

        <!-- Scripts -->
        <script type="text/javascript">var BASE_URL = '<?php echo BASE_URL; ?>';</script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.4.1.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
    </body>
</html>

<!--
FONTES
Livvic - Título/destaque
Caesar Dressing - Logo
Lexend Deca - Padrão
-->