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
        $input = Input::all();
        $from = Input::get('from');
        $to = Input::get('to');
        $from = date('Y-m-d', strtotime($from));
        $to = date('Y-m-d', strtotime($to));

        $id = Auth::user()->id;
        $report = Hours::with('user')->whereBetween('date', [$from, $to])->whereUserId($id)->get();
        $test = Hours::whereBetween('date', [$from, $to])->whereUserId($id)->lists('sum');
        
        $sum = 0;
        foreach ($test as $t){
            $sum += strtotime($t);
        }
        $sum = date('H:i', $sum);

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
