<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                   aria-expanded="true" aria-controls="collapseOne">
                    Usuario

                </a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">


                {{-- <div class="col-md-12">
                     <div class="header blue bolder smaller">
                         <h4>Contacto</h4>
                     </div>
                 </div>
                 --}}



                <div class="col-md-6">
                    <div class="form-group">

                        {!! Form::label('nombres','Nombres') !!}

                        <div class="input-group">
           <span class="input-group-addon">
               <i class="ace-icon fa fa-phone"></i>
           </span>

                            {!! Form::text('nombres',null, ['class' => 'form-control' ,'placeholder'=>'Introduzca su Nombre(s)
                            ' ]) !!}
                        </div>


                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">

                        {!! Form::label('apellidos','Apellidos') !!}

                        <div class="input-group">
           <span class="input-group-addon">
               <i class="ace-icon fa fa-phone"></i>
           </span>

                            {!! Form::text('apellidos',null, ['class' => 'form-control' ,'placeholder'=>'Introduzca su Apellido
                            ' ]) !!}
                        </div>


                    </div>
                </div>


                <div class="col-md-4">
                    <div class="form-group">

                        {!! Form::label('no_empleado','No. Empleado') !!}

                        <div class="input-group">
                               <span class="input-group-addon">
                                   <i class="ace-icon fa fa-phone"></i>
                               </span>

                            {!! Form::text('no_empleado',null, ['class' => 'form-control' ,'placeholder'=>'Introduzca su No. Empleado
                            ' ]) !!}
                        </div>


                    </div>
                </div>





                <div class="col-md-4">
                    <div class="form-group">

                        {!! Form::label('departamento','Departamento') !!}

                        <div class="input-group">
           <span class="input-group-addon">
               <i class="ace-icon fa fa-phone"></i>
           </span>

                            {!! Form::text('departamento',null, ['class' => 'form-control' ,'placeholder'=>'Introduzca su Departamento
                            ' ]) !!}
                        </div>


                    </div>
                </div>


                <div class="col-md-4">
                    <div class="form-group">

                        {!! Form::label('puesto','Puesto') !!}

                        <div class="input-group">
           <span class="input-group-addon">
               <i class="ace-icon fa fa-phone"></i>
           </span>

                            {!! Form::text('puesto',null, ['class' => 'form-control' ,'placeholder'=>'Introduzca su Puesto
                            ' ]) !!}
                        </div>


                    </div>
                </div>




            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                   aria-expanded="false" aria-controls="collapseTwo">
                    Red

                </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">

                <div class="col-md-6">
                    <div class="form-group">

                        {!! Form::label('red_local','Red Local') !!}

                        <div class="input-group">
                               <span class="input-group-addon">
                                   <i class="ace-icon fa fa-phone"></i>
                               </span>

                            {!! Form::text('red_local',null, ['class' => 'form-control' ,'placeholder'=>'Mac Address Red Local
                            ' ]) !!}
                        </div>


                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">

                        {!! Form::label('red_inalambrica','Red Inalambrica') !!}

                        <div class="input-group">
           <span class="input-group-addon">
               <i class="ace-icon fa fa-phone"></i>
           </span>

                            {!! Form::text('red_inalambrica',null, ['class' => 'form-control' ,'placeholder'=>'Mac Address Red Inalambrica
                            ' ]) !!}
                        </div>


                    </div>
                </div>



            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                   aria-expanded="false" aria-controls="collapseThree">
                    Cuentas
                </a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">

                <div class="col-md-12">
                    <div class="header blue bolder smaller">
                        <h6>Dominio CFV</h6>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">

                        {!! Form::label('usuario_cfv','Usuario') !!}

                        <div class="input-group">
                               <span class="input-group-addon">
                                   <i class="ace-icon fa fa-phone"></i>
                               </span>

                            {!! Form::text('usuario_cfv',null, ['class' => 'form-control' ,'placeholder'=>'Introduzca el Usuario
                            ' ]) !!}
                        </div>


                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">

                        {!! Form::label('pass_cfv','Contraseña') !!}

                        <div class="input-group">
           <span class="input-group-addon">
               <i class="ace-icon fa fa-phone"></i>
           </span>

                            {!! Form::text('pass_cfv',null, ['class' => 'form-control' ,'placeholder'=>'Introduzca la Contraseña
                            ' ]) !!}
                        </div>


                    </div>
                </div>

                <div class="col-md-12">
                    <div class="header blue bolder smaller">
                        <h6>Local</h6>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">

                        {!! Form::label('usuario_local','Usuario') !!}

                        <div class="input-group">
           <span class="input-group-addon">
               <i class="ace-icon fa fa-phone"></i>
           </span>

                            {!! Form::text('usuario_local',null, ['class' => 'form-control' ,'placeholder'=>'Introduzca el Usuario
                            ' ]) !!}
                        </div>


                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">

                        {!! Form::label('pass_local','Contraseña') !!}

                        <div class="input-group">
           <span class="input-group-addon">
               <i class="ace-icon fa fa-phone"></i>
           </span>

                            {!! Form::text('pass_local',null, ['class' => 'form-control' ,'placeholder'=>'Introduzca la Contraseña
                            ' ]) !!}
                        </div>


                    </div>
                </div>

                <div class="col-md-12">
                    <div class="header blue bolder smaller">
                        <h6>Outlook</h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">

                        {!! Form::label('correo_outlook','Correo') !!}

                        <div class="input-group">
           <span class="input-group-addon">
               <i class="ace-icon fa fa-phone"></i>
           </span>

                            {!! Form::text('correo_outlook',null, ['class' => 'form-control' ,'placeholder'=>'Introduzca el Correo
                            ' ]) !!}
                        </div>


                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">

                        {!! Form::label('pass_outlook','Contraseña') !!}

                        <div class="input-group">
           <span class="input-group-addon">
               <i class="ace-icon fa fa-phone"></i>
           </span>

                            {!! Form::text('pass_outlook',null, ['class' => 'form-control' ,'placeholder'=>'Introduzca la Contraseña
                            ' ]) !!}
                        </div>


                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">

                        {!! Form::label('pass_pst','Contraseña PST') !!}

                        <div class="input-group">
           <span class="input-group-addon">
               <i class="ace-icon fa fa-phone"></i>
           </span>

                            {!! Form::text('pass_pst',null, ['class' => 'form-control' ,'placeholder'=>'Introduzca la Contraseña
                            ' ]) !!}
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>

</div>


{{--
<div class="form-group">

    {!! Form::label('type','Tipo de Usuario')  !!}
    {!! Form::select('type',config('options.types') ,  null,
    ['class'  => 'form-control'  ])  !!}

</div>
--}}
