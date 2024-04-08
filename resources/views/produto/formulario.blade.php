@extends('layout.principal')

@section('conteudo')
    <h1>Novo produto</h1>

    <form method="post" action="{{isset($produto) ? route('atualiza-produto', $produto->id) : route('adiciona-produto')}}">
        @csrf
        <div class="form-group">
            <input type="hidden" class="form-control" name="id" value="{{$produto->id ?? 0}}">
        </div>
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" value="{{$produto->nome ?? ' '}}">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" name="descricao" value="{{$produto->descricao ?? ' '}}">
        </div>
        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="text" class="form-control" name="valor" value="{{$produto->valor ?? ' '}}">
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="number" class="form-control"  name="quantidade" value="{{$produto->quantidade ?? 0}}">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Adicionar</button>
    </form>
@stop

