<?php $__env->startSection('titulo','Produtos/Serviços'); ?>

<?php $__env->startSection('conteudo'); ?>
    <div class="container">
        <h3 class="center">Lista de Produtos/Serviços</h3>
        <div class="row">
<?php /*            <?php foreach($cursos as $curso): ?>*/ ?>
<?php /*                <div class="col s12 m4">*/ ?>
<?php /*                    <div class="card">*/ ?>
<?php /*                        <div class="card-image">*/ ?>
<?php /*                            <img src="<?php echo e(asset($curso->imagem)); ?>">*/ ?>
<?php /*                        </div>*/ ?>
<?php /*                        <div class="card-content">*/ ?>
<?php /*                            <h4><?php echo e($curso->titulo); ?></h4>*/ ?>
<?php /*                            <p><?php echo e($curso->descricao); ?></p>*/ ?>
<?php /*                        </div>*/ ?>
<?php /*                        <div class="card-action">*/ ?>
<?php /*                            <a href="#">Ver mais...</a>*/ ?>
<?php /*                        </div>*/ ?>
<?php /*                    </div>*/ ?>
<?php /*                </div>*/ ?>
<?php /*            <?php endforeach; ?>*/ ?>
        </div>
        <div class="row" align="center">
<?php /*            <?php echo e($cursos->links()); ?>*/ ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>