<?php

namespace App\Http\Controllers;

use App\Models\MonthlyPay;
use Illuminate\Http\Request;

class MonthlyPayController extends Controller
{
     


     public function index(){

    $monthlyPays = MonthlyPay::orderBy('id','desc')->get();

    // echo '<pre>';
    // print_r($monthlyPays);
    // exit();

return view('pages.monthlyPay.monthlyPay')->with('monthlyPays',$monthlyPays);
    }



    public function monthlyPay_create()
    {
        return view('pages.monthlyPay.monthlyPay_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function monthlyPay_store(Request $request)
    {//insery data into students table
       //Check validation
      

        $monthlyPay = new MonthlyPay();
        
       $monthlyPay->reg_id=$request->reg_id;
       $monthlyPay->date=$request->date;
       $monthlyPay->section=$request->section;
       $monthlyPay->roll=$request->roll;
        $monthlyPay->receiptNo=$request->receiptNo;
       $monthlyPay->monthsName=$request->monthsName;
        $monthlyPay->admission=$request->admission;
        $monthlyPay->reAdmission=$request->reAdmission;
        $monthlyPay->school=$request->school;
        $monthlyPay->cityCorp=$request->cityCorp;
        $monthlyPay->guide=$request->guide;
       $monthlyPay->redCrecent=$request->redCrecent;
       $monthlyPay->current=$request->current;
       $monthlyPay->due=$request->due;
       $monthlyPay->advance=$request->advance;
       $monthlyPay->examFee=$request->examFee;
       $monthlyPay->admitCard=$request->admitCard;
       $monthlyPay->syllebus=$request->syllebus;
       $monthlyPay->others=$request->others;
       $monthlyPay->total=$request->total;
       $monthlyPay->pic=$request->pic;
        $monthlyPay->save();
        return redirect()->route('monthlyPay');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MonthlyPay  $monthlyPay
     * @return \Illuminate\Http\Response
     */
    public function show(MonthlyPay $monthlyPay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MonthlyPay  $monthlyPay
     * @return \Illuminate\Http\Response
     */
    public function monthlyPay_edit($id)
    {
        $monthlyPay=MonthlyPay::find($id);
      return view('pages.monthlyPay.monthlyPay_edit')->with('monthlyPay',$monthlyPay);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MonthlyPay  $monthlyPay
     * @return \Illuminate\Http\Response
     */
   public function monthlyPay_update(Request $request,$id)
    
    {//insery data into students table
        $monthlyPay=MonthlyPay::find($id);

        $monthlyPay->reg_id=$request->reg_id;
       $monthlyPay->date=$request->date;
       $monthlyPay->section=$request->section;
       $monthlyPay->roll=$request->roll;
        $monthlyPay->receiptNo=$request->receiptNo;
       $monthlyPay->monthsName=$request->monthsName;
        $monthlyPay->admission=$request->admission;
        $monthlyPay->reAdmission=$request->reAdmission;
        $monthlyPay->school=$request->school;
        $monthlyPay->cityCorp=$request->cityCorp;
        $monthlyPay->guide=$request->guide;
       $monthlyPay->redCrecent=$request->redCrecent;
       $monthlyPay->current=$request->current;
       $monthlyPay->due=$request->due;
       $monthlyPay->advance=$request->advance;
       $monthlyPay->examFee=$request->examFee;
       $monthlyPay->admitCard=$request->admitCard;
       $monthlyPay->syllebus=$request->syllebus;
       $monthlyPay->others=$request->others;
       $monthlyPay->total=$request->total;
       $monthlyPay->pic=$request->pic;
        $monthlyPay->save();
        return redirect()->route('monthlyPay');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MonthlyPay  $monthlyPay
     * @return \Illuminate\Http\Response
     */
    public function monthlyPay_delete($id)
    {
        $monthlyPay=MonthlyPay::find($id);
       $monthlyPay->delete();
       return redirect()->route('monthlyPay');
    }
}
