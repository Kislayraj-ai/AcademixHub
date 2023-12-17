@extends('layout')

@section('content')
<div vlass="card">
<div class="card-header">
Students Page
</div>

<div class="card-body">
    <div class="card-body">
    <h5 class="card-titel">Name : {{ $students->name }}</h5>
     <p class="card-titel">Address : {{ $students->address }}</p>
      <p class="card-titel">Mobile : {{ $students->mobile }}</p>
    
    </div>


</div>


</div>

@endsection