<div class="input-field">
  <input type="text" name="nome" value="{{isset($registro->nome) ? $registro->nome : ''}}">
  <label>Nome</label>
</div>

<div class="input-field">
  <p>
    <input type="checkbox" id="test5" name="status" {{isset($registro->status) && $registro->status == 'Andamento' ? 'checked' : '' }} value="Andamento" />
    <label for="test5">Status</label>
  </p>
  <br><br>
</div>

<div class="input-field">
  <input type="text" name="tecnico" value="{{isset($registro->tecnico) ? $registro->tecnico : ''}}">
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
@if(isset($registro->imagem))
<div class="input-field">
  <img width="150" src="{{asset($registro->imagem)}}" />
</div>
@endif


