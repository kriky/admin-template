<?php

class HoursReportController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $report = null;
        $sum = null;
        return View::make('pages.report', compact('report', 'sum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show() {

        $from = date('Y-m-d', strtotime(Input::get('from')));
        $to = date('Y-m-d', strtotime( Input::get('to')));
        $report = Hours::with('user')->whereBetween('date', [$from, $to])->whereUserId(Auth::user()->id)->get();
        $time = Hours::whereBetween('date', [$from, $to])->whereUserId(Auth::user()->id)->lists('sum');
        $sum = 0;
 
        foreach ($time as $t){
            $sum += $t;
        }
       

        return View::make('pages.report', compact('report', 'sum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
