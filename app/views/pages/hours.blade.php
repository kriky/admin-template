@extends('layouts.default')

@section('content')
<div id="content">
    
    <div class="row">
					<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
						<h1 class="page-title txt-color-blueDark">
							<i class="fa fa-table fa-fw "></i> 
								Hours
							
						</h1>
					</div>
					<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
						<ul id="sparks" class="">
							<li class="sparks-info">
								<h5> My Income <span class="txt-color-blue">$47,171</span></h5>
								<div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
									1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
								</div>
							</li>
							<li class="sparks-info">
								<h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up" data-rel="bootstrap-tooltip" title="Increased"></i>&nbsp;45%</span></h5>
								<div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
									110,150,300,130,400,240,220,310,220,300, 270, 210
								</div>
							</li>
							<li class="sparks-info">
								<h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
								<div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
									110,150,300,130,400,240,220,310,220,300, 270, 210
								</div>
							</li>
						</ul>
					</div>
				</div>
    
    
    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">



        <header>
            <span class="widget-icon"> <i class="fa fa-table"></i> </span>
            <h2> Hours </h2>

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
                            <th>Start</th>
                            <th>End</th>
                            <th>Working Hours</th>
                            <th>Desc</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hours as $hour)
                        <tr>                
                            <td>{{date("d.m.Y",strtotime($hour->start)) }}</td>
                            <td>{{date("h:i", strtotime($hour->start))  }}</td>
                            <td>{{ date("h:i", strtotime($hour->end)) }}</td>
                            <td>{{ $hour->sum }}</td>
                            <td>{{ $hour->desc }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <!-- end widget content -->

        </div>
        <!-- end widget div -->
    </div>
</div>
@stop <!-- content -->



@section('scripts')
@include('scripts.table')
@stop

