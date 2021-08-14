 @extends('layouts.master')
@section('title','MonthlyPay_create')
@section('main_content')

<h2 align="center">Monthly Pay Create</h2>

 <div class="container-fluid px-4">
                        <div style="padding: 30px 60px;" class="card mb-4">
                            <div class="card-body">
                                Create Monthly Pay
                            </div>
                        </div>
                        <div style="padding: 30px 60px;" class="card mb-4">
                            <div class="card-header">
                               
                            </div>
                            <div class="card-body">
<form action="{{route('monthlyPay_store')}}" method="post" class="needs-validation" novalidate>


@csrf

  <div class="form-group">
    <label for="uname">1.Reg ID:</label>
    <input type="text" class="form-control" id="id" placeholder="Enter registration ID" name="reg_id">
  </div>

<div class="form-group">
    <label for="date">2.Date:</label>
    <input type="text" class="form-control" id="date" placeholder="Enter current date" name="date">
  </div>


<div class="form-group">
    <label for="section">3.Section:</label>
    <input type="text" class="form-control" id="section" placeholder="Enter Section" name="section">
  </div>


 <div class="form-group">
    <label for="uname">4.Roll:</label>
    <input type="text" class="form-control" id="roll" placeholder="Enter Roll" name="roll">
  </div>


<div class="form-group">
    <label for="receiptNo">5.Receipt No:</label>
    <input type="text" class="form-control" id="receiptNo" placeholder="Enter receipt No." name="receiptNo">
  </div>




<div class="form-group">
    <label for="monthsName">6.Months Name:</label>
    <input type="text" class="form-control" id="monthsName" placeholder="Enter Months Name" name="monthsName">
  </div>


<div class="form-group">
    <label for="admission">7.Admission Fee:</label>
    <input type="text" class="form-control" id="admission" placeholder="Enter Admission Fee" name="admission">
  </div>


<div class="form-group">
    <label for="reAdmission">8.Re-Admission Fee:</label>
    <input type="text" class="form-control" id="reAdmission" placeholder="Enter Re-Admission Fee" name="reAdmission">
  </div>




  <div class="form-group">
    <label for="school">9.School Yearly Fee:</label>
    <input type="text" class="form-control" id="school" placeholder="Enter School Yearly Fee" name="school">
  </div>


<div class="form-group">
    <label for="cityCorp">10.City Corp. Yearly Fee:</label>
    <input type="text" class="form-control" id="cityCorp" placeholder="Enter City Corp Yearly Fee" name="cityCorp">
  </div>
 

<div class="form-group">
    <label for="guide">11.Guide Yearly Fee:</label>
    <input type="text" class="form-control" id="guide" placeholder="Enter Guide Yearly Fee" name="guide">
  </div>

  <div class="form-group">
    <label for="redCrecent">12.Red Crecent Yearly Fee:</label>
    <input type="text" class="form-control" id="password" placeholder="Enter Red Crecent Yearly Fee" name="redCrecent">
  </div>

<div class="form-group">
    <label for="current">13.Current Month Fee:</label>
    <input type="text" class="form-control" id="current" placeholder="Enter Current Month Fee" name="current">
  </div>


<div class="form-group">
    <label for="due">14.Dues Fee:</label>
    <input type="text" class="form-control" id="due" placeholder="Enter Dues Fee" name="due">
  </div>



<div class="form-group">
    <label for="advance">15.Advance Fee:</label>
    <input type="text" class="form-control" id="advance" placeholder="Enter Advance Fee" name="advance">
  </div>




<div class="form-group">
    <label for="examFee">16.Exam Fee:</label>
    <input type="text" class="form-control" id="examFee" placeholder="Enter Exam Fee" name="examFee">
  </div>



<div class="form-group">
    <label for="admitCard">17.Admit Card Fee:</label>
    <input type="text" class="form-control" id="admitCard" placeholder="Enter Admitcard Fee" name="admitCard">
  </div>

<div class="form-group">
    <label for="syllebus">18.Syllebus Fee:</label>
    <input type="text" class="form-control" id="syllebus" placeholder="Enter Syllebus Fee" name="syllebus">
  </div>


<div class="form-group">
    <label for="others">19.Others Fee:</label>
    <input type="text" class="form-control" id="others" placeholder="Enter Others Fee" name="others">
  </div>


<div class="form-group">
    <label for="total">20.Total Fee:</label>
    <input type="text" class="form-control" id="total" placeholder="Enter Total Fee" name="total">

    <div class="form-group">
    <label for="pic">21.Picture:</label>
    <input type="text" class="form-control" id="pic" placeholder="Picture" name="pic">
  </div>
  </div>



  <button type="submit" class="btn btn-primary">Submit Payment</button>
</form>
    </div>
   </div>
  </div>
  
@endsection