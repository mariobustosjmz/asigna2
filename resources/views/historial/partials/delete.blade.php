{{--
{!! Form::open( ['route'  => ['usuarios.destroy',$user->id],'method' => 'DELETE' ])  !!}
--}}

<button type="submit"
        onclick="return confirm('Seguro que desea eliminar?')"
        class="btn btn-danger">Eliminar Usuario
</button>


{!! Form::close()  !!}
