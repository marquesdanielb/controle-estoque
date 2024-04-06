@extends('principal')

@section('conteudo')
    <h1>Listagem de produtos</h1>
    @if (!empty($produtos))
        <table class="table table-bordered table-hover">
            @foreach ($produtos as $produto)
                <tr  class="{{ $produto->quantidade<=1 ? 'alert-danger' : ' ' }}">
                    <td>{{$produto->nome}}</td>
                    <td>{{$produto->valor}}</td>
                    <td>{{$produto->descricao}}</td>
                    <td>{{$produto->quantidade}}</td>
                    <td>
                        <a href="{{route('detalhes-produto', $produto->id)}}">
                            Detalhes
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <div class="alert alert-danger">
            Você não tem nenhum produto cadastrado.
        </div>
    @endif
        <h4>
            <span class="alert alert-danger float-right">
                Um ou menos itens no estoque
            </span>
        </h4>
@stop
