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
            <!--TODO-->
            <a class="btn btn-success" href="{{ route('criar.produto') }}">Criar Categoria</a>
        </div>
    </div>
    @if(count($categorias) > 0)
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
                            <th>Acções</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($categorias as $categoria)
                            <tr>
                                <td>{{$categoria->name}}</td>
                                <td>
                                    <a class="btn-sm btn-info" href="#">Editar</a>
                                    <a class="btn-sm btn-danger" href="#">Remover</a>
                                </td>
                            </tr>
                        @endforeach
                        {{$categorias->links()}}
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
                    <td>Ainda nao existem categorias!</td>
                </tr>
                </tbody>
            </table>
        </div>
    @endif
    </body>
@endsection
