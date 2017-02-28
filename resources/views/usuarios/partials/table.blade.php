  <div class="docs-table">


            <table id="tabla-clientes" class="table-no-bordered" id="eventsTable"
                   data-toggle="table"
                   data-strictSearch="true"
                   data-show-header="true"
                   data-show-columns="true"
                   data-show-refresh="true"
                   data-smartDisplay="true"
                   data-url="http://asigna2/usuarios_json"
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
                            data-field="id_usuario"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            data-visible="false"
                            >ID
                    </th>
                    <th
                            data-field="no_empleado"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            data-visible="false"
                            >No. Empleado
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
                            >Apellido

                    </th>

                    <th
                            data-field="departamento"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            >Departamento
                    </th>

                    <th
                            data-field="puesto"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            >Puesto
                    </th>

                    <th
                            data-field="usuario_dominio"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            >Dominio
                    </th>
                    <th
                            data-field="created_at"
                            data-sortable="name"
                            data-valign="middle"
                            data-align="center"
                            data-visible="false"

                            >Creado
                    </th>




                    <th data-field="operate"
                        data-formatter="accion_formato"
                        data-events="accion_eventos">Acciones</th>


                </tr>

                </thead>


            </table>





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
console.log(value, row.id_usuario, index);
    $("#collapseOne").attr("id", "collapseOne-edit");
    $("#collapseTwo").attr("id", "collapseTwo-edit");
    $("#collapseThree").attr("id", "collapseThree-edit");

$("#modal_editar_user").modal("show");
},
'click .borrar': function (e, value, row, index) {

console.log(row.nombre); //abrir ese pdf

}


};






</script>



















{{-- <table id="usuarios" class="table table-bordred table-hover table-striped">

    <thead>

    <th>Nombre</th>
    <th>Apellido</th>
    <th>Departamento</th>
    <th>Puesto</th>
    <th>Dominio</th>
    <th>Acciones</th>
    </thead>
    <tbody>

    @foreach($usuarios as $usu)
        <tr data-id="{{ $usu->id_usuario }}">
            <td>{{ $usu->nombres  }}</td>
            <td>{{ $usu->apellidos  }}</td>
            <td>{{ $usu->departamento  }}</td>
            <td>{{ $usu->puesto  }}</td>
            <td>{{ $usu->usuario_dominio  }}</td>
            <td>

                <a href="{{route('usuarios.edit',$usu->id_usuario)  }}">
                    <button class="btn btn-info btn-xs">
                            <span class="fa fa-pencil-square-o">
                            </span>
                    </button>
                </a>
                <a href="{{route('usuarios.edit',$usu->id_usuario)  }}">
                    <button class="btn btn-danger btn-xs">
                            <span class="fa fa-trash-o">
                            </span>
                    </button>
                </a>

            </td>
        </tr>
    @endforeach


    </tbody>
</table> --}}



