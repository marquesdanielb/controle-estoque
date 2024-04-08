@extends('layout.principal')

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
                            🔍
                        </a>
                        <a href="{{route('edita-produto', $produto->id)}}">
                            📝
                        </a>
                        <a href="{{route('remove-produto', $produto->id)}}">
                            🗑️
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

    @if ($produto->quantidade <= 1)
        <h4>
            <span class="float-right">
                🚨 Um ou menos itens no estoque
            </span>
        </h4>
    @endif

    @if (old('nome'))
        <div class="alert alert-success mt-2">
            O produto {{old('nome')}} foi adicionado com <strong>sucesso</strong>!
        </div>
    @endif
@stop
