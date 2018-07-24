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
            @guest
            @else
                @if(Auth::user()->isAdmin())
                    <a class="btn btn-success" href="{{ route('criar.produto') }}">Criar Produto</a>
                @endif
            @endguest
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
                            <th style="min-width: 100px" class="text-center"><button type="button" data-toggle="modal" data-target="#myModal3">Nome</button></th>
                            <th style="min-width: 100px" class="text-center"><button type="button" data-toggle="modal" data-target="#myModal2">Preço</button></th>
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

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <!-- Modal 3-->
        <div class="modal fade" id="myModal3" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>

                    <div class="modal-body">
                        <form  action="{{route('procurar.produto')}}" method="GET" class="form-group" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="" required>

                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="ok">Search</button>
                                <a class="btn btn-info" href="{{route('gerir.produtos')}}">Reset</a>
                            </div>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 2-->
        <div class="modal fade" id="myModal2" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>

                    <div class="modal-body">
                        <form  action="{{route('procurar.produtoPreco')}}" method="GET" class="form-group" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <div class="form-group row">
                                    <label for="filter" class="col-md-4 col-form-label text-md-right">{{ __('Preço') }}</label>

                                    <div class="col-md-6">
                                        <input type="radio" name="filter" value="low">Preço mais baixo<br>
                                        <input type="radio" name="filter" value="high">Preço mais alto<br>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="ok">Search</button>
                            </div>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
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
