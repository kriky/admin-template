@extends('layouts.default')

@section('content')
<!-- MAIN CONTENT -->
<div id="content">

    <div class="row">
        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
            <h1 class="page-title txt-color-blueDark">
                <i class="fa fa-table fa-fw "></i> 
                Users

            </h1>
        </div>
        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
            <ul id="sparks" class="">
                <li class="sparks-info">

                    <h5> Hours Sum <span class="txt-color-blue"><i class="fa fa-clock-o" data-rel="bootstrap-tooltip" title="Increased"></i>
                            @if(isset($report))

                            {{ $sum }}
                            @endif
                        </span></h5>
                    <!--                    <div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
                                            @if(isset($report))
                                            @foreach($report as $r)
                    
                                            {{ date('H:i', strtotime($r->sum)) }},
                    
                                            @endforeach        
                                            @endif
                                        </div>-->
                </li>
                <li class="sparks-info">
                    <h5> Days <span class="txt-color-purple"><i class="fa fa-calendar" data-rel="bootstrap-tooltip" title="Increased"></i>&nbsp{{ count($report) }}</span></h5>

                </li>
                <li class="sparks-info">
                    <h5> Payment <span class="txt-color-greenDark"><i class="fa fa-dollar"></i>&nbsp;

                            {{  Auth::user()->per_hour *  $sum  . '.00 Kn' }}

                        </span></h5>
                    <!--                    <div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
                                            110,150,300,130,400,240,220,310,220,300, 270, 210
                                        </div>-->
                </li>
            </ul>
        </div>
    </div>


    <!-- widget grid -->
    <section id="widget-grid" class="">
        <!-- START ROW -->

        <div class="row">

            <!-- NEW COL START -->
            <article class="col-sm-12 col-md-12 col-lg-6">

                <!-- Widget ID (each widget will need unique ID)-->
                <div class="jarviswidget" id="wid-id-3" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">
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
                        <h2>Plugins & Enhancers </h2>

                    </header>

                    <!-- widget div-->
                    <div>

                        <!-- widget edit box -->
                        <div class="jarviswidget-editbox">
                            <!-- This area used as dropdown edit box -->

                        </div>
                        <!-- end widget edit box -->

                        <!-- widget content -->
                        <div class="widget-body">

                            {{ Form::open(['route' => 'reportshow']) }}

                            <fieldset>
                                <legend>
                                    Report
                                </legend>

                                <div class="row">



                                    <div class="col-sm-12">
                                        <label>Select range</label>
                                    </div>

                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <div class="input-group">
                                                <input class="form-control" id="to" name="from" type="text" placeholder="From date" >
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <div class="input-group">
                                                <input class="form-control" id="from" name="to" type="text" placeholder="To date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </fieldset>

                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-default" type="submit">
                                            Cancel
                                        </button>
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-save"></i>
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>

                            {{ Form::close()}}

                        </div>
                        <!-- end widget content -->

                    </div>


                    <!-- end widget div -->

                </div>
                <!-- end widget -->

            </article>
            <!-- END COL -->
            <article class="col-sm-12 col-md-12 col-lg-6">

                @if(isset($report))


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
                                    @foreach($report as $r)
                                    <tr>
                                        <td>{{ date('d.m.Y', strtotime($r->date)) }}</td>
                                        <td>{{ date('H:i', strtotime($r->start)) }}</td>
                                        <td>{{ date('H:i', strtotime($r->end)) }}</td>
                                        <td>{{ date('H:i', strtotime($r->sum)) }}</td>
                                        <td>{{ $r->desc }}</td>
                                        <td>{{ link_to_route('hours.delete', 'X', $r->id, ['class' => 'btn btn-danger'])}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        <!-- end widget content -->

                    </div>
                    <!-- end widget div -->
                </div>

                @endif
            </article>


        </div>

        <!-- END ROW -->

    </section>
</div>
@stop



@section('scripts')
@include('scripts.table')
@include('scripts.form')
@stop