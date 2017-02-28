

<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12 js-content">
        <div class="docs-table">


            <table id="tabla-clientes" class="table-no-bordered" id="eventsTable"
                   data-toggle="table"
                   data-strictSearch="true"
                   data-show-header="true"
                   data-show-columns="true"
                   data-show-refresh="true"
                   data-smartDisplay="true"
                   data-url="http://asigna2/asignaciones_json"
                   data-trimOnSearch="true"
                   data-clickToSelect="true"
                   data-singleSelect="true"
                   data-search="true"
                   data-sortable="true"
                   data-maintainSelected="true"
                   data-toolbar="#toolbar"
                   data-show-toggle="true"
                   data-striped="true"

                    >
                <thead>
                <tr>

                    <th
                            data-field="id_asignacion"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            data-visible="false"
                            >Id Asignacion
                    </th>
                    <th
                            data-field="id_usuario"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            data-visible="false"
                            >Id Usuario
                    </th>
                    <th
                            data-field="no_empleado"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            data-visible="true"
                            >No.Empleado
                    </th>

                    <th
                            data-field="nombres"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            data-visible="true"
                            >Nombre
                    </th>

                    <th
                            data-field="apellidos"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            data-visible="true"
                            >Apellidos
                    </th>
                    <th
                            data-field="red_local"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            data-visible="false"
                            >Red Local
                    </th>
                    <th
                            data-field="red_inalambrica"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            data-visible="false"
                            >Red Inalambrica
                    </th>

                    <th
                            data-field="usuario_dominio"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            data-visible="true"
                            >Usuario Dominio
                    </th>
                    <th
                            data-field="usuario_local"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            data-visible="false"
                            >Usuario Local
                    </th>

                    <th
                            data-field="correo_outlook"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            data-visible="false"
                            >Outlook
                    </th>


                    <th
                            data-field="usuario_modificacion"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            data-visible="false"
                            >Ultima Modificacion Usuario
                    </th>

                    <th
                            data-field="id_equipo"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            data-visible="false"
                            >ID Equipo
                    </th>
                    <th
                            data-field="nombre_equipo"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            data-visible="true"
                            >Nombre Equipo
                    </th>

                    <th
                            data-field="marca"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            data-visible="true"
                            >Marca
                    </th>

                    <th
                            data-field="modelo"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            data-visible="true"
                            >Modelo
                    </th>
                    <th
                            data-field="s_n"
                            data-sortable="name"
                            data-valign="middle"
                            data-valign="middle"
                            data-align="center"
                            data-visible="false"
                            >S_N
                    </th>
                    <th
                            data-field="s_tag"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            data-visible="false"
                            >S_Tag
                    </th>

                    <th
                            data-field="descripcion"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            data-visible="false"
                            >Descripcion
                    </th>
                    <th
                            data-field="ram"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            data-visible="true"
                            >RAM
                    </th>
                    <th
                            data-field="disco_duro"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            data-visible="true"
                            >Disco Duro
                    </th>

                    <th
                            data-field="procesador"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            data-visible="false"
                            >Procesador
                    </th>
                    <th
                            data-field="so"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            data-visible="true"
                            >S.O
                    </th>
                    <th
                            data-field="paqueteria"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            data-visible="false"
                            >Paqueteria
                    </th>
                    <th
                            data-field="antivirus"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            data-visible="false"
                            >Antivirus
                    </th>


                    <th
                            data-field="equipo_modificacion"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            data-visible="false"
                            >Ultima Modificacion Equipo
                    </th>








                    <th data-field="operate"
                        data-formatter="accion_formato"
                        data-events="accion_eventos">Acciones</th>


                </tr>

                </thead>


            </table>





        </div>
    </div>
</div>








<script>




    //botones-tabla
    function accion_formato(value, row, index) {
        return [


            '<button   class="editar btn btn-xs btn-info" title="Editar">',
            '<i class="ace-icon fa fa-pencil bigger-150"></i>',
            '</button> ',


            ,
            '<button  class="borrar btn btn-xs btn-danger" title="Eliminar">',
            '<i class="ace-icon fa fa-trash-o bigger-150"></i>',
            '</button> '

        ].join('');
    }

    //eventos Tabla
    window.accion_eventos = {
        'click  .editar': function (e, value, row, index) {

            console.log(value, row.id_equipo, index);



            $("#collapseOne").attr("id", "collapseOne-edit");
            $("#collapseTwo").attr("id", "collapseTwo-edit");
            $("#collapseThree").attr("id", "collapseThree-edit");
            $("#modal_editar_equipo").modal("show");


        },
        'click .borrar': function (e, value, row, index) {

            console.log(row.nombre); //abrir ese pdf

        }


    };






</script>








{{--

<table id="asignaciones" class="table table-bordred table-hover table-striped">

    <thead>

    <th>ID</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>S_N</th>
    <th>S_Tag</th>
    <th>D. D.</th>
    <th>Procesador</th>
    <th>Acciones</th>
    </thead>
    <tbody>

    @foreach($asignaciones as $equ)
        <tr data-id="{{ $equ->id_equipo }}">
            <td>{{ $equ->nombre  }}</td>
            <td>{{ $equ->marca  }}</td>
            <td>{{ $equ->modelo  }}</td>
            <td>{{ $equ->s_n  }}</td>
            <td>{{ $equ->s_tag  }}</td>
            <td>{{ $equ->disco_duro  }}</td>
            <td>{{ $equ->procesador  }}</td>
            <td>

                <a href="{{route('asignaciones.edit',$equ->id_equipo)  }}">
                    <button class="btn btn-info btn-xs">
                            <span class="fa fa-pencil-square-o">
                            </span>
                    </button>
                </a>
                <a href="{{route('asignaciones.edit',$equ->id_equipo)  }}">
                    <button class="btn btn-danger btn-xs">
                            <span class="fa fa-trash-o">
                            </span>
                    </button>
                </a>

            </td>
        </tr>
    @endforeach


    </tbody>
</table>


--}}