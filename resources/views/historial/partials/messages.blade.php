@if($errors->any())
    <div class="alert alert-danger" role="alert">

        <p>Porfavor Corriga los Errores:</p>

        <ul>
            {{--  @foreach($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach --}}
        </ul>
    </div>
@endif
