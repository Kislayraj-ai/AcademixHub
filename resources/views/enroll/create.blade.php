@extends('layout')

@section('content')


<div class="row" style="width:50vw;">
<div class="col-md-12">
<div class="card">
<div class="card-header">Enroll page</div>
<div class="card-body">


<form action="{{ url('enrolls') }}"  method="post">

@csrf
<label>Student Name</label>
<select name="student" class="form-control">

<option   value="1">Select Any</option>
@foreach($students as $student)

<option value="{{ $student->id  }}"> {{  $student->name }} </option>
@endforeach
</select> 

<label>Course Name</label>
<select name="course" class="form-control">

<option   value="1">Select Any</option>
@foreach($courses as $course)

<option value="{{ $course->id  }}"> {{  $course->coursename }} </option>
@endforeach
</select>
<br>
<input type="hidden" name="payment" value="0"  />

<input type="submit" value="Save" class="btn btn-primary " />

</form>
</div>
</div>

</div>
@endsection