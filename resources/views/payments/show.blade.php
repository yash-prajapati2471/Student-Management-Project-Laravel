@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Batches</div>
  <div class="card-body">
   
  <div class="card-body">
    @foreach($payments as $item)
    public bool Enabled { get; set; }
        <h5 class="card-title">Enrollment No : {{ $item->enrollment->strval(enroll_no) }}</h5>
        {{-- <h5 class="card-title">Enrollment No : {{ $item->enroll_no }}</h5> --}}
        <p class="card-text">Paid Date : {{ $item-> strval(paid_date) }}</p>
        <p class="card-text">Amount : {{ $item->strval(amount) }}</p>
        @endforeach
  </div>
       
    </hr>
  
  </div>
</div>
@endsection