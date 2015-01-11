@extends('layouts.default')

@section('content')

<!-- MAIN PANEL -->




<!-- MAIN CONTENT -->
<div id="content">


    <div class="row">
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
            <h1 class="page-title txt-color-blueDark">

                <!-- PAGE HEADER -->
                <i class="fa-fw fa fa-pencil-square-o"></i> 
                Forms
                <span>>  
                    Form Layouts
                </span>
            </h1>
        </div>

        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <!-- Button trigger modal -->
            <a data-toggle="modal" href="#myModal" class="btn btn-success btn-lg pull-right header-btn hidden-mobile"><i class="fa fa-circle-arrow-up fa-lg"></i> Launch form modal</a>
        </div>
    </div>

    <!--    <div class="alert alert-block alert-success">
            <a class="close" data-dismiss="alert" href="#">×</a>
            <h4 class="alert-heading"><i class="fa fa-check-square-o"></i> Check validation!</h4>
            <p>
                You may also check the form validation by clicking on the form action button. Please try and see the results below!
            </p>
        </div>-->

    <!-- widget grid -->
    <section id="widget-grid" class="">


        <!-- START ROW -->

        <div class="row">

            <!-- NEW COL START -->
            <article class="col-sm-12 col-md-12 col-lg-6">

                <!-- Widget ID (each widget will need unique ID)-->
                <div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">
                    <!-- widget options:
                            usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
                            
                            data-widget-colorbutton="false"	
                            data-widget-editbutton="false"
                            data-widget-togglebutton="false"
                            data-widget-deletebutton="false"
                            data-widget-fullscreenbutton="false"
                            data-widget-custombutton="false"
                            data-widget-collapsed="true" 
                            data-widget-sortable="false"
                            
                    -->
                    <header>
                        <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                        <h2>Add Hours</h2>				

                    </header>

                    <!-- widget div-->
                    <div>

                        <!-- widget edit box -->
                        <div class="jarviswidget-editbox">
                            <!-- This area used as dropdown edit box -->

                        </div>
                        <!-- end widget edit box -->

                        <!-- widget content -->
                        <div class="widget-body no-padding">

                            {{ Form::open(array('url' => '/store',
                                            'metod' => 'post',
                                            'id' => 'checkout-form',
                                            'class' => 'smart-form',
                                            'novalidate' => 'novalidate'
                            )) }}

                            <fieldset>
                                <div class="row">
                          
                                    <section class="col col-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="date" placeholder="Select a date" class="form-control datepicker" data-dateformat="dd-mm-yy">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <div class="row">
                                    <section class="col col-6">
                                        <div class="form-group">  
                                            <div class="input-group">
                                                <input class="form-control" name="start" id="clockpicker1" type="text" placeholder="Select time" data-autoclose="true">
                                                <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="col col-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input class="form-control" name="end" id="clockpicker2" type="text" placeholder="Select time" data-autoclose="true">
                                                <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </fieldset>

                            <fieldset>




                                <section>
                                    <label class="textarea"> 										
                                        <textarea rows="3" name="desc" placeholder="Additional info"></textarea> 
                                    </label>
                                </section>
                            </fieldset>


                            <footer>
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </footer>
                            {{ Form::close() }}

                        </div>
                        <!-- end widget content -->

                    </div>
                    <!-- end widget div -->

                </div>
                <!-- end widget -->



            </article>
            <!-- END COL -->

            <article class="col-sm-12 col-md-12 col-lg-6">

                <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">



                    <header>
                        <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                        <h2> Users </h2>

                    </header>

                    <!-- widget div-->
                    <div>

                        <!-- widget edit box -->
                        <div class="jarviswidget-editbox">
                            <!-- This area used as dropdown edit box -->

                        </div>
                        <!-- end widget edit box -->

                        <!-- widget content -->
                        <div class="widget-body no-padding">

                            <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
                                <thead>			                
                                    <tr>
                                        <th>Date</th>
                                        <th>Work Start</th>
                                        <th>Work End</th>
                                        <th>Hours</th>
                                        <th>Description</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hours as $hour)
                                    <tr>
                                        <td>{{ date('d.m.Y', strtotime($hour->date)) }}</td>
                                        <td>{{ date('H:i', strtotime($hour->start)) }}</td>
                                        <td>{{ date('H:i', strtotime($hour->end)) }}</td>
                                        <td>{{ date('H:i', strtotime($hour->sum)) }}</td>
                                        <td>{{ $hour->desc }}</td>
                                        <td>{{ link_to_route('hours.delete','X',$hour->id,['class' => 'btn btn-danger'])}}</td>
                                     </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        <!-- end widget content -->

                    </div>
                    <!-- end widget div -->
                </div>
            </article>


        </div>

        <!-- END ROW -->

    </section>
    <!-- end widget grid -->


    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title">
                        <img src="img/logo.png" width="150" alt="SmartAdmin">
                    </h4>
                </div>
                <div class="modal-body no-padding">

                    <form id="login-form" class="smart-form">

                        <fieldset>
                            <section>
                                <div class="row">
                                    <label class="label col col-2">Username</label>
                                    <div class="col col-10">
                                        <label class="input"> <i class="icon-append fa fa-user"></i>
                                            <input type="email" name="email">
                                        </label>
                                    </div>
                                </div>
                            </section>

                            <section>
                                <div class="row">
                                    <label class="label col col-2">Password</label>
                                    <div class="col col-10">
                                        <label class="input"> <i class="icon-append fa fa-lock"></i>
                                            <input type="password" name="password">
                                        </label>
                                        <div class="note">
                                            <a href="javascript:void(0)">Forgot password?</a>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section>
                                <div class="row">
                                    <div class="col col-2"></div>
                                    <div class="col col-10">
                                        <label class="checkbox">
                                            <input type="checkbox" name="remember" checked="">
                                            <i></i>Keep me logged in</label>
                                    </div>
                                </div>
                            </section>
                        </fieldset>

                        <footer>
                            <button type="submit" class="btn btn-primary">
                                Sign in
                            </button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                Cancel
                            </button>

                        </footer>
                    </form>						


                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


</div>
<!-- END MAIN CONTENT -->




@stop
@section('scripts')
@include('scripts.table')
@include('scripts.form')

@stop