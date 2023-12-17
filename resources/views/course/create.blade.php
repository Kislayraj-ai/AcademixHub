@extends('layout')

@section('content')


<div class="row" style="width:50vw;">
<div class="col-md-12">
<div class="card">
<div class="card-header">Course page</div>
<div class="card-body">


<form action="{{ url('courses') }}"  method="post">

@csrf
<label>Course Name</label>
<input  type="text" name="coursename" id="coursename" class="form-control" />


<input type="submit" value="Save" class="btn btn-primary " />

</form>
</div>
</div>

</div>
@endsection