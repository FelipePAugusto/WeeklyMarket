<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('users.partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="container-fluid mt--7" >
        <div class="row" style="margin-top: -175px; margin-bottom: 15px">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image" style="margin-top: 65px; margin-bottom: -35px;">
                                <a href="#">
                                    <!-- <input type="file" name="imagem" class="btn btn-sm btn-info mr-4"> -->
                                    <?php if(isset($ordens) && $ordens->acao == "3"): ?>
                                        <img src="<?php echo e(URL::asset('../public/img/sistema/sem_profile.png')); ?>" class="circle" onclick="document.getElementById('file').click();">
                                    <?php elseif(isset($ordens) && $ordens->acao == "2"): ?>
                                        <img src="<?php echo e(URL::asset('../public/img/sistema/sem_profile.png')); ?>" class="circle" onclick="document.getElementById('file').click();">
                                    <?php else: ?>
                                        <img src="<?php echo e(URL::asset('../public/img/sistema/sem_profile.png')); ?>" class="circle" onclick="document.getElementById('file').click();">
                                    <?php endif; ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">
                            <?php if(isset($ordens) && $ordens->acao == "3"): ?>
                                <!--<form method="post" action="<?php echo e(route('ordens.alterar_status', $ordens->id)); ?>" autocomplete="off" enctype="multipart/form-data">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="_method" value="put">
                                    <input type="hidden" name="status" value="Liberado">
                                    <button type="submit" class="btn btn-sm btn-info mr-4" >Preparação</button>
                                </form>
                                <form method="post" action="<?php echo e(route('ordens.alterar_status', $ordens->id)); ?>" autocomplete="off" enctype="multipart/form-data">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="_method" value="put">
                                    <input type="hidden" name="status" value="Liberado">
                                    <button type="submit" class="btn btn-sm btn-info mr-4" style="margin-left: -10px; margin-top: -25px">Transporte</button>
                                </form>-->
                                <form method="post" action="<?php echo e(route('ordens.alterar_status', $ordens->id)); ?>" autocomplete="off" enctype="multipart/form-data">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="_method" value="put">
                                    <input type="hidden" name="status" value="Liberado">
                                    <button type="submit" class="btn btn-sm btn-info mr-4">Entregue</button>
                                </form>
                            <?php endif; ?>
                            <?php if(isset($ordens) && $ordens->acao == "3"): ?>
                                <!--<form method="post" action="<?php echo e(route('ordens.alterar_status', $ordens->id)); ?>" autocomplete="off" enctype="multipart/form-data">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="_method" value="put">
                                    <input type="hidden" name="status" value="Bloqueado">
                                    <button type="submit" class="btn btn-sm btn-danger float-right" style="margin-right: -10px;">Cancelar</button>
                                </form>-->
                                <form method="post" action="<?php echo e(route('ordens.alterar_status', $ordens->id)); ?>" autocomplete="off" enctype="multipart/form-data">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="_method" value="put">
                                    <input type="hidden" name="status" value="Bloqueado">
                                    <button type="submit" class="btn btn-sm btn-danger float-right" style="margin-right: -10px;">Bloquear</button>
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php if(isset($ordens) && $ordens->acao == "3"): ?>
                        <form method="post" action="<?php echo e(route('ordens.alterar_imagem', $ordens->id)); ?>" autocomplete="off" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="_method" value="put">
                            <input type="file" style="display:none;" id="file" name="imagem" value="" required/>
                            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4" style="margin-left: 80px; margin-bottom: -50px; margin-top: 47px">
                                <div class="d-flex justify-content-between">
                                    <button type="submit" class="btn btn-sm btn-success mr-2">Alterar Imagem</button>
                                </div>
                            </div>
                        </form>
                    <?php elseif(isset($ordens) && $ordens->acao == "2"): ?>
                        <form method="get" action="<?php echo e(route('ordens.listar')); ?>" autocomplete="off">
                            <?php echo e(csrf_field()); ?>

                            <input type="file" style="display:none;" id="file" name="file" disabled/>
                            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4" style="margin-left: 75px; margin-bottom: -30px; margin-top: 47px">
                                <div class="d-flex justify-content-between">
                                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4" style="margin-bottom: -50px">
                                        <div class="d-flex justify-content-between">
                                            <?php if($ordens->status == "Analisando"): ?>
                                                <a href="" class="btn btn-sm btn-warning mr-2">Analisando</a>
                                            <?php elseif($ordens->status == "Cancelada"): ?>
                                                <a href="" class="btn btn-sm btn-danger mr-2">Cancelada</a>
                                            <?php elseif($ordens->status == "Entregue"): ?>
                                                <a href="" class="btn btn-sm btn-info mr-2">Entregue</a>
                                            <?php elseif($ordens->status == "Transporte"): ?>
                                                <a href="" class="btn btn-sm btn-blue mr-2">Transporte</a>
                                            <?php else: ?>
                                                <a href="" class="btn btn-sm btn-yellow mr-2">Preparação</a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <?php else: ?>
                        <form method="post" action="<?php echo e(route('ordens_salvar')); ?>" autocomplete="off">
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" style="display:none;" id="file" value="Analisando" name="status"/>
                            <input type="file" style="display:none;" id="file" name="file" disabled/>
                            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4" style="margin-left: 95px; margin-bottom: -50px; margin-top: 75px">
                                <div class="d-flex justify-content-between">
                                    <a href="" class="btn btn-sm btn-warning mr-2">Analisando</a>
                                </div>
                            </div>
                        </form>
                    <?php endif; ?>

                    <div class="card-body pt-0 pt-md-4">
                        <div class="row" style="padding-top: -55px; margin-bottom: -15px">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                    <div>
                                        <span class="heading" style="margin-top: -30px;">18</span>
                                        <span class="description">Comentários</span>
                                    </div>
                                    <div>
                                        <span class="heading" style="margin-top: -70px; margin-right: 20px">19</span>
                                        <span class="description" style="margin-right: 15px">Compras</span>
                                    </div>
                                    <div>
                                        <span class="heading" style="margin-top: -30px;">40</span>
                                        <span class="description">Avaliação</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center" style="margin-bottom: -10px">
                            <h3>
                                <?php echo e(Auth::user()->name); ?><span class="font-weight-light">, 27</span>
                            </h3>
                            <div class="h5 font-weight-300" style="margin-bottom: -5px">
                                <i class="ni location_pin mr-2"></i>Bucharest, Romania
                            </div>
                            <div class="h5 mt-4" >
                                <i class="ni business_briefcase-24 mr-2"></i>Feirante do Boqueirão
                            </div>
                            <div style="margin-bottom: -8px">
                                <i class="ni education_hat mr-2"></i>University of Computer Science
                            </div>
                            <hr class="my-4"  />
                            <a href="#" >Show more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow" >
                    <div class="card-header bg-white border-0" >
                        <div class="row align-items-center col-8" style="margin-bottom: -10px">
                            <?php if(isset($ordens->nome) && $ordens->acao == "3"): ?>
                                <h2 class="mb-0" style="margin-top: -10px">Editar Ordem</h2>
                            <?php elseif(isset($ordens->nome) && $ordens->acao == "2"): ?>
                                <h2 class="mb-0" style="margin-top: -10px">Visualizar Ordem</h2>
                            <?php else: ?>
                                <h2 class="mb-0" style="margin-top: -10px">Adicionar Ordem</h2>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card-body" style="margin-top: -10px">
                        <?php if(isset($ordens->nome) && $ordens->acao == "3"): ?>
                        <form method="post" action="<?php echo e(route('ordens.atualizar', $ordens->id)); ?>" autocomplete="off">
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="_method" value="put">
                        <?php elseif(isset($ordens) && $ordens->acao == "2"): ?>
                        <form method="get" action="<?php echo e(route('ordens.listar')); ?>" autocomplete="off">
                            <?php echo e(csrf_field()); ?>

                        <?php else: ?>
                        <form method="post" action="<?php echo e(route('ordens_salvar')); ?>" autocomplete="off">
                            <?php echo e(csrf_field()); ?>

                        <?php endif; ?>
                            <?php echo e(csrf_field()); ?>

                            <?php if(session('status')): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?php echo e(session('status')); ?>

                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif; ?>

                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group<?php echo e($errors->has('old_password') ? ' has-danger' : ''); ?>">
                                        <label class="form-control-label" for="input-current-password">Cliente</label>
                                        <select name="cliente_id" class="form-control form-control-alternative<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"  <?php echo e(isset($ordens) && $ordens->acao == "2" ? 'disabled' : 'required'); ?>>
                                            <option value="<?php echo e(isset($ordens->cliente) ? $ordens->cliente : ''); ?>">Escolha o Cliente</option>
                                            <?php foreach($clientes as $cliente): ?>
                                                <option value="<?php echo e($cliente->id); ?>"><?php echo e($cliente->nome); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?php if($errors->has('clientes')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($errors->first('clientes')); ?></strong>
                                                </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group<?php echo e($errors->has('old_password') ? ' has-danger' : ''); ?>">
                                        <label class="form-control-label" for="input-current-password">Feirante</label>
                                        <select name="feirante_id" class="form-control form-control-alternative<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"  <?php echo e(isset($ordens) && $ordens->acao == "2" ? 'disabled' : 'required'); ?>>
                                            <option value="<?php echo e(isset($ordens->feirante) ? $ordens->feirante : ''); ?>">Escolha o Feirante</option>
                                            <?php foreach($feirantes as $feirante): ?>
                                                <option value="<?php echo e($feirante->id); ?>"><?php echo e($feirante->nome); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?php if($errors->has('feirantes')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('feirantes')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group<?php echo e($errors->has('old_password') ? ' has-danger' : ''); ?>">
                                        <label class="form-control-label" for="input-current-password">Produto</label>
                                        <select name="produto_id" class="form-control form-control-alternative<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"  <?php echo e(isset($ordens) && $ordens->acao == "2" ? 'disabled' : 'required'); ?>>
                                            <option value="<?php echo e(isset($ordens->produto) ? $ordens->produto : ''); ?>">Escolha o Produto</option>
                                            <?php foreach($produtos as $produto): ?>
                                                <option value="<?php echo e($produto->id); ?>"><?php echo e($produto->nome); ?>, <?php echo e($produto->quantidade); ?><?php echo e($produto->unidade_medida); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?php if($errors->has('produtos')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($errors->first('produtos')); ?></strong>
                                                </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-xl-1 col-lg-6">
                                    <div class="form-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                                        <label class="form-control-label" for="input-password">Quantidade</label>
                                        <input type="text" id="input-password" style="width: 80px" class="form-control form-control-alternative<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e($produto->quantidade); ?><?php echo e($produto->unidade_medida); ?>" value="<?php echo e(isset($ordens->quantidade) ? $ordens->quantidade : ''); ?>" <?php echo e(isset($ordens) && $ordens->acao == "2" ? 'disabled' : ''); ?>>

                                        <?php if($errors->has('password')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                                </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-6" style="margin-left: 45px; margin-right: -47px">
                                    <div class="form-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                                        <label class="form-control-label" for="input-password">&nbsp;</label>
                                        <button type="submit" class="btn btn-danger" style="margin-top: 31px;  height: 46px; width: 50px; font-size: 18px">–</button>
                                    </div>
                                </div>
                                <div class="col-xl-1 col-lg-6">
                                    <div class="form-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                                        <label class="form-control-label" for="input-password">&nbsp;</label>
                                        <input type="text" name="quantidade" id="input-password" style=" width: 50px; text-align: center" class="form-control form-control-alternative<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" placeholder="0" value="<?php echo e(isset($ordens->quantidade) ? $ordens->quantidade : '12'); ?>" <?php echo e(isset($ordens) && $ordens->acao == "2" ? 'disabled' : 'required'); ?>>

                                        <?php if($errors->has('password')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                                </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-6">
                                    <div class="form-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                                        <label class="form-control-label" for="input-password">&nbsp;</label>
                                        <button type="submit" class="btn btn-success" style="margin-left: -8px; margin-top: 31px; height: 46px; width: 50px; font-size: 15px">+</button>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group<?php echo e($errors->has('old_password') ? ' has-danger' : ''); ?>">
                                        <label class="form-control-label" for="input-current-password">Produto</label>
                                        <select name="produto_id2" class="form-control form-control-alternative<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"  <?php echo e(isset($ordens) && $ordens->acao == "2" ? 'disabled' : 'required'); ?>>
                                            <option value="<?php echo e(isset($ordens->produto) ? $ordens->produto : ''); ?>">Escolha o Produto</option>
                                            <?php foreach($produtos as $produto): ?>
                                                <option value="<?php echo e($produto->id); ?>"><?php echo e($produto->nome); ?>, <?php echo e($produto->quantidade); ?><?php echo e($produto->unidade_medida); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?php if($errors->has('produtos')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($errors->first('produtos')); ?></strong>
                                                </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-xl-1 col-lg-6">
                                    <div class="form-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                                        <label class="form-control-label" for="input-password">Quantidade</label>
                                        <input type="text" id="input-password" style="width: 80px" class="form-control form-control-alternative<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e($produto->quantidade); ?><?php echo e($produto->unidade_medida); ?>" value="<?php echo e(isset($ordens->quantidade) ? $ordens->quantidade : ''); ?>" <?php echo e(isset($ordens) && $ordens->acao == "2" ? 'disabled' : ''); ?>>

                                        <?php if($errors->has('password')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                                </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-6" style="margin-left: 45px; margin-right: -47px">
                                    <div class="form-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                                        <label class="form-control-label" for="input-password">&nbsp;</label>
                                        <button type="submit" class="btn btn-danger" style="margin-top: 31px;  height: 46px; width: 50px; font-size: 18px">–</button>
                                    </div>
                                </div>
                                <div class="col-xl-1 col-lg-6">
                                    <div class="form-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                                        <label class="form-control-label" for="input-password">&nbsp;</label>
                                        <input type="text" name="quantidade2" id="input-password" style=" width: 50px; text-align: center" class="form-control form-control-alternative<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" placeholder="0" value="<?php echo e(isset($ordens->quantidade) ? $ordens->quantidade : '7'); ?>" <?php echo e(isset($ordens) && $ordens->acao == "2" ? 'disabled' : 'required'); ?>>

                                        <?php if($errors->has('password')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                                </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-6">
                                    <div class="form-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                                        <label class="form-control-label" for="input-password">&nbsp;</label>
                                        <button type="submit" class="btn btn-success" style="margin-left: -8px; margin-top: 31px; height: 46px; width: 50px; font-size: 15px">+</button>
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group<?php echo e($errors->has('old_password') ? ' has-danger' : ''); ?>">
                                        <label class="form-control-label" for="input-current-password">Produto</label>
                                        <select name="produto_id3" class="form-control form-control-alternative<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"  <?php echo e(isset($ordens) && $ordens->acao == "2" ? 'disabled' : 'required'); ?>>
                                            <option value="<?php echo e(isset($ordens->produto) ? $ordens->produto : ''); ?>">Escolha o Produto</option>
                                            <?php foreach($produtos as $produto): ?>
                                                <option value="<?php echo e($produto->id); ?>"><?php echo e($produto->nome); ?>, <?php echo e($produto->quantidade); ?><?php echo e($produto->unidade_medida); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?php if($errors->has('produtos')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($errors->first('produtos')); ?></strong>
                                                </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-xl-1 col-lg-6">
                                    <div class="form-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                                        <label class="form-control-label" for="input-password">Quantidade</label>
                                        <input type="text" id="input-password" style="width: 80px" class="form-control form-control-alternative<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e($produto->quantidade); ?><?php echo e($produto->unidade_medida); ?>" value="<?php echo e(isset($ordens->quantidade) ? $ordens->quantidade : ''); ?>" <?php echo e(isset($ordens) && $ordens->acao == "2" ? 'disabled' : ''); ?>>

                                        <?php if($errors->has('password')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                                </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-6" style="margin-left: 45px; margin-right: -47px">
                                    <div class="form-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                                        <label class="form-control-label" for="input-password">&nbsp;</label>
                                        <button type="submit" class="btn btn-danger" style="margin-top: 31px;  height: 46px; width: 50px; font-size: 18px">–</button>
                                    </div>
                                </div>
                                <div class="col-xl-1 col-lg-6">
                                    <div class="form-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                                        <label class="form-control-label" for="input-password">&nbsp;</label>
                                        <input type="text" name="quantidade3" id="input-password" style=" width: 50px; text-align: center" class="form-control form-control-alternative<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" placeholder="0" value="<?php echo e(isset($ordens->quantidade) ? $ordens->quantidade : '4'); ?>" <?php echo e(isset($ordens) && $ordens->acao == "2" ? 'disabled' : 'required'); ?>>

                                        <?php if($errors->has('password')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                                </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-6">
                                    <div class="form-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                                        <label class="form-control-label" for="input-password">&nbsp;</label>
                                        <button type="submit" class="btn btn-success" style="margin-left: -8px; margin-top: 31px; height: 46px; width: 50px; font-size: 15px">+</button>
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-xl-4 col-lg-6">
                                    <div class="form-group<?php echo e($errors->has('old_password') ? ' has-danger' : ''); ?>">
                                        <label class="form-control-label" for="input-current-password">Forma de Pagamento</label>
                                        <select name="forma_pagamento_id" class="form-control form-control-alternative<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"  <?php echo e(isset($ordens) && $ordens->acao == "2" ? 'disabled' : 'required'); ?>>
                                            <option value="<?php echo e(isset($ordens->forma_pagamento) ? $ordens->forma_pagamento : ''); ?>">Escolha</option>
                                            <?php foreach($formas_pagamento as $forma_pagamento): ?>
                                                <option value="<?php echo e($forma_pagamento->id); ?>"><?php echo e($forma_pagamento->nome); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?php if($errors->has('formas_pagamento')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($errors->first('formas_pagamento')); ?></strong>
                                                </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-6">
                                    <div class="form-group<?php echo e($errors->has('old_password') ? ' has-danger' : ''); ?>">
                                        <label class="form-control-label" for="input-current-password">Validação</label>
                                        <input type="text" name="validacao" id="input-current-password" class="form-control form-control-alternative<?php echo e($errors->has('old_password') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e($validacao); ?>" value="<?php echo e(isset($ordens->validacao) ? $ordens->validacao : $validacao); ?>" <?php echo e(isset($ordens) && $ordens->acao == "2" ? 'disabled' : ''); ?>>

                                        <?php if($errors->has('old_password')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('old_password')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group<?php echo e($errors->has('old_password') ? ' has-danger' : ''); ?>">
                                        <label class="form-control-label" for="input-current-password">Endereço de Entrega Alternativo</label>
                                        <input type="text" name="endereco_aux" id="input-current-password" class="form-control form-control-alternative<?php echo e($errors->has('old_password') ? ' is-invalid' : ''); ?>" placeholder="Av. Marechal Floriano Peixoto" value="<?php echo e(isset($ordens->endereco) ? $ordens->endereco : ''); ?>" <?php echo e(isset($ordens) && $ordens->acao == "2" ? 'disabled' : ''); ?>>

                                        <?php if($errors->has('old_password')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('old_password')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="text-center" style="margin-top: -20px; margin-bottom: -30px">
                                    <?php if(isset($ordens->nome) && $ordens->acao == "3"): ?>
                                    <button type="submit" class="btn btn-success mt-4">Alterar</button>
                                    <?php elseif(isset($ordens->nome) && $ordens->acao == "2"): ?>
                                    <button type="submit" class="btn btn-yellow mt-4">Voltar</button>
                                    <?php else: ?>
                                    <button type="submit" class="btn btn-success mt-4">Adicionar</button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>