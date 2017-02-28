@extends('template')


@section('contenido')


    <!-- CONTENIDO -->
    <div id='page-wrapper'>

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h1 class="header-text fadeInLeftBig">Usuarios</h1>
                </div>

            </div>

            <br>


            <div class="row">

                <div class="col-xs-3 " id="btn_nuevo">
                    <button  class="btn btn-block btn-lg btn-primary" ><i class="ace-icon fa fa-user-plus"></i>&nbsp;Nuevo Usuario </button>
                </div>

                <div class="col-xs-3" id="btn_editar" style="display:none;">
                    <button  class="btn btn-block btn-lg btn-info"  >Editar </button>
                </div>

                <div class="col-lg-12 col-md-12 col-xs-12 js-content">
                    <div class="docs-table">

                        @include('usuarios.partials.table')

                    </div>
                </div>
            </div>

        </div>

        @include('usuarios.create')
        @include('usuarios.edit')


        </div>
    </div>



    <script>

        $(document).ready(function() {


            {{--   if ($('#modal_crear_user').is(':visible')) {
                console.log("true");

                $("#collapseOne").attr("id", "collapseOne-edit");
                $("#collapseTwo").attr("id", "collapseTwo-edit");
                $("#collapseThree").attr("id", "collapseThree-edit");

            } else {
                $("#collapseOne-edit").attr("id", "collapseOne");
                $("#collapseTwo-edit").attr("id", "collapseTwo");
                $("#collapseThree-edit").attr("id", "collapseThree");

            }
       --}}








            $("#btn_nuevo").click( function(){
                $("#modal_crear_user").modal("show");

                $("#collapseOne-edit").attr("id", "collapseOne");
                $("#collapseTwo-edit").attr("id", "collapseTwo");
                $("#collapseThree-edit").attr("id", "collapseThree");



            });

            $("#btn_editar").click(function(){
                $("#modal_editar_user").modal("show");

                $("#collapseOne").attr("id", "collapseOne-edit");
                $("#collapseTwo").attr("id", "collapseTwo-edit");
                $("#collapseThree").attr("id", "collapseThree-edit");

            });


        });




    </script>


@stop