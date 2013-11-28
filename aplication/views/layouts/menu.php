        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">

                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="#">
                        Progra Web
                    </a>

                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li><a href="<?php echo BASEURL; ?>views/site/inicio.php">Inicio</a></li>
                            <li><a href="#">Nosotros</a></li>                            
                            <li><a href="#">Contacto</a></li>

                                           
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrar<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo BASEURL; ?>views/site/usuario.php">Usuarios</a></li>
                                    </ul>
                                </li>
                            
                           
                        </ul>
                        <?php if (!isset($_SESSION['nombre'])): ?>  
                            <div class="navbar-form pull-right">
                                <a class="btn btn-small btn-primary" 
                                   href="<?php echo BASEURL; ?>views/site/login.php">
                                    Iniciar Sesion
                                </a>
                            </div> 
                        <?php else: ?>
                            <div class="navbar-form pull-right">
                                <a class="btn btn-small btn-primary" 
                                   href="<?php echo BASEURL; ?>views/site/login.php">
                                    Cerrar Sesion
                                </a>
                            </div> 
                        <?php endif;?>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>