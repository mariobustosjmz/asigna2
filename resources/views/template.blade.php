<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    {!! Html::style('assets/css/vendor/bootstrap.min.css') !!}
    {!! Html::style('assets/css/bootstrap-switch.min.css') !!}
    {!! Html::style('assets/css/bootstrap.css') !!} {{-- --}}

    {!! Html::style('assets/css/flat-ui.css') !!}
    {!! Html::style('assets/css/style.css') !!}

    {!! Html::style('assets/css/bootstrap-table.css') !!}
    {!! Html::style('assets/css/bootstrap-select.css') !!}

    {!! Html::script('assets/js/vendor/jquery.min.js') !!}


    {!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') !!}

    <!-- Latest compiled and minified CSS -->
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>



<html>
<body>
<div id='wrapper'><!-- TODO-->


@section('header')





    <nav class='navbar navbar-inverse navbar-fixed-top' role='navigation'>

        <div class='navbar-header'>
            <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-hamburger-delicious'>
                <span class='sr-only'>Toggle navigation</span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
            </button>
            <a class='navbar-brand' >
                <i class="fa fa-laptop fa-1x"></i>&nbsp; Asigna2

            </a>
        </div>

        <div class='collapse navbar-collapse navbar-hamburger-delicious'>


                <ul class='nav navbar-nav side-nav fadeInLeft' id="sidebar">

                <li class='toggle-nav visible-lg visible-md visible-sm text-center '>
                    <a>
                        <i class='fa fa-lg fa-arrow-left '></i>
                        &nbsp;&nbsp;
                    </a>
                </li>




                    <li class="sidebar-brand" id="imagen_empresa">
                        LOGO
                    </li>


                <li  title="Inicio">
                    <a class="sidebar" href="{{ route('home', 1) }}">
                        <i class="fa fa-home fa-2x "></i>&nbsp; &nbsp; INICIO</a>
                </li>


                <li>
                    <a class="sidebar" href="{{ route('usuarios') }}">
                        <i class="fa fa-users fa-2x "></i>&nbsp; &nbsp; USUARIOS</a>
                </li>


                <li>
                    <a class="sidebar" href="{{ route('equipos') }}">
                        <i class="fa fa-laptop fa-2x "></i>&nbsp; &nbsp; EQUIPOS</a>
                </li>


                <li>
                    <a class="sidebar" href="{{ route('asignaciones') }}">
                        <i class="fa fa-exchange fa-2x "></i>&nbsp; &nbsp; ASIGNACIONES</a>
                </li>


                <li>
                    <a class="sidebar" href="{{ route('historial') }}">
                        <i class="fa fa-file-text-o fa-2x "></i>&nbsp; &nbsp;  HISTORIAL</a>
                </li>


                    <li>
                        <a class="sidebar" href="{{ route('ajustes') }}">
                            <i class="fa fa-cog fa-2x "></i>&nbsp; &nbsp; AJUSTES</a>
                    </li>



                    <li id="test">
&nbsp;                    </li>



            </ul>


            <ul class='nav navbar-nav navbar-right navbar-user'>
                <li class='dropdown user-dropdown active'>
                    <a href='#' class='dropdown-toggle' data-toggle='dropdown'>
                        <span class="js-user-name">
                            <i class="fa fa-chevron-right "></i>Mario Bustos Jmz</span>
                        <b class='caret'></b>
                    </a>

                    <ul class='dropdown-menu'>
                        <li class='settings'>
                            <a href='#settings'>
                                <i class='fa fa-lg fa-gear'></i> Settings
                            </a></li>
                    </ul>

                </li>


                <li>
                    <a href="#">
                        <i class="fa fa-power-off"></i>
                    </a>
                </li>



            </ul>


        </div>


    </nav>





@show





    @section('contenido')


        <!-- CONTENIDO -->
        <div id='page-wrapper'>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h1 class="header-text fadeInLeftBig">sdsd</h1>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 js-content">
                        <div class="docs-table">

                            <table data-toggle="table" data-show-toggle="true" data-show-columns="true" data-search="true" data-striped="true">
                                <thead>
                                <tr>
                                    <th data-field="Type">Type</th>
                                    <th data-field="Name">Name</th>
                                    <th data-field="Description">Description</th>
                                    <th data-field="Tags">Tags</th>
                                    <th data-field="LastViewed">Last Viewed</th>
                                    <th data-field="Expiration">Expiration</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><i class="fa fa-file-excel-o"></i></td>
                                    <td>Remaining Tasks for this app</td>
                                    <td>This is a list of all the remaining tasks required to complete this app</td>
                                    <td>Responsive, RWD</td>
                                    <td>an hour ago</td>
                                    <td>Sep 08, 2015</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-file-powerpoint-o"></i></td>
                                    <td>EVAMs presentation</td>
                                    <td>This is presentation for the EVAM occuring later this month</td>
                                    <td>EVAM</td>
                                    <td>a day ago</td>
                                    <td>Sep 13, 2015</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-file-word-o"></i></td>
                                    <td>Xmas Party list</td>
                                    <td>List of all the people who will be attending the holiday party</td>
                                    <td>list</td>
                                    <td>a few mins ago</td>
                                    <td>Dec 25, 2015</td>
                                </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>



            </div>

        </div>
        <!-- END CONTENIDO-->

    @show




    @section('main')


        <!-- CONTENIDO -->
        <div id='page-wrapper'>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h1 class="header-text fadeInLeftBig">sdsd</h1>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 js-content">
                        <div class="docs-table">
                            <table data-toggle="table" data-show-toggle="true" data-show-columns="true" data-search="true" data-striped="true">
                                <thead>
                                <tr>
                                    <th data-field="Type">Type</th>
                                    <th data-field="Name">Name</th>
                                    <th data-field="Description">Description</th>
                                    <th data-field="Tags">Tags</th>
                                    <th data-field="LastViewed">Last Viewed</th>
                                    <th data-field="Expiration">Expiration</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><i class="fa fa-file-excel-o"></i></td>
                                    <td>Remaining Tasks for this app</td>
                                    <td>This is a list of all the remaining tasks required to complete this app</td>
                                    <td>Responsive, RWD</td>
                                    <td>an hour ago</td>
                                    <td>Sep 08, 2015</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-file-powerpoint-o"></i></td>
                                    <td>EVAMs presentation</td>
                                    <td>This is presentation for the EVAM occuring later this month</td>
                                    <td>EVAM</td>
                                    <td>a day ago</td>
                                    <td>Sep 13, 2015</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-file-word-o"></i></td>
                                    <td>Xmas Party list</td>
                                    <td>List of all the people who will be attending the holiday party</td>
                                    <td>list</td>
                                    <td>a few mins ago</td>
                                    <td>Dec 25, 2015</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



            </div>

        </div>
        <!-- END CONTENIDO-->

    @endsection








</div> <!-- tpdp>

</body>
</html>






<!-- Scripts -->

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/4579/bootstrap.min.js'></script>

{!! Html::script('assets/js/bootstrap.min.js') !!}
{!! Html::script('assets/js/bootstrap-switch.min.js') !!}
{!! Html::script('assets/js/vendor/video.js') !!}
{!! Html::script('assets/js/flat-ui.min.js') !!}
{!! Html::script('assets/js/index.js') !!}
{!! Html::script('assets/docs/assets/js/application.js') !!}

{!! Html::script('assets/js/bootstrap-table.js') !!}
{!! Html::script('assets/js/bootstrap-table-es-MX.js') !!}

{!! Html::script('assets/js/bootstrap-select.js') !!}

{!! Html::script('assets/js/side.js') !!}


<!-- Latest compiled and minified JavaScript -->
<!-- Latest compiled and minified Locales -->


</html>