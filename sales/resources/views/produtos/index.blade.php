@extends('layouts.app')

@section('title', 'Lista Produtos')

@section('content')
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    @include('info.list')
    <div class="container">
        <div class="panel panel-default">
            <a class="btn btn-success" href="{{ route('criar.produto') }}">Criar Produto</a>
        </div>
    </div>
    @if(count($produtos) > 0)
        <div class="container">
            <div class="modalOnLoading"></div>
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h4 id="header">Produtos</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Preco</th>
                            <th>Categoria</th>
                            <th>Acçoes</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td>{{$produto->name}}</td>
                                <td>{{$produto->preco}} esc</td>
                                <td>{{$produto->categoria->name}}</td>
                                <td>
                                    <a href="{{route('detalhes.produto',Crypt::encrypt($produto->id))}}">Detalhes</a>
                                </td>
                            </tr>
                        @endforeach
                        {{$produtos->links()}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @else
        <div class="advice panel-heading text-center" >
            <table align="center">
                <thead>
                <tr>
                    <th>Aviso</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ainda nao existem produtos!</td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endif
    </body>
@endsection
