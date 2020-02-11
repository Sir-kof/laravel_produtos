@extends('layouts.app', ["current" => "produtos"])

@section('body')

<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Produtos</h5>
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome do Produto</th>
                    <th>ID da Categoria</th>
                    <th>Quantidade em estoque</th>
                    <th>Preço(R$)</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($prods as $prod)
                <tr>
                    <td>{{$prod->id}}</td>
                    <td>{{$prod->nome}}</td>
                    <td>{{$prod->categoria_id}}</td>
                    <td>{{$prod->estoque}}</td>
                    <td>{{$prod->preço}}</td>
                    <td>
                        <a href="/produtos/editar/{{$prod->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/produtos/apagar/{{$prod->id}}" class="btn btn-sm btn-danger">Apagar</a>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <a href="/produtos/novo" class="btn btn-sm btn-primary" role="button">Novo Produto</a>
    </div>
</div>

@endsection