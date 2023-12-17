@extends('layout')

@section('content')
<div vlass="card">
<div class="card-header">
Teacher Page
</div>

<div class="card-body">
    <div class="card-body">
@foreach($teacher as $teacher )
    
    <h5 class="card-titel">Name : {{ $teacher->teachername }}</h5>
    <p class="card-titel">Age : {{ $teacher->teacherage }}</p>
    <p class="card-titel">Course : {{ $teacher->courseName }}</p>
    <p class="card-titel">Email : {{ $teacher->teacheremail }}</p>
    @endforeach
    </div>


</div>


</div>

@endsection