<html>
@extends('layout.head')
</html>
<body>
<div class="container">

<form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Inserir um novo contato</legend>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">Primeiro Nome:</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="nome" class="form-control"  type="text">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Sobrenome:</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="sobrenome" class="form-control"  type="text">
</div>
</div>
</div>

<!-- Text input-->
   <div class="form-group">
<label class="col-md-4 control-label">E-Mail:</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input name="email" class="form-control"  type="text">
</div>
</div>
</div>


<!-- Text input-->
   
<div class="form-group">
<label class="col-md-4 control-label">Telefone:</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
<input name="telefone" placeholder="(19)555-1212" class="form-control" type="text">
</div>
</div>
</div>

<!-- Text input-->
   
<div class="form-group">
<label class="col-md-4 control-label">Celular:</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
<input name="celular" placeholder="(19)955-1212" class="form-control" type="text">
</div>
</div>
</div>

<!-- Text input-->
  
<div class="form-group">
<label class="col-md-4 control-label">Bairro:</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
<input name="bairro" class="form-control" type="text">
</div>
</div>
</div>

<!-- Text input-->
  
<div class="form-group">
<label class="col-md-4 control-label">Cidade:</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
<input name="cidade" class="form-control" type="text">
</div>
</div>
</div>

<!-- Text input-->
  
<div class="form-group">
<label class="col-md-4 control-label">Estado:</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
<input name="estado" class="form-control" type="text">
</div>
</div>
</div>

<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4">
<button type="submit" class="btn btn-warning" >Salvar <span class="glyphicon glyphicon-send"></span></button>
</div>
</div>

</fieldset>
</form>
</div>
</div><!-- /.container -->
</body>
</html>