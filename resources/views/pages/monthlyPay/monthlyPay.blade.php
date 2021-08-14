@extends('layouts.master')
@section('title','Monthly Pay')
@section('main_content')

        <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Students Monthly Payment</h3>
  <a href="{{route('monthlyPay_create')}}"class="btn btn-info btn-sm">MonthlyPay_create</a>

               
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                                       <th>SN</th>
                                       <th>ID</th>
                                       <th>reg_id</th>
                                        <th>Date</th>
                                        <th>Section</th>
                                        <th>Roll</th>
                                        <th>ReceiptNo</th>
                                        <th>MonthName</th>
                                        <th>Admission</th>
                                        <th>Re-Admission</th>
                                        <th>School</th>
                                        <th>CityCorp</th>
                                        <th>Guide</th>
                                        <th>RedCrecent</th>
                                        <th>Current</th>
                                        <th>Due</th>
                                        <th>Advance</th>
                                        <th>ExamFee</th>
                                        <th>AdmitCard</th>
                                        <th>Syllebus</th>
                                        <th>Others</th>
                                        <th>Total</th>
                                        <th>pic</th>
                                        <th>Action</th>
                    </tr>
                  </thead>







                  <tbody>
                              @php $i = 0; @endphp
                                        @foreach($monthlyPays as $monthlyPay)
                                         @php $i++ @endphp
                    <tr>
                      <td>{{ $i }}</td>
                      <td>{{ $monthlyPay->id }}</td>
                      <td>{{ $monthlyPay->reg_id }}</td>
                      <td>{{ $monthlyPay->date }}</td>
                      <td>{{ $monthlyPay->section }}</td>
                      <td>{{ $monthlyPay->roll }}</td>
                      <td>{{ $monthlyPay->receiptNo }}</td>
                      <td>{{ $monthlyPay->monthsName }}</td>
                      <td>{{ $monthlyPay->admission }}</td>
                      <td>{{ $monthlyPay->reAdmission }}</td>
                      <td>{{ $monthlyPay->school }}</td>
                      <td>{{ $monthlyPay->cityCorp }}</td>
                      <td>{{ $monthlyPay->guide }}</td>
                      <td>{{ $monthlyPay->redCrecent }}</td>
                      <td>{{ $monthlyPay->current }}</td>
                      <td>{{ $monthlyPay->due }}</td>
                      <td>{{ $monthlyPay->advance }}</td>
                      <td>{{ $monthlyPay->examFee }}</td>
                      <td>{{ $monthlyPay->admitCard }}</td>
                      <td>{{ $monthlyPay->syllebus }}</td>
                      <td>{{ $monthlyPay->others }}</td>
                      <td>{{ $monthlyPay->total }}</td>
                      <td>{{ $monthlyPay->pic }}</td>
                       <td>
  <a href="{{route('monthlyPay_edit',$monthlyPay->id)}}"class="btn btn-success btn-sm">Edit</a>

  <form class="form-inline"onclick="return confirm('Are you sure delete? ')" action="{{route('monthlyPay_delete',$monthlyPay->id)}}" method="post">
  @csrf
  <input type="submit" class="btn btn-danger btn-sm" value="Delete"/></form>
                
                      </td>
      
                 </tr>
                    @endforeach
                  </tbody>
               
                   
                    <tfoot>
                            <tr>
                                        <th>SN</th>
                                        <th>ID</th>
                                        <th>reg_id</th>
                                        <th>Date</th>
                                        <th>Section</th>
                                        <th>Roll</th>
                                        <th>ReceiptNo</th>
                                        <th>MonthName</th>
                                        <th>Admission</th>
                                        <th>Re-Admission</th>
                                        <th>School</th>
                                        <th>CityCorp</th>
                                        <th>Guide</th>
                                        <th>RedCrecent</th>
                                        <th>Current</th>
                                        <th>Due</th>
                                        <th>Advance</th>
                                        <th>ExamFee</th>
                                        <th>AdmitCard</th>
                                        <th>Syllebus</th>
                                        <th>Others</th>
                                        <th>Total</th>
                                        <th>pic</th>
                                        <th>Action</th>
                                  </tr>
                                </tfoot>  
                    
                </table>
              </div>
              <!-- /.card-body -->
          
<!-- ./wrapper -->



          @endsection