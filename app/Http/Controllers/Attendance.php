<?php

namespace App\Http\Controllers;

use App\AttendanceSlots;
use App\StudentClasses;
use App\Students;
use Illuminate\Http\Request;

class Attendance extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("attendances.attendance-today")->with("list_attendances", AttendanceSlots::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function showTakeAttendance($ma_lop){
        $studentClass = StudentClasses::where('ma_lop', $ma_lop)->get();
        $arrayStudent = array();
        foreach($studentClass as $item){
           $student =  Students::where('rollNumber',$item->rollNumber )->get();
           array_push($arrayStudent, $student);
        }

        return view("attendances.take-attendance")->with("list_student", $arrayStudent);
//        return $arrayStudent;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
