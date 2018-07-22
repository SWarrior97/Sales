@extends('layouts.app')

@section('title', 'Sales')

@section('cssFile')
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}"  rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
    <!--Slide Show Css -->
    <link href="{{ asset('ItemSlider/css/main-style.css') }}"  rel="stylesheet">
    <!-- custom CSS here -->
    <link href="{{ asset('css/style.css') }}"  rel="stylesheet">
@stop
@section('content')

    <head>
    </head>

    <body>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="well well-lg offer-box text-center">
                    Sales
                </div>
                <div class="main box-border">
                    <div id="mi-slider" class="mi-slider">
                        <ul>

                            <li><a href="#">

                                    <img  src="{{asset("storage/images/corn_flakes.jpg")}}" alt="img01">
                                </a></li>
                            <li><a href="#">
                                    <img src="{{asset("storage/images/crunch.jpg")}}" alt="img02">
                                </a></li>
                            <li><a href="#">
                                    <img src="{{asset("storage/images/nesquik.jpg")}}" alt="img03">
                                </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                    <img src="{{asset("storage/images/blusa.jpg")}}" alt="img05">
                                </a></li>
                            <li><a href="#">
                                    <img src="{{asset("storage/images/blusa_rosa.jpg")}}" alt="img06">
                                </a></li>
                            <li><a href="#">
                                    <img src="{{asset("storage/images/polo.jpg")}}" alt="img07">
                                </a></li>
                            <li><a href="#">
                                    <img src="{{asset("storage/images/t_shirt.jpg")}}" alt="img08">
                                </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                    <img src="{{asset("storage/images/vans.jpg")}}" alt="img09">
                                </a></li>
                            <li><a href="#">
                                    <img src="{{asset("storage/images/sapatos_toco_alto.jpg")}}" alt="img10">
                                </a></li>
                            <li><a href="#">
                                    <img src="{{asset("storage/images/chinelos.jpg")}}" alt="img11">
                                </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                    <img src="{{asset("storage/images/swatch.jpg")}}" alt="img12">
                                </a></li>
                            <li><a href="#">
                                    <img src="{{asset("storage/images/pulseira.jpg")}}" alt="img13">
                                </a></li>
                            <li><a href="#">
                                    <img src="{{asset("storage/images/colares.jpg")}}" alt="img14">
                                </a></li>
                            <li><a href="#">
                                    <img src="{{asset("storage/images/brincos.jpg")}}" alt="img15">
                                </a></li>
                        </ul>
                        <nav>
                            @foreach($categorias as $categoria)
                                <a href="#">{{$categoria->name}}</a>
                            @endforeach
                        </nav>
                    </div>

                </div>
                <br />
            </div>

        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-3">
                <?php $i=0?>
                @foreach($arrayProdCat as $prod)
                    <?php $id="categoria".$i?>
                    <div>
                        <a id={{$id}} href="{{route('getProdutosCategoria',$prod->categoria)}}" class="list-group-item active">{{$prod->categoria->name}}<span class="label label-primary pull-right"></span>
                        </a>
                        <?php $i++?>
                    </div>
                @endforeach
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div>
                    <?php $categoria ?>
                    @foreach($produtosCategorias as $prod)
                        <?php $categoria= $prod->categoria?>
                        @break
                    @endforeach
                    <ol class="breadcrumb">
                        <li><a href="{{route('welcome')}}">Home</a></li>
                        <li class="active">{{$categoria->name}}</li>
                    </ol>
                </div>
                <!-- /.div -->
                <div class="row">
                    <div class="btn-group alg-right-pad">
                        <button type="button" class="btn btn-default"><strong>{{$countProds}}  </strong>items</button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                Sort Products &nbsp;
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('getProdutosOrderByPrice',['id'=>1,'categoria'=>$categoria])}}">By Price Low</a></li>
                                <li class="divider"></li>
                                <li><a href="{{route('getProdutosOrderByPrice',['id'=>2,'categoria'=>$categoria])}}">By Price High</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    @foreach($produtosCategorias as $prod)
                        <div class="col-md-4 text-center col-sm-6 col-xs-6">
                            <div class="thumbnail product-box">
                                <img src="{{asset("storage/images/$prod->photo")}}" alt="" />
                                <div class="caption">
                                    <h3>{{$prod->name}}</h3>
                                    <p>Preço : <strong>{{$prod->preco}} esc</strong>  </p>
                                    <p> <a href="{{route('detalhes.produto',Crypt::encrypt($prod->id))}}" class="btn btn-primary" role="button">See Details</a></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="col-md-12 download-app-box text-center">


    </div>

    <!--Footer -->
    <div class="col-md-12 footer-box">


        <div class="row small-box ">

        </div>
        <div class="row small-box ">
        </div>
        <div class="row small-box ">

        </div>
        <div class="row small-box pad-botom ">

        </div>
        <div class="row">
            <div class="col-md-4">

            </div>

            <div class="col-md-4">
                <strong>Localizaçao</strong>
                <hr>
                <p>
                    Praia, Santiago,<br />
                    Achada Sao Filipe, Praia<br />
                    Call: 9923414<br>
                    Email: adiliagomes@hotmail.com<br>
                </p>

            </div>
            <div class="col-md-4 social-box">
                <strong>Redes Sociais </strong>
                <hr>
                <a href=""><i class="fa fa-facebook-square fa-3x "></i></a>
            </div>
        </div>
        <hr>
    </div>
    </body>
@endsection

@section('otherScripts')
    <script type="text/javascript" src="{{ URL::asset('js/jquery-1.10.2.js') }}"></script>
    <!--bootstrap JavaScript file  -->
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.js') }}"></script>
    <!--Slider JavaScript file  -->
    <script type="text/javascript" src="{{ URL::asset('ItemSlider/js/modernizr.custom.63321.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('ItemSlider/js/jquery.catslider.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/welcome.js') }}"></script>

    <script>
        jQuery(document).ready(function ($) {

            $('#mi-slider').catslider();

        });
    </script>
@stop
