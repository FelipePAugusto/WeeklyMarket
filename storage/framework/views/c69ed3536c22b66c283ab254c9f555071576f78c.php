<?php $__env->startSection('titulo','Produtos/Serviços'); ?>

<?php $__env->startSection('conteudo'); ?>
    <div>
        <h5 class="center">Lista de Feirantes</h5>
        <div class="row">
            <?php foreach($feirantes as $feirante): ?>
                <div class="col m2" style="margin: -1px" >
                    <div class="card" style="padding: 20px " >
                        <div class="card-image col" style="margin-bottom: 20px">
                            <img src="<?php echo e(asset($feirante->imagem)); ?>">
                        </div>
                        <div class="card-content">
                            <h6><?php echo e($feirante->nome); ?></h6>
                            <p><?php echo e($feirante->tecnico); ?></p>
                        </div>
                        <div class="card-action" style="margin-bottom: -20px">
                            <a href="#"><?php echo e($feirante->status); ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="row" align="center">
            <?php echo e($feirantes->links()); ?>

        </div>
        <h5 class="center" style="margin-top: -10px">Lista de Clientes</h5>
        <div class="row">
            <?php foreach($feirantes as $feirante): ?>
                <div class="col m2" style="margin: -1px" >
                    <div class="card" style="padding: 20px" >
                        <div class="card-image col" style="margin-bottom: 20px">
                            <img src="<?php echo e(asset($feirante->imagem)); ?>">
                        </div>
                        <div class="card-content">
                            <h6><?php echo e($feirante->nome); ?></h6>
                            <p><?php echo e($feirante->tecnico); ?></p>
                        </div>
                        <div class="card-action" style="margin-bottom: -20px">
                            <a href="#"><?php echo e($feirante->status); ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="row" align="center">
            <?php echo e($feirantes->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>