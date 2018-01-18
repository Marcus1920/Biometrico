<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkScheduleController extends Controller
{

    public  function index ()
    {

        return  view ( 'workShedule.workshedule') ;
    }


    public  function  getworksheduleList ()
    {

        $shedule=\DB::table('work_schedule')
            ->select(
                \DB::raw(
                    "
                                work_schedule.WORK_SCHEDULE_KEY    ,             
                                work_schedule.EMPLOYEE_KEY    ,                       
                                work_schedule.SHIFT_KEY    ,
                                work_schedule.ATTENDANCE_DATE_START    ,
                                work_schedule.ATTENDANCE_DATE_END      ,
                                work_schedule.TIME_END    ,
                                work_schedule.TOTAL_WORK_MINUTES    ,
                                work_schedule.DELETED    ,
                                work_schedule.ABSENT_DATA_KEY  ,
                                work_schedule.PUBLIC_HOLIDAY      
                                "
                )
            )
            ->get();

        return json_encode($shedule) ;
    }


}
