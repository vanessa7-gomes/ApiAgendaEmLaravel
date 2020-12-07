@extends('layout.head')
@include('layout.menu')
    <div class="container">  
       
        <!-- formulario -->
        <div class="col-md-12">
           <h1 class="mt-4">Lista de Contatos</h1>
           @if(count($listaTodosUsuario)>0)
            @foreach($listaTodosUsuario as $contato)
                <!--inicio do card-->
                <div class="mt-3 mb-2 card">
                    <div class="card-header">                
                    <h5>{{ $contato->nome }} {{ $contato->sobrenome }}</h5>
                    <small class="card-text">Email: {{ $contato->email }}</small>
                    </div>
                    <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Contatos</h5>
                                <small class="card-text">Telefone Fixo: {{ $contato->telefone }}</small>
                                <br>
                                <small class="card-text">Celular: {{ $contato->celular }}</small>
                                <br>                            
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Endereço</h5>
                                <small class="card-text">Bairro: {{ $contato->bairro }}</small>
                                <br>
                                <small class="card-text">Cidade: {{ $contato->cidade }} - {{ $contato->estado }}</small>
                                <br>                         
                            </div>
                            </div>
                        </div>
                        </div>
                        <a href="{{ route('deletarContato',['id'=>$contato->id]) }}" class="mt-3 btn btn-danger">Excluir</a>
                    </div>                
                </div> 
               <!--fim do card-->
            @endforeach
            @endif  
        </div>
        <!-- fim formulario -->
    </div>
@extends('layout.footer')
  


