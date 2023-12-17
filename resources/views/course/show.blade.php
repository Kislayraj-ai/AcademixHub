@extends('layout')

@section('content')
<div vlass="card" style="width:80vw;">
<div class="card-header">
Course Page
</div>

<div class="card-body">
<table class="table table-responsive w-75">
<tr>
<th>Sr No</th>
<th>CourseName</th>
</tr>
@foreach($course as $course )

    <tr>
        <td> {{ $course->id }}</td>
     <td> {{ $course->coursename }}</td> </tr>
    
  
@endforeach
</table>
</div>



</div>

@endsection