@extends('template')


@section('contenido')


    <!-- CONTENIDO -->
    <div id='page-wrapper'>

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h1 class="header-text fadeInLeftBig">Asignaciones</h1>
                </div>

            </div>

            <br>


            <div class="row">

                <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <label for="basic" class="col-lg-2 control-label">Usuario:</label>

                    <div class="col-lg-10">
                        <select id="basic" class="selectpicker show-tick form-control" data-live-search="true">

                            <option data-subtext="Auxiliar Sistemas" >Mario Alejandro Bustos Jimenez </option>
                            <option data-subtext=" Soporte Tecnico" >Anahi Martinez Martinez </option>
                            <option data-subtext="Auxiliar Sistemas" >Mario Alejandro Bustos Jimenez </option>
                            <option data-subtext=" Soporte Tecnico" >Anahi Martinez Martinez </option>
                            <option data-subtext="Auxiliar Sistemas" >Mario Alejandro Bustos Jimenez </option>

                        </select>

                    </div>
                </div>

                <br>
                <br>

                <div class="form-group">

                    <label for="basic" class="col-lg-2 control-label">Equipo:</label>

                    <div class="col-lg-10">
                        <select id="basic" class="selectpicker show-tick form-control" data-live-search="true">

                            <option data-subtext="modelo 90129h" >LAP-0434</option>
                            <option data-subtext="modelo 1234" >PC-111</option>
                            <option data-subtext="modelo 90129h" >LAP-0434</option>
                            <option data-subtext="modelo 1234" >PC-111</option>

                        </select>

                    </div>

                </div>

                <div class="form-group">


                <div class="col-md-4 pull-right" id="btn_nuevo">
                    <br>
                    <button  class="btn btn-block btn-lg btn-info" ><i class="ace-icon fa fa-check"></i>&nbsp;Asignar </button>
                </div>

                </div>

                </div>


                <div class="col-lg-6 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-user fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-left">
                                <div class="huge">No Empleado:123</div>
                                <div>Nombre:Mario Alejandro Bustos Jimenez</div>
                                <div>Puesto:Auxiliar Sistemas</div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="col-xs-3">
                            <i class="fa fa-laptop fa-2x"></i>
                        </div>
                        <div class="col-xs-9 text-left">
                            <div class="huge">Modelo:hjv1jv21</div>
                            <div>Marca:DELL
                                <a href="#">
                                    <span class="pull-right">   <i class="fa fa-arrow-circle-right"></i></span>
                                </a>

                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>


                </div>


<br>

                <div class="col-lg-12 col-md-12 col-xs-12 js-content">
                    <div class="docs-table">

                        @include('asignaciones.partials.table')

                    </div>
                </div>
            </div>




        </div>

        @include('asignaciones.create')
        @include('asignaciones.edit')

    </div>
















    <script>
        $("#btn_nuevo").click(

                function(){
            $("#modal_crear_equipo").modal("show");

            $("#collapseOne-edit").attr("id", "collapseOne");
            $("#collapseTwo-edit").attr("id", "collapseTwo");
            $("#collapseThree-edit").attr("id", "collapseThree");



        });

        $("#btn_editar").click(function(){


        });


        $(document).ready(function(){
            // $("#modal_crear_equipo").modal("show");

        });




    </script>


@stop