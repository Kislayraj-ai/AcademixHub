@extends('layout')

@section('content')

<div class="row" style="width:50vw;">
<div class="col-md-12">
<div class="card">
<div class="card-header">Teacheers page</div>
<div class="card-body">

<form action="{{ route('addNewTeacher') }}"  method="post">

@csrf
<label>Teacher Name</label>
<input  type="text" name="teachername" id="name" class="form-control" />

<label>Teachers Age</label>
<input  type="number" name="teacherage" id="age" class="form-control" />

<label>Course</label></br></br>
<select name="courseName" class="form-control">

<option   value="1">Select Any</option>
@foreach($courses as $course)

<option value="{{ $course->id  }}"> {{  $course->coursename }} </option>
@endforeach
</select>
<br>
<label>Teachers Email</label>
<input  type="email" name="teacheremail" id="email" class="form-control" />


<input type="submit" value="Save" class="btn btn-primary " />

</form>
</div>
</div>

</div>
@endsection