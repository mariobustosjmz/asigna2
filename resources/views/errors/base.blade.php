
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





            <!-- /#page-content-wrapper -->


        </div>
        <!-- /#wrapper -->


    </div>




@endsection

