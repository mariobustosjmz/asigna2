@extends('app')


@section('sidebar')



@section('contenido')

    <div id="contenido">
        <h3>Usuarios</h3>

        <div class="col-xs-3" id="btn_nuevo">
            <button  class="btn btn-block btn-lg btn-primary" ><i class="ace-icon fa fa-user-plus"></i>&nbsp;Nuevo Usuario </button>
        </div>

        <div class="col-xs-3" id="btn_editar" style="display:none;">
            <button  class="btn btn-block btn-lg btn-info"  >Editar </button>
        </div>

        <br><br>

        @include('usuarios.partials.table')



    </div>

        @include('usuarios.create')
        @include('usuarios.edit')

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