@extends('template')

@section('contenido')

    <!-- CONTENIDO -->
    <div id='page-wrapper'>

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h1 class="header-text fadeInLeftBig">Ajustes</h1>
                </div>

            </div>

            <br>

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->

                        <div class="error-container">
                            <div class="well">

                                <h4 class="lighter smaller">We looked everywhere but we couldn't find it!</h4>

                                <div>


                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Particionado </label>
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


                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Particionado </label>
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


                                    <div class="col-md-3">

                                        <div class="form-group">
                                            <label for="basic" class="col-lg-2 control-label">Usuario:</label>

                                                <select id="basic" class="selectpicker show-tick form-control" data-live-search="true">

                                                    <option data-subtext="Auxiliar Sistemas" >Mario Alejandro Bustos Jimenez </option>
                                                    <option data-subtext=" Soporte Tecnico" >Anahi Martinez Martinez </option>
                                                    <option data-subtext="Auxiliar Sistemas" >Mario Alejandro Bustos Jimenez </option>
                                                    <option data-subtext=" Soporte Tecnico" >Anahi Martinez Martinez </option>
                                                    <option data-subtext="Auxiliar Sistemas" >Mario Alejandro Bustos Jimenez </option>

                                                </select>

                                        </div>

                                    </div>


                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Particionado </label>
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


                                    <hr>
                                    <br>
                                    <br>
                                    <br>


                                    <form class="form-search">
												<span class="input-icon align-middle">
													<i class="ace-icon fa fa-search">Titulo CCampo</i>

													<input type="text" class="search-query" placeholder="Give it a search...">
												</span>
                                        <button class="btn btn-sm" type="button">Go!</button>
                                    </form>
                                    <form class="form-search">
												<span class="input-icon align-middle">
													<i class="ace-icon fa fa-search"></i>

													<input type="text" class="search-query" placeholder="Give it a search...">
												</span>
                                        <button class="btn btn-sm" type="button">Go!</button>
                                    </form>
                                    <form class="form-search">
												<span class="input-icon align-middle">
													<i class="ace-icon fa fa-search"></i>

													<input type="text" class="search-query" placeholder="Give it a search...">
												</span>
                                        <button class="btn btn-sm" type="button">Go!</button>
                                    </form>

                                    <div class="space"></div>
                                    <h4 class="smaller">Try one of the following:</h4>

                                    <ul class="list-unstyled spaced inline bigger-110 margin-15">
                                        <li>
                                            <i class="ace-icon fa fa-hand-o-right blue"></i>
                                            Re-check the url for typos
                                        </li>

                                        <li>
                                            <i class="ace-icon fa fa-hand-o-right blue"></i>
                                            Read the faq
                                        </li>

                                        <li>
                                            <i class="ace-icon fa fa-hand-o-right blue"></i>
                                            Tell us about it
                                        </li>
                                    </ul>
                                </div>

                                <hr>
                                <div class="space"></div>

                                <div class="center">
                                    <a href="javascript:history.back()" class="btn btn-grey">
                                        <i class="ace-icon fa fa-arrow-left"></i>
                                        Go Back
                                    </a>

                                    <a href="#" class="btn btn-primary">
                                        <i class="ace-icon fa fa-tachometer"></i>
                                        Dashboard
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div>


        </div>





    </div>




    <script>
        $("#btn_nuevo").click(

                function(){
            $("#modal_crear_equipo").modal("show");

            $("#collapseOne-edit").attr("id", "collapseOne");
            $("#collapseTwo-edit").attr("id", "collapseTwo");
            $("#collapseThree-edit").attr("id", "collapseThree");



        });

        $("#btn_editar").click(function(){


        });


        $(document).ready(function(){
            // $("#modal_crear_equipo").modal("show");

        });




    </script>


@stop