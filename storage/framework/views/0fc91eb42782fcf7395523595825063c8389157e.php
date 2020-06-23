<?php $__env->startSection('titulo','Adicionar Feirante'); ?>

<?php $__env->startSection('conteudo'); ?>
    <div class="container">
        <h3 class="center">Adicionar Feirante</h3>
        <div class="row">
            <form class="" action="<?php echo e(route('feirante.salvar')); ?>" method="post" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <?php echo $__env->make('feirante._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <button class="btn deep-orange">Salvar</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>