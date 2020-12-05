@extends('layout.head')
@include('layout.menu')
    <div class="container">
    
        <div class="col-md-6">
            <h1 class="text-center">Cadastro de Contato</h1>
        </div>
        <!-- formulario -->
        <div class="col-md-6">
            <form action="{{ route('cadastrarAgenda') }}" method="post" >
                <div class="form-group">
                    <label for="inputAddress">Nome</label>
                    <input type="text" class="form-control" id="" name ="nome" placeholder="">
                </div>
                <div class="form-group">
                    <label for="inputAddress">Sobrenome</label>
                    <input type="text" class="form-control" id="" name="sobrenome" placeholder="">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Telefone</label>
                        <input type="text" class="form-control" id="" name="telefone" placeholder="(DD)000-0000">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPassword4">Celular</label>
                        <input type="text" class="form-control" id="" name="celular" placeholder="(DD)000-0000">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Email</label>
                    <input type="text" class="form-control" id="" name="email" placeholder="email@dominio">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Bairro</label>
                    <input type="text" class="form-control" id="" name="bairro" placeholder="digite o bairro ...">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                    <label for="inputCity">Cidade</label>
                    <input type="text" class="form-control" id="" name="cidade">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputState">Estado</label>
                    <input type="text" class="form-control" id="" name="estado" >
                    </div>                   
                </div>                
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
        <!-- fim formulario -->
    </div>
@extends('layout.footer')
  


