<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClockingController extends Controller
{


    public  function index ()
    {

          return  view ( 'Clocking.clockingList') ;
    }


    public  function  getClockingList ()
    {

        $recipes=\DB::table('clocking_temp_print')
            ->select(
                \DB::raw(
                    "
                                clocking_temp_print.CLOCK_DATE  ,             
                                clocking_temp_print.CLOCK_DAY  ,                       
                                clocking_temp_print.TIME_IN_1  ,
                                clocking_temp_print.TIME_IN_2  ,
                                clocking_temp_print.TIME_OUT_2  ,
                                clocking_temp_print.TIME_IN_3  ,
                                clocking_temp_print.TIME_OUT_3  ,
                                clocking_temp_print.TIME_IN_4  ,
                                clocking_temp_print.TIME_OUT_4,
                                clocking_temp_print.TIME_IN_5    
                                "
                )
            )
            ->get();

        return json_encode($recipes) ;
    }


}
