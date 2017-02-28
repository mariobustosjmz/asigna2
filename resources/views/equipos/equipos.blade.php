@extends('template')

@section('contenido')

    <!-- CONTENIDO -->
    <div id='page-wrapper'>

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h1 class="header-text fadeInLeftBig">Equipos</h1>
                </div>

            </div>

            <br>


            <div class="row">


            <div class="col-xs-3" id="btn_nuevo">
            <button  class="btn btn-block btn-lg btn-primary" ><i class="ace-icon fa fa-laptop"></i>&nbsp;Nuevo Equipo </button>
        </div>

        <div class="col-xs-3" id="btn_editar" style="display:none">
            <button  class="btn btn-block btn-lg btn-info"  >Editar </button>
        </div>

                <div class="col-lg-12 col-md-12 col-xs-12 js-content">
                    <div class="docs-table">

                        @include('equipos.partials.table')

                    </div>
                </div>
            </div>

        </div>

        @include('equipos.create')
        @include('equipos.edit')

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