 @extends('layouts.master')
@section('title','MonthlyPay_edit')
@section('main_content')

<h2 align="center">Monthly Pay Update</h2>

 <div class="container-fluid px-4">
                        <div style="padding: 30px 60px;" class="card mb-4">
                            <div class="card-body">
                                Update Monthly Pay
                            </div>
                        </div>
                        <div style="padding: 30px 60px;" class="card mb-4">
                            <div class="card-header">
                               
                            </div>
                            <div class="card-body">
<form action="{{route('monthlyPay_update',$monthlyPay->id)}}" method="post" class="needs-validation" novalidate>


@csrf

  <div class="form-group">
    <label for="uname">1.Reg ID:</label>
    <input type="text" class="form-control" id="id" value="{{$monthlyPay->reg_id}}" placeholder="Enter registration ID" name="reg_id">
  </div>

<div class="form-group">
    <label for="date">2.Date:</label>
    <input type="text" class="form-control" id="date" value="{{$monthlyPay->date}}" placeholder="Enter current date" name="date">
  </div>


<div class="form-group">
    <label for="section">3.Section:</label>
    <input type="text" class="form-control" id="section" value="{{$monthlyPay->section}}" placeholder="Enter Section" name="section">
  </div>


 <div class="form-group">
    <label for="uname">4.Roll:</label>
    <input type="text" class="form-control" id="roll" value="{{$monthlyPay->roll}}" placeholder="Enter Roll" name="roll">
  </div>


<div class="form-group">
    <label for="receiptNo">5.Receipt No:</label>
    <input type="text" class="form-control" id="receiptNo" value="{{$monthlyPay->receiptNo}}" placeholder="Enter receipt No." name="receiptNo">
  </div>




<div class="form-group">
    <label for="monthsName">6.Months Name:</label>
    <input type="text" class="form-control" id="monthsName" value="{{$monthlyPay->monthsName}}" placeholder="Enter Months Name" name="monthsName">
  </div>


<div class="form-group">
    <label for="admission">7.Admission Fee:</label>
    <input type="text" class="form-control" id="admission" value="{{$monthlyPay->admission}}" placeholder="Enter Admission Fee" name="admission">
  </div>


<div class="form-group">
    <label for="reAdmission">8.Re-Admission Fee:</label>
    <input type="text" class="form-control" id="reAdmission" value="{{$monthlyPay->reAdmission}}" placeholder="Enter Re-Admission Fee" name="reAdmission">
  </div>




  <div class="form-group">
    <label for="school">9.School Yearly Fee:</label>
    <input type="text" class="form-control" id="school" value="{{$monthlyPay->school}}" placeholder="Enter School Yearly Fee" name="school">
  </div>


<div class="form-group">
    <label for="cityCorp">10.City Corp. Yearly Fee:</label>
    <input type="text" class="form-control" id="cityCorp" value="{{$monthlyPay->cityCorp}}" placeholder="Enter City Corp Yearly Fee" name="cityCorp">
  </div>
 

<div class="form-group">
    <label for="guide">11.Guide Yearly Fee:</label>
    <input type="text" class="form-control" id="guide" value="{{$monthlyPay->guide}}" placeholder="Enter Guide Yearly Fee" name="guide">
  </div>

  <div class="form-group">
    <label for="redCrecent">12.Red Crecent Yearly Fee:</label>
    <input type="text" class="form-control" id="redCrecent" value="{{$monthlyPay->redCrecent}}" placeholder="Enter Red Crecent Yearly Fee" name="redCrecent">
  </div>

<div class="form-group">
    <label for="current">13.Current Month Fee:</label>
    <input type="text" class="form-control" id="current" value="{{$monthlyPay->current}}" placeholder="Enter Current Month Fee" name="current">
  </div>


<div class="form-group">
    <label for="due">14.Dues Fee:</label>
    <input type="text" class="form-control" id="due" value="{{$monthlyPay->due}}"placeholder="Enter Dues Fee" name="due">
  </div>



<div class="form-group">
    <label for="advance">15.Advance Fee:</label>
    <input type="text" class="form-control" id="advance" value="{{$monthlyPay->advance}}" placeholder="Enter Advance Fee" name="advance">
  </div>




<div class="form-group">
    <label for="examFee">16.Exam Fee:</label>
    <input type="text" class="form-control" id="examFee" value="{{$monthlyPay->examFee}}" placeholder="Enter Exam Fee" name="examFee">
  </div>



<div class="form-group">
    <label for="admitCard">17.Admit Card Fee:</label>
    <input type="text" class="form-control" id="admitCard" value="{{$monthlyPay->admitCard}}" placeholder="Enter Admitcard Fee" name="admitCard">
  </div>

<div class="form-group">
    <label for="syllebus">18.Syllebus Fee:</label>
    <input type="text" class="form-control" id="syllebus" value="{{$monthlyPay->syllebus}}" placeholder="Enter Syllebus Fee" name="syllebus">
  </div>


<div class="form-group">
    <label for="others">19.Others Fee:</label>
    <input type="text" class="form-control" id="others" value="{{$monthlyPay->others}}"placeholder="Enter Others Fee" name="others">
  </div>


<div class="form-group">
    <label for="total">20.Total Fee:</label>
    <input type="text" class="form-control" id="total" value="{{$monthlyPay->total}}" placeholder="Enter Total Fee" name="total">

    <div class="form-group">
    <label for="pic">21.Picture:</label>
    <input type="text" class="form-control" id="pic" value="{{$monthlyPay->pic}}" placeholder="Picture" name="pic">
  </div>
  </div>



  <button type="submit" class="btn btn-primary">Payment Update</button>
</form>
    </div>
   </div>
  </div>
  
@endsection