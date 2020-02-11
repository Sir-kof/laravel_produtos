@extends('layouts.app', ["current" => "home"])

@section('body')
<div class="jumbotron bg-light border border-secundary">
    <div class="row">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Produtos</h5>
                    <p class="card-text">
                        Aqui você cadastra todos os seus Produtos.
                        Só não esqueça de cadastrar previamente as categorias.
                    </p>
                    <a href="/produtos" class="btn btn-primary">Cadastrar produtos</a>
                </div>
            </div>
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Categorias</h5>
                    <p class="card-text">
                        Cadastre as categorias dos seus produtos.
                    </p>
                    <a href="/produtos" class="btn btn-primary">Cadastrar categorias</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection