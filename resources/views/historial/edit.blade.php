
@section('content')
    {!! Form::model($equipos, ['route'  => ['equipos.update'],'method' => 'PUT' ])  !!}

    <div class="modal fade" id="modal_editar_equipo"  role="document" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"> <i class="ace-icon fa fa-pencil-square-o"></i>&nbsp; Editar Equipo</h4>
                </div>

                <div class="modal-body">

                    <div class="container-fluid">


                        <div class="widget-body">
                            <div class="widget-main">

                                @include('equipos.partials.fields')


                            </div>

                        </div>


                    </div>
                    <hr>

                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar &nbsp; <i class="fa fa-times"></i></button>
                    <button type="submit" class="btn btn-primary">Guardar Cambios &nbsp; <i class="fa fa-check"></i></button>

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    {!! Form::close()  !!}



@show