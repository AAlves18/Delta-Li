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
        <div class="categoryarea">
            <nav class="navbar">
                <div class="container">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Select Category
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Page 1-1</a></li>
                                <li><a href="#">Page 1-2</a></li>
                                <li><a href="#">Page 1-3</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Category X</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <aside>
                            <h1>Filter</h1>
                            <div class="filterarea">

                            </div>
                            <div class="widget">
                                <h1>Featured products</h1>
                                <div class="widget-body">
                                    ...
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-sm-9">
                        <?php $this->loadViewInTemplate($viewName, $viewData);?>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="widget">
                            <h1>Featured products</h1>
                            <div class="widget-body">
                                ...
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="widget">
                            <h1>On-sale products</h1>
                            <div class="widget-body">
                                ...
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="widget">
                            <h1>Top rated products</h1>
                            <div class="widget-body">
                                ...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subarea">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-sm-offset-2 no-padding">
                            <form action="" method="POST">
                                <input type="email" class="subemail" name="email" placeholder="Subscribe to our newsletter">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="links">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="<?php echo BASE_URL; ?>">
                                <img width="150" src="<?php echo BASE_URL; ?>/assets/img/logo.png" alt="Delta Shop">
                            </a>
                            <br><br>
                            <strong>Slogan da loja</strong>
                            <br><br>
                            Endereço da Loja
                        </div>
                        <div class="col-sm-8 linkgroup">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h3>Category</h3>
                                    <ul>
                                        <li><a href="#">Categoria x</a></li>
                                        <li><a href="#">Categoria x</a></li>
                                        <li><a href="#">Categoria x</a></li>
                                        <li><a href="#">Categoria x</a></li>
                                        <li><a href="#">Categoria x</a></li>
                                        <li><a href="#">Categoria x</a></li> 
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <h3>Information</h3>
                                    <ul>
                                        <li><a href="#">Menu 1</a></li>
                                        <li><a href="#">Menu 2</a></li>
                                        <li><a href="#">Menu 3</a></li>
                                        <li><a href="#">Menu 4</a></li>
                                        <li><a href="#">Menu 5</a></li>
                                        <li><a href="#">Menu 6</a></li> 
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <h3>Information</h3>
                                    <ul>
                                        <li><a href="#">Menu 1</a></li>
                                        <li><a href="#">Menu 2</a></li>
                                        <li><a href="#">Menu 3</a></li>
                                        <li><a href="#">Menu 4</a></li>
                                        <li><a href="#">Menu 5</a></li>
                                        <li><a href="#">Menu 6</a></li> 
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div >
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">&copy; <span>Loja Virtual</span> - Todos os direitos reservados.</div>
                        <div class="col-sm-6">
                            <div class="payments">
                                <img src="<?php echo BASE_URL; ?>assentes/images/visa.png"/>
                                <img src="<?php echo BASE_URL; ?>assentes/images/visa.png"/>
                                <img src="<?php echo BASE_URL; ?>assentes/images/visa.png"/>
                                <img src="<?php echo BASE_URL; ?>assentes/images/visa.png"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
      
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