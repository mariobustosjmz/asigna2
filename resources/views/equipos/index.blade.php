@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Usuarios</div>

                    @if (Session::has('message'))
                        <p class="alert alert-success">
                            {{Session::get('message') }}

                        </p>
                    @endif










                    <div class="panel-body">


                            {!! Form::model(Request::only(['name','type']), ['route'  =>'admin.users.index','method' => 'GET' ,'class' =>'navbar-form navbar-left pull-right','role'=>'search'])  !!}


                            <div class="form-group">

                                {!! Form::text('nombre',null, ['class'=>'form-control','placeholder'=>'Nombre de Usuario'] )!!}
                                {!! Form::select('type', config('options.types')   ,null, ['class'=>'form-control'] )!!}


                            </div>
                            <button type="submit" class="btn -btn-default" >Buscar</button>

                        {!! Form::close()  !!}




                    <p>
                            <a href=" {{route('admin.users.create')  }}" type="button" class="btn btn-info">Nuevo Usuario</a>
                        </p>



                        <p> {!!  $users->total() !!} Registros</p>

                        @include('admin.users.partials.table')
                        <td> {!!  $users->appends(Request::all())->render() !!}</td>


                    </div>





                </div>
            </div>
        </div>
        {!! Form::open( ['route'  => ['admin.users.destroy',':USER_ID'],'method' => 'DELETE' ,'id' =>'form-delete'])  !!}

        {!! Form::close()  !!}
    </div>




@endsection

@section('scripts')
    <script src="http://code.jquery.com/jquery-1.6.1.min.js " ></script>
<script>

 $('.btn-delete').click(function(e) {

     e.preventDefault();
     alert("ok");
var row=$(this).parents('tr');
var id=row.data('id');
var form=$('#form-delete');

    var url=form.attr('action').replace(':USER_ID',id);
    //alert(url);
    var data=form.serialize();
    //alert(data);


     $.post(url,data,function(result) {
         row.fadeOut();
         alert(result.message);

     }).fail(function(){
        alert("error, el usuario no fue eliminado");
                  row.show();

     });


});

</script>
@endsection