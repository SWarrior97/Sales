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

                </div>
                <div class="main box-border">
                    <div id="mi-slider" class="mi-slider">
                        <ul>

                            <li><a href="#">

                                    <img  src="{{asset("storage/images/16.jpg")}}" alt="img01"><h4>Boots</h4>
                                </a></li>
                            <li><a href="#">
                                    <img src="{{asset("storage/images/2.jpg")}}" alt="img02"><h4>Oxfords</h4>
                                </a></li>
                            <li><a href="#">
                                    <img src="{{asset("storage/images/3.jpg")}}" alt="img03"><h4>Loafers</h4>
                                </a></li>
                            <li><a href="#">
                                    <img src="{{asset("storage/images/4.jpg")}}" alt="img04"><h4>Sneakers</h4>
                                </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                    <img src="{{asset("storage/images/5.jpg")}}" alt="img05"><h4>Belts</h4>
                                </a></li>
                            <li><a href="#">
                                    <img src="{{asset("storage/images/6.jpg")}}" alt="img06"><h4>Hats &amp; Caps</h4>
                                </a></li>
                            <li><a href="#">
                                    <img src="{{asset("storage/images/7.jpg")}}" alt="img07"><h4>Sunglasses</h4>
                                </a></li>
                            <li><a href="#">
                                    <img src="{{asset("storage/images/8.jpg")}}" alt="img08"><h4>Scarves</h4>
                                </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                    <img src="{{asset("storage/images/9.jpg")}}" alt="img09"><h4>Casual</h4>
                                </a></li>
                            <li><a href="#">
                                    <img src="{{asset("storage/images/10.jpg")}}" alt="img10"><h4>Luxury</h4>
                                </a></li>
                            <li><a href="#">
                                    <img src="{{asset("storage/images/11.jpg")}}" alt="img11"><h4>Sport</h4>
                                </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                    <img src="{{asset("storage/images/12.jpg")}}" alt="img12"><h4>Carry-Ons</h4>
                                </a></li>
                            <li><a href="#">
                                    <img src="{{asset("storage/images/13.jpg")}}" alt="img13"><h4>Duffel Bags</h4>
                                </a></li>
                            <li><a href="#">
                                    <img src="{{asset("storage/images/14.jpg")}}" alt="img14"><h4>Laptop Bags</h4>
                                </a></li>
                            <li><a href="#">
                                    <img src="{{asset("storage/images/15.jpg")}}" alt="img15"><h4>Briefcases</h4>
                                </a></li>
                        </ul>
                        <nav>
                            <a href="#">Shoes</a>
                            <a href="#">Accessories</a>
                            <a href="#">Watches</a>
                            <a href="#">Bags</a>
                        </nav>
                    </div>

                </div>
                <br />
            </div>

        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-3">
                <div>
                    <a href="#" class="list-group-item active">Electronics
                    </a>
                    <ul class="list-group">

                        <li class="list-group-item">Mobile
                            <span class="label label-primary pull-right">234</span>
                        </li>
                        <li class="list-group-item">Computers
                            <span class="label label-success pull-right">34</span>
                        </li>
                        <li class="list-group-item">Tablets
                            <span class="label label-danger pull-right">4</span>
                        </li>
                        <li class="list-group-item">Appliances
                            <span class="label label-info pull-right">434</span>
                        </li>
                        <li class="list-group-item">Games & Entertainment
                            <span class="label label-success pull-right">34</span>
                        </li>
                    </ul>
                </div>
                <!-- /.div -->
                <div>
                    <a href="#" class="list-group-item active list-group-item-success">Clothing & Wears
                    </a>
                    <ul class="list-group">

                        <li class="list-group-item">Men's Clothing
                            <span class="label label-danger pull-right">300</span>
                        </li>
                        <li class="list-group-item">Women's Clothing
                            <span class="label label-success pull-right">340</span>
                        </li>
                        <li class="list-group-item">Kid's Wear
                            <span class="label label-info pull-right">735</span>
                        </li>

                    </ul>
                </div>
                <!-- /.div -->
                <div>
                    <a href="#" class="list-group-item active">Accessaries & Extras
                    </a>
                    <ul class="list-group">
                        <li class="list-group-item">Mobile Accessaries
                            <span class="label label-warning pull-right">456</span>
                        </li>
                        <li class="list-group-item">Men's Accessaries
                            <span class="label label-success pull-right">156</span>
                        </li>
                        <li class="list-group-item">Women's Accessaries
                            <span class="label label-info pull-right">400</span>
                        </li>
                        <li class="list-group-item">Kid's Accessaries
                            <span class="label label-primary pull-right">89</span>
                        </li>
                        <li class="list-group-item">Home Products
                            <span class="label label-danger pull-right">90</span>
                        </li>
                        <li class="list-group-item">Kitchen Products
                            <span class="label label-warning pull-right">567</span>
                        </li>
                    </ul>
                </div>
                <div class="well well-lg offer-box offer-colors">

                </div>
                <!-- /.div -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Electronics</li>
                    </ol>
                </div>
                <!-- /.div -->
                <div class="row">
                    <div class="btn-group alg-right-pad">
                        <button type="button" class="btn btn-default"><strong>1235  </strong>items</button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                Sort Products &nbsp;
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">By Price Low</a></li>
                                <li class="divider"></li>
                                <li><a href="#">By Price High</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="{{asset("storage/img/dummyimg.png")}}" alt="" />
                            <div class="caption">
                                <h3><a href="#">Samsung Galaxy </a></h3>
                                <p>Price : <strong>$ 3,45,900</strong>  </p>
                                <p> <a href="#" class="btn btn-primary" role="button">See Details</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="{{asset("storage/img/dummyimg.png")}}" alt="" />
                            <div class="caption">
                                <h3><a href="#">Samsung Galaxy </a></h3>
                                <p>Price : <strong>$ 3,45,900</strong>  </p>
                                <p> <a href="#" class="btn btn-primary" role="button">See Details</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="{{asset("storage/img/dummyimg.png")}}" alt="" />
                            <div class="caption">
                                <h3><a href="#">Samsung Galaxy </a></h3>
                                <p>Price : <strong>$ 3,45,900</strong>  </p>
                                <p> <a href="#" class="btn btn-primary" role="button">See Details</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <ul class="pagination alg-right-pad">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
                <!-- /.row -->
                <div>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Clothing</a></li>
                        <li class="active">Men's Clothing</li>
                    </ol>
                </div>
                <!-- /.div -->
                <div class="row">
                    <div class="btn-group alg-right-pad">
                        <button type="button" class="btn btn-default"><strong>3005  </strong>items</button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                Sort Products &nbsp;
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">By Price Low</a></li>
                                <li class="divider"></li>
                                <li><a href="#">By Price High</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="{{asset("storage/img/dummyimg.png")}}" alt="" />
                            <div class="caption">
                                <h3><a href="#">Samsung Galaxy </a></h3>
                                <p>Price : <strong>$ 3,45,900</strong>  </p>
                                <p>
                                    <a href="#" class="btn btn-primary" role="button">See Details</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="{{asset("storage/img/dummyimg.png")}}" alt="" />
                            <div class="caption">
                                <h3><a href="#">Samsung Galaxy </a></h3>
                                <p>Price : <strong>$ 3,45,900</strong>  </p>
                                <p> <a href="#" class="btn btn-primary" role="button">See Details</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="{{asset("storage/img/dummyimg.png")}}" alt="" />
                            <div class="caption">
                                <h3><a href="#">Samsung Galaxy </a></h3>
                                <p>Price : <strong>$ 3,45,900</strong>  </p>
                                <p><a href="#" class="btn btn-primary" role="button">See Details</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <ul class="pagination alg-right-pad">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
                <!-- /.row -->
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
                <strong>Our Location</strong>
                <hr>
                <p>
                    Praia, Santiago,<br />
                    Achada Sao Filipe, Praia<br />
                    Call: 9923414<br>
                    Email: adiliagomes@hotmail.com<br>
                </p>

            </div>
            <div class="col-md-4 social-box">
                <strong>We are Social </strong>
                <hr>
                <a href="https://www.facebook.com/adilia.gomes.98"><i class="fa fa-facebook-square fa-3x "></i></a>
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

    <script>
        $(function () {

            $('#mi-slider').catslider();

        });
    </script>
@stop
