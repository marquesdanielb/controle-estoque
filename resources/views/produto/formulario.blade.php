@extends('layout.principal')

@section('conteudo')
    <h1>Novo produto</h1>

    <form method="post" action="{{route('adiciona-produto')}}">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" name="descricao">
        </div>
        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="text" class="form-control" name="valor">
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="number" class="form-control" name="quantidade">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Adicionar</button>
    </form>
@stop

