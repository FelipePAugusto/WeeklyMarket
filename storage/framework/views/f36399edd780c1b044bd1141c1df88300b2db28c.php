<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.headers.guest', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-transparent pb-5" style="margin-top: -10px">
                        <div class="text-muted text-center mt-2 mb-3"><h2>Login</h2></div>
                        <div class="btn-wrapper text-center" style="margin-bottom: -20px">
                            <a href="#" class="btn btn-neutral btn-icon">
                                <span class="btn-inner--icon"><img src="../resources/argon/img/icons/common/github.svg"></span>
                                <span class="btn-inner--text">Github</span>
                            </a>
                            <a href="#" class="btn btn-neutral btn-icon">
                                <span class="btn-inner--icon"><img src="../resources/argon/img/icons/common/google.svg"></span>
                                <span class="btn-inner--text">Google</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5" style="margin-top: -25px">
                        <div class="text-center text-muted mb-4">
                            <small>
                                Email: <strong>felipe@mail.com</strong> Senha: <strong>123456</strong>
                            </small>
                        </div>
                        <form role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group<?php echo e($errors->has('email') ? ' has-danger' : ''); ?> mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" placeholder="Email" type="email" name="email" value="<?php echo e(old('email')); ?>" value="felipe@mail.com" required >
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
                                    <input class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" placeholder="Senha" type="password" value="123456" required>
                                </div>
                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="custom-control custom-control-alternative custom-checkbox" style="margin-bottom: -10px">
                                <input class="custom-control-input" name="remember" id="customCheckLogin" type="checkbox" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                <label class="custom-control-label" for="customCheckLogin">
                                    <span class="text-muted">Lembrar-me</span>
                                </label>
                            </div>
                            <div class="text-center" style="margin-bottom: -50px">
                                <button type="submit" class="btn btn-primary my-4">Entrar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3" style="margin-bottom: -30px">
                    <div class="col-6">
                        <?php if(Route::has('password.request')): ?>
                            <a href="<?php echo e(route('password.request')); ?>" class="text-light">
                                <small>Esqueceu a senha?</small>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="col-6 text-right">
                        <a href="<?php echo e(url('/register')); ?>" class="text-light">
                            <small>Criar uma nova conta</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', ['class' => 'bg-default'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>