@extends('app')

@section('header')


    <nav id="header" class=" navbar-inverse  navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <i class="fa fa-laptop fa-1x"></i>
                    Asigna2   </a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#"><i class="fa fa-chevron-right "></i>&nbsp;Mario Bustos  <span class="sr-only">(current)</span></a></li>
                <li><a href="#"><i class="fa fa-power-off"></i>
                    </a></li>
            </ul>
        </div>

      </nav>

@endsection


@section('inicio')

        <div class="row">

            <div id="contenido">
                <div class="row">


                    <table id="table"
                           data-toolbar="#toolbar"
                           data-search="true"
                           data-show-refresh="true"
                           data-show-toggle="true"
                           data-show-columns="true"
                           data-show-export="true"
                           data-detail-view="true"
                           data-detail-formatter="detailFormatter"
                           data-minimum-count-columns="2"
                           data-show-pagination-switch="true"
                           data-pagination="true"
                           data-id-field="id"
                           data-page-list="[10, 25, 50, 100, ALL]"
                           data-show-footer="true"
                           data-side-pagination="server"
                           data-url="http://issues.wenzhixin.net.cn/examples/bootstrap_table/data"
                           data-response-handler="responseHandler">
                    </table>







                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">10</div>
                                        <div>Usuarios</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Registrar Nuevo </span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-laptop fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">13</div>
                                        <div>Equipos</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Registrar Nuevo</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">9</div>
                                        <div>Asignaciones</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Asignacion Nueva </span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>




                </div>




                <div class="table-responsive">

                    <div class="panel  ">
                        <div class="panel-heading palette-turquoise">
                            <h3 class="panel-title">Historial</h3>
                            <div class="pull-right">

                            </div>
                        </div>



                        <table id="mytable" class="table table-bordred table-hover table-striped">

                            <thead>

                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Edit</th>

                            <th>Delete</th>
                            </thead>
                            <tbody>

                            <tr>
                                <td>Mohsin</td>
                                <td>Irshad</td>
                                <td>Irshad</td>
                                <td>isometric.mohsin@gmail.com</td>
                                <td>+923335586757</td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                            </tr>

                            <tr>
                                <td>Mohsin</td>
                                <td>Irshad</td>
                                <td>Irshad</td>
                                <td>isometric.mohsin@gmail.com</td>
                                <td>+923335586757</td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                            </tr>


                            <tr>
                                <td>Mohsin</td>
                                <td>Irshad</td>
                                <td>Irshad</td>
                                <td>isometric.mohsin@gmail.com</td>
                                <td>+923335586757</td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                            </tr>



                            </tbody>
                        </table>
                    </div>

                    <!-- /.table-responsive -->
                </div>
                <!-- /.col-lg-4 (nested) -->



<br>



                <div class="panel panel-default">
                    <div class="panel-heading">Test</div>

                    <button class="btn btn-success">
                        btn-success
                    </button>
                    <button class="btn btn-info">
                        btn-info
                    </button>
                    <button class="btn btn-warning">
                        boton
                    </button>

                    <button class="btn btn-primary">
                        btn-primary
                    </button>
                    <button class="btn btn-default">
                        btn-default
                    </button>
                    <button class="btn btn-danger">
                        btn-danger
                    </button>

                    <button class="btn btn-inverse">
                        btn-inverse
                    </button>
                    <button class="btn btn-error">
                        btn-error
                    </button>
                    <button class="btn btn-red has-error">
                        btn-red
                    </button>

                    <button class="btn palette-belize-hole">
                        btn-red
                    </button>

                    <br>
                    <hr>

                    <div class="form-group has-success">
                        <input type="text" value="Success" class="form-control">
                        <span class="input-icon fui-check-inverted"></span>
                    </div>

                    <div class="form-group has-warning">
                        <input type="text" value="Success" class="form-control">
                        <span class="input-icon fui-check-inverted"></span>
                    </div>

                    <div class="form-group has-error">
                        <input type="text" value="Success" class="form-control">
                        <span class="input-icon fui-check-inverted"></span>
                    </div>

                </div>

                <dl class="palette palette-belize-hole">
                    <dt>#2980b9</dt>
                    <dd>Belize hole</dd>
                </dl>

                <br>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Primary Panel
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                    </div>
                    <div class="panel-footer">
                        Panel Footer
                    </div>
                </div>



        </div>

    </div>


@endsection


@section('sidebar')

    <div class="container">
        <div id="wrapper">
                <!-- Sidebar -->
            <div class="navbar-inverse" id="sidebar-wrapper">
                <ul class="sidebar-nav fa-ui ">

                    <li class="sidebar-brand" id="imagen_empresa">
                        LOGO
                    </li>



                    <li>
                        <a class="" href="#">
                            <i class="fa fa-home "></i>&nbsp; Inicio</a>
                    </li>


                    <li>
                        <a class="" href="#">
                            <i class="fa fa-users "></i>&nbsp; Usuarios</a>
                    </li>


                    <li>
                        <a class="" href="#">
                            <i class="fa fa-laptop "></i>&nbsp; Equipos</a>
                    </li>


                    <li>
                        <a class="" href="#">
                            <i class="fa fa-exchange "></i>&nbsp; Asignaciones</a>
                    </li>


                    <li>
                        <a class="" href="#">
                            <i class="fa fa-file-text-o "></i>&nbsp; Historial</a>
                    </li>


                    <li>
                        <a class="" href="#">
                            <i class="fa fa-cog "></i>&nbsp; Configurar</a>
                    </li>





                </ul>


            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->

            @yield('inicio')




            <!-- /#page-content-wrapper -->


        </div>
        <!-- /#wrapper -->


    </div>




@endsection








@section('contenido')

    <div id="contenido">



        <!-- <div id="contenido">-->
        <div class="row">


            <table id="table"
                   data-toolbar="#toolbar"
                   data-search="true"
                   data-show-refresh="true"
                   data-show-toggle="true"
                   data-show-columns="true"
                   data-show-export="true"
                   data-detail-view="true"
                   data-detail-formatter="detailFormatter"
                   data-minimum-count-columns="2"
                   data-show-pagination-switch="true"
                   data-pagination="true"
                   data-id-field="id"
                   data-page-list="[10, 25, 50, 100, ALL]"
                   data-show-footer="true"
                   data-side-pagination="server"
                   data-url="http://issues.wenzhixin.net.cn/examples/bootstrap_table/data"
                   data-response-handler="responseHandler">
            </table>







            <div class="col-lg-4 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">10</div>
                                <div>Usuarios</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">Registrar Nuevo </span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>


            <div class="col-lg-4 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-laptop fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">13</div>
                                <div>Equipos</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">Registrar Nuevo</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>


            <div class="col-lg-4 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-shopping-cart fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">9</div>
                                <div>Asignaciones</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">Asignacion Nueva </span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>




        </div>

        <div class="table-responsive">


            <div class="panel  ">
                <div class="panel-heading palette-turquoise">
                    <h3 class="panel-title">Historial</h3>
                    <div class="pull-right">

                    </div>
                </div>



                <table id="mytable" class="table table-bordred table-hover table-striped">

                    <thead>

                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Edit</th>

                    <th>Delete</th>
                    </thead>
                    <tbody>

                    <tr>
                        <td>Mohsin</td>
                        <td>Irshad</td>
                        <td>Irshad</td>
                        <td>isometric.mohsin@gmail.com</td>
                        <td>+923335586757</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                    </tr>

                    <tr>
                        <td>Mohsin</td>
                        <td>Irshad</td>
                        <td>Irshad</td>
                        <td>isometric.mohsin@gmail.com</td>
                        <td>+923335586757</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                    </tr>


                    <tr>
                        <td>Mohsin</td>
                        <td>Irshad</td>
                        <td>Irshad</td>
                        <td>isometric.mohsin@gmail.com</td>
                        <td>+923335586757</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                    </tr>



                    </tbody>
                </table>
            </div>

            <!-- /.table-responsive -->
        </div>
        <!-- /.col-lg-4 (nested) -->

        <br>

        <div class="panel panel-default">
            <div class="panel-heading">Test</div>

            <button class="btn btn-success">
                btn-success
            </button>
            <button class="btn btn-info">
                btn-info
            </button>
            <button class="btn btn-warning">
                boton
            </button>

            <button class="btn btn-primary">
                btn-primary
            </button>
            <button class="btn btn-default">
                btn-default
            </button>
            <button class="btn btn-danger">
                btn-danger
            </button>

            <button class="btn btn-inverse">
                btn-inverse
            </button>
            <button class="btn btn-error">
                btn-error
            </button>
            <button class="btn btn-red has-error">
                btn-red
            </button>

            <button class="btn palette-belize-hole">
                btn-red
            </button>

            <br>
            <hr>

            <div class="form-group has-success">
                <input type="text" value="Success" class="form-control">
                <span class="input-icon fui-check-inverted"></span>
            </div>

            <div class="form-group has-warning">
                <input type="text" value="Success" class="form-control">
                <span class="input-icon fui-check-inverted"></span>
            </div>

            <div class="form-group has-error">
                <input type="text" value="Success" class="form-control">
                <span class="input-icon fui-check-inverted"></span>
            </div>

        </div>

        <dl class="palette palette-belize-hole">
            <dt>#2980b9</dt>
            <dd>Belize hole</dd>
        </dl>

        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">
                Primary Panel
            </div>
            <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
            </div>
            <div class="panel-footer">
                Panel Footer
            </div>
        </div>


    </div>



@endsection

