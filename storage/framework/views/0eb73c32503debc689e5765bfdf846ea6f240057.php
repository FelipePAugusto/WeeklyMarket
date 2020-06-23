<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.headers.guest', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="container mt--8 pb-5">
        <!-- Table -->
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5" style="margin-top: -40px">
                        <div class="text-muted text-center mt-2 mb-4"><h2>Cadastro</h2></div>
                        <form role="form" method="POST" action="<?php echo e(url('/register')); ?>">
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group<?php echo e($errors->has('name') ? ' has-danger' : ''); ?>" style="margin-top: -10px">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" placeholder="Nome" type="text" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                                </div>
                                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('email') ? ' has-danger' : ''); ?>">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" placeholder="Email" type="email" name="email" value="<?php echo e(old('email')); ?>" required>
                                </div>
                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" placeholder="Senha" type="password" name="password" required>
                                </div>
                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Confirmar Senha" type="password" name="password_confirmation" required>
                                </div>
                            </div>
                            <div class="row my-4">
                                <div class="col-12">
                                    <div class="custom-control custom-control-alternative custom-checkbox">
                                        <input class="custom-control-input" id="customCheckRegister" type="checkbox" required>
                                        <label class="custom-control-label" for="customCheckRegister">
                                            <span class="text-muted">Li e aceito os Termos de <a href="#!">Política de Privacidade</a></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center" style="margin-top: -25px; margin-bottom: -25px">
                                <button type="submit" class="btn btn-primary mt-4">Criar Conta</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3" style="margin-bottom: -40px">
                    <div class="col-6 text-left">
                        <a href="<?php echo e(url('/login')); ?>" class="text-light">
                            <small>Já possuo um conta</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['class' => 'bg-default'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>