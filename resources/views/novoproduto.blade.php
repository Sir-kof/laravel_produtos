@extends('layouts.app', ["current" => "produtos"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/produtos" method="post">
            @csrf
            <div class="form-group">
                <label for="nomeProduto">Nome do Produto</label>
                <input type="text" class="form-control" name="nomeProduto" 
                id="nomeProduto" placeholder="Produto">
            </div>
            <div class="form-group">
                <label for="categoriaProduto">Categoria do Produto</label>
                <select class="form-control" name="categoriaProduto" id="categoriaProduto">
                @foreach ($cats as $cat)
                  <option value="{{$cat->id}}">{{$cat->nome}}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="precoProduto">Preço</label>
                <input type="number" class="form-control" name="precoProduto" 
                id="precoProduto" placeholder="R$ 1000">
            </div>
            <div class="form-group">
                <label for="estoque">Quantidade em estoque</label>
                <input type="number" class="form-control" name="estoque" id="estoque" placeholder="1,2,3...">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>

@endsection