<!DOCTYPE html>
<html>
<head>
    <title><?php echo $__env->yieldContent('titulo'); ?></title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<header>
    <nav>
        <div class="nav-wrapper blue">
            <div class="container">
                <a href="<?php echo e(url('/home')); ?>" class="brand-logo">Sistema</a>
                <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="<?php echo e(url('/home')); ?>">Home</a></li>
                    <?php if(Auth::guest()): ?>
                        <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                    <?php else: ?>
                        <li><a href="<?php echo e(route('feirante.adicionar')); ?>">Feirantes</a></li>
                        <li><a href="#"><?php echo e(Auth::user()->name); ?></a></li>
                        <li><a href="<?php echo e(url('/logout')); ?>">Sair</a></li>
                    <?php endif; ?>

                </ul>
                <ul class="side-nav" id="mobile">
                    <li><a href="<?php echo e(url('/home')); ?>">Home</a></li>
                    <?php if(Auth::guest()): ?>
                        <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                    <?php else: ?>
                        <li><a href="<?php echo e(route('feirante.adicionar')); ?>">Feirantes</a></li>
                        <li><a href="#"><?php echo e(Auth::user()->name); ?></a></li>
                        <li><a href="<?php echo e(url('/logout')); ?>">Sair</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
