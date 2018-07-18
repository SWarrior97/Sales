@extends('layouts.app')

@section('title', 'Lista Produtos')

@section('content')
    <head>
        <meta charset="utf-8">
    </head>
    <body>

    <div class="col-md-6" style="margin: auto;width: 60%;padding: 10px;">
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome:') }}</label>

            <div class="col-md-6">
                <output style="border: 0px" class="form-control" name="nome">{{$produto->name}}</output>
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Preço:') }}</label>

            <div class="col-md-6">
                <output style="border: 0px" class="form-control" name="nome">{{$produto->preco}} esc</output>
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Categoria:') }}</label>

            <div class="col-md-6">
                <output style="border: 0px" class="form-control" name="nome">{{$produto->categoria->name}}</output>
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Foto:') }}</label>

            <div class="col-md-6">
                <output style="border: 0px" class="form-control" name="nome"><img style="width: 200px; heigth: 200px;" src="{{asset("storage/images/$produto->photo")}}" alt=""></output>
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right"></label>

            <div class="col-md-6">
                <a class="btn btn-primary" href="{{URL::previous()}}">Voltar</a>
                <!-- TODO-->
                <a class="btn btn-danger" href="">Eliminar</a>
                <a class="btn btn-info" href="">Editar</a>
            </div>
        </div>

    </div>
    </body>
@endsection
