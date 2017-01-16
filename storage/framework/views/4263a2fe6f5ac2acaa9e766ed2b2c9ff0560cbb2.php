<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo Html::style('css/micss.css'); ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Clínica</title>

    <!-- Bootstrap -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo Html::style('css/bootstrap.min.css'); ?>

    <?php echo Html::style('css/micss.css'); ?>

    <?php echo Html::style('css/navbar-fixed-top.css'); ?>

    <?php echo Html::script('js/bootstrap.min.js'); ?>


    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <?php /* <link href="<?php echo e(elixir('css/app.css')); ?>" rel="stylesheet"> */ ?>

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout" class="bg-default" >
    <nav class="navbar navbar-inverse navF navbar-static-top ">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    Clínica
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">




                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <?php if(Auth::guest()): ?>
                        <li><a href="<?php echo e(url('/login')); ?>">Iniciar sesión</a></li>
                        <li><a href="<?php echo e(url('/register')); ?>">Registrar</a></li>
                    <?php else: ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                              <?php if(Auth::user()->idrol==1): ?>
                                <li><a href="<?php echo e(url('/Admin')); ?>"><i class=" 	glyphicon glyphicon-th-large"></i></i> Mi Panel</a></li>
                                <li><a href=<?php echo e(route('User.index')); ?>><i class="glyphicon glyphicon-user"></i></i> Mi Perfil</a></li>

                              <?php endif; ?>

                              <?php if(Auth::user()->idrol==2): ?>
                                <li><a href="<?php echo e(url('/Docente')); ?>"><i class=" 	glyphicon glyphicon-th-large"></i></i> Mi Panel</a></li>
                                <li><a href=<?php echo e(route('User.index')); ?>><i class="glyphicon glyphicon-user"></i></i> Mi Perfil</a></li>



                              <?php endif; ?>

                              <?php if(Auth::user()->idrol==3): ?>
                                <li><a href="<?php echo e(url('/Alumno')); ?>"><i class=" glyphicon glyphicon-th-large"></i></i> Mi Panel</a></li>
                                <li><a href=<?php echo e(route('User.index')); ?>><i class="glyphicon glyphicon-user"></i></i> Mi Perfil</a></li>

                              <?php endif; ?>


                                <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Cerrar Sesión</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>


</body>

  <body style="background-color: #E60FD7; "   >
      <!--  <div class=" fondoC centro text" >-->
          <?php echo $__env->yieldContent('content'); ?>
      <!--  </div>  /container -->
  </body>

</html>

<!--Footer-->
<!--  <footer>
     <div class="container">
       <div class="row leg-room">
    <div class="col-md-12 text-center">
        <h1 class="text-uppercase" style =" color: #6590A1;">Clinica</h1>
        <p class="monospaced" style =" color: #6590A1;">
            &copy;Clinica Inc.
            <span class="text-uppercase">All Rights Reserved</span></p>
    </div>
</div>
     </div>
   </footer>
-->

<!--/.Footer-->

</html>
