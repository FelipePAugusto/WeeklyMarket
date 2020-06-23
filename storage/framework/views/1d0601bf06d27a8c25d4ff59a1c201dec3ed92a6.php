<div class="input-field">
  <input type="text" name="nome" value="<?php echo e(isset($registro->nome) ? $registro->nome : ''); ?>">
  <label>Nome</label>
</div>

<div class="input-field">
  <p>
    <input type="checkbox" id="test5" name="status" <?php echo e(isset($registro->status) && $registro->status == 'Andamento' ? 'checked' : ''); ?> value="Andamento" />
    <label for="test5">Status</label>
  </p>
  <br><br>
</div>

<div class="input-field">
  <input type="text" name="tecnico" value="<?php echo e(isset($registro->tecnico) ? $registro->tecnico : ''); ?>">
  <label>Técnico</label>
</div>

<div class="file-field  input-field">

  <div class="btn blue">
    <span>Foto</span>
    <input type="file" name="imagem">
  </div>
  <div class="file-path-wrapper">
    <input class="file-path validate" type="text">
  </div>
</div>
<?php if(isset($registro->imagem)): ?>
<div class="input-field">
  <img width="150" src="<?php echo e(asset($registro->imagem)); ?>" />
</div>
<?php endif; ?>


