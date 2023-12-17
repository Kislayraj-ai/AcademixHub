@extends('layout')

@section('content')

<div class="row" style="width:50vw;">
<div class="col-md-12">
<div class="card">
<div class="card-header">Student page</div>
<div class="card-body">

<form action="{{ url('students') }}"  method="post">

@csrf
<label>Name</label>
<input  type="text" name="name" id="name" class="form-control" />

<label>Address</label>
<input  type="text" name="address" id="address" class="form-control" />

<label>Mobile</label>
<input  type="text" name="mobile" id="mobile" class="form-control" />
<input type="submit" value="Save" class="btn btn-primary" />

</form>
</div>
</div>

</div>
@endsection