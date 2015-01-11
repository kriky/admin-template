<?php

class Hours extends \Eloquent {

    protected $table = 'work_hours';
    protected $fillable = ['user_id', 'date', 'start', 'end', 'sum', 'desc'];

    public function user() {
        return $this->belongsTo('User');
    }

    public static function saveHours($input) {

        $start =  strtotime($input['start']);
        $end = strtotime($input['end']);
        $diff = $end - $start;
        $diff = date('H:i', $diff);

        static::create([
            'user_id' => Auth::user()->id,
            'date' => DateTime::createFromFormat('d-m-Y', $input['date']),
            'start' => $input['start'],
            'end' => $input['end'],
            'sum' => $diff,
            'desc' => $input['desc']
        ]);
    }
    
    public static function GetUserHours(){
        return Hours::with('user')->whereUser_id(Auth::id())->get();
    }

}
