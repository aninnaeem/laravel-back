<?php

namespace App\Http\Controllers;
use App\prescription;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function apiReturn()
    {
       
       $lists = prescription::all();
       return $lists;
      
    }
    public function index()
    {
       
       $lists = prescription::all();
       // echo $list;
       return view("prescriptionList",compact('lists'));
       // return view('prescriptionList');
       // return view('prescriptionList',compact($list));
       // return View::make("prescriptionList")->with(array('list'=>$list));
       // return View::make("user/regprofile", compact('students'));
        // return $list;
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
        $prescription = new Prescription;
        $prescription->prescription_date=$request->prescription_date;
        $prescription->patient_name=$request->patient_name;
        $prescription->patient_age=$request->patient_age;
        $prescription->diagonsis=$request->diagonsis;
        $prescription->gender=$request->gender;
        $prescription->medicine=$request->medicine;
        $prescription->next_visit_date=$request->next_visit_date;
        $prescription->save();
        $lists = prescription::all();
        return view("prescriptionList",compact('lists'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = prescription::find($id);
        // echo  $data;
        return view("editPrescription",compact('data'));
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
     
        // $prescription = $request->all();
        $prescription = prescription::find($id);
        $prescription->prescription_date=$request->prescription_date;
        $prescription->patient_name=$request->patient_name;
        $prescription->patient_age=$request->patient_age;
        $prescription->diagonsis=$request->diagonsis;
        $prescription->gender=$request->gender;
        $prescription->medicine=$request->medicine;
        $prescription->next_visit_date=$request->next_visit_date;
        $prescription->save();
        $lists = prescription::all();
        return view("prescriptionList",compact('lists'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = prescription::find($id);
        $data->delete();
        $lists = prescription::all();
        return view("prescriptionList",compact('lists'));
    }
}
