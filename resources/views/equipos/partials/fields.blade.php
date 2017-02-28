<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                   aria-expanded="true" aria-controls="collapseOne">
                <i class="ace-icon fa fa-cog"></i>&nbsp;  Hardware

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

                        {!! Form::label('nombre_equipo','ID') !!}

                        <div class="input-group">
           <span class="input-group-addon">
               <i class="ace-icon fa fa-tag"></i>
           </span>

                            {!! Form::text('nombre_equipo,',null, ['class' => 'form-control' ,'placeholder'=>'ID autogenerado
                            ' ]) !!}
                        </div>


                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">

                        {!! Form::label('ram','RAM') !!}

                        <div class="input-group">
           <span class="input-group-addon">
               <i class="ace-icon fa fa-tachometer"></i>
           </span>

                            {!! Form::text('ram',null, ['class' => 'form-control' ,'placeholder'=>'Introduzca la Memoria Ram
                            ' ]) !!}

                                  <span class="input-group-addon">
                                   GB
                               </span>
                        </div>


                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">

                        {!! Form::label('disco_duro','Disco Duro') !!}

                        <div class="input-group">
                               <span class="input-group-addon">
                                   <i class="ace-icon fa fa-hdd-o"></i>
                               </span>

                            {!! Form::text('disco_duro',null, ['class' => 'form-control' ,'placeholder'=>'Introduzca Capacidad del Disco Duro
                            ' ]) !!}

                               <span class="input-group-addon">
                                   GB
                               </span>
                        </div>

                    </div>

                </div>



                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('','Particionado ') !!}
                        <div class="input-group">
                            <input type="checkbox"
                                    data-toggle="switch"
                                   id="particionado"
                                   data-switch-set="state"
                                   data-switch-value="false"
                                   data-on-text="<span class='fui-check' ></span>"
                                   data-off-text="<span class='fui-cross'></span>"
                                   data-switch-value="large"       />
                        </div>

                    </div>

                </div>






                <div class="col-md-6">


                    <div class="bootstrap-switch-square">
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
                <i class="ace-icon fa fa-rocket"></i>&nbsp;     Software

                </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">




                <div class="col-md-6">
                    <div class="form-group">

                        {!! Form::label('os','Sistema Operativo') !!}

                        <div class="input-group">
                               <span class="input-group-addon">
                                   <i class="ace-icon fa fa-windows"></i>
                               </span>

                            {!! Form::text('os',null, ['class' => 'form-control' ,'placeholder'=>'Introduzca el Sistema Operativo
                            ' ]) !!}
                        </div>


                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">

                        {!! Form::label('arquitectura','Arquitectura ') !!}

                        <div class="input-group">


                            <input type="checkbox"
                                   data-toggle="switch"
                                   id="arquitectura"
                                   data-switch-set="state"
                                   data-switch-value="true"
                                   checked
                                   data-on-text="<span >32Bits</span>"
                                   data-off-text="<span>64Bits</span>"
                                    />
                        </div>
<br>
                    </div>

                </div>





                <div class="col-md-6">
                    <div class="form-group">

                        {!! Form::label('paqueteria','Paqueteria ') !!}

                        <div class="input-group">
                               <span class="input-group-addon">
                                   <i class="ace-icon fa fa-file-word-o"></i>
                               </span>

                            {!! Form::text('paqueteria',null, ['class' => 'form-control' ,'placeholder'=>'Paqueteria de Ofimatica
                            ' ]) !!}
                        </div>


                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">

                        {!! Form::label('antivirus','Antivirus') !!}

                        <div class="input-group">
           <span class="input-group-addon">
               <i class="ace-icon fa fa-stethoscope"></i>
           </span>

                            {!! Form::text('antivirus',null, ['class' => 'form-control' ,'placeholder'=>'Antivirus Instalado
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
                    <i class="ace-icon fa fa-industry"></i> &nbsp;     Fabricante
                </a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">


                <div class="col-md-6">
                    <div class="form-group">

                        {!! Form::label('marca','Marca') !!}

                        <div class="input-group">
                               <span class="input-group-addon">
                                   <i class="ace-icon fa fa-ticket"></i>
                               </span>

                            {!! Form::text('marca',null, ['class' => 'form-control' ,'placeholder'=>'Introduzca Marca del Equipo
                            ' ]) !!}
                        </div>


                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">

                        {!! Form::label('modelo','Modelo') !!}

                        <div class="input-group">
           <span class="input-group-addon">
               <i class="ace-icon fa fa-slack"></i>
           </span>

                            {!! Form::text('modelo',null, ['class' => 'form-control' ,'placeholder'=>'Introduzca el Modelo del Equipo
                            ' ]) !!}
                        </div>


                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">

                        {!! Form::label('s_n','S_N') !!}

                        <div class="input-group">
           <span class="input-group-addon">
               <i class="ace-icon fa fa-tags"></i>
           </span>

                            {!! Form::text('s_n',null, ['class' => 'form-control' ,'placeholder'=>'Introduzca S_N
                            ' ]) !!}
                        </div>


                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">

                        {!! Form::label('s_tag','S. Tag') !!}

                        <div class="input-group">
           <span class="input-group-addon">
               <i class="ace-icon fa fa-tags"></i>
           </span>

                            {!! Form::text('s_tag',null, ['class' => 'form-control' ,'placeholder'=>'Introduzca  S. Tag
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
