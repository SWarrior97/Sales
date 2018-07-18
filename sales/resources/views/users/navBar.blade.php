<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sales</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="css/navBar.css" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>



    <span style="cursor:pointer" onclick="openNav()">&#9776; open</span>

        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="{{ route('gerir.produtos') }}">Gestao Produtos</a>
            <a href="">Gestao Categorias</a>
            <a href="">Interesses</a>
        </div>

    <script>
        function openNav() {
            if(document.getElementById("mySidenav").style.width == "250px"){
                document.getElementById("mySidenav").style.width = "0";
            }else{
                document.getElementById("mySidenav").style.width = "250px";
            }
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    </body>
</html>
