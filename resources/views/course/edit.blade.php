@extends('layout')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Student Management</h3>

        <div class="row" style="width:60vw;">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
        @php
            $courses = $courses[0] ;

        @endphp
            <div class="form-area">
                <form method="POST" action="{{ url('courses/'. $courses->id) }}">
               @csrf
                  @method("PATCH")
                    <div class="row" >
                        <div class="col-md-6">
                            <label>Course Name</label>
                            <input type="text" class="form-control" name="coursename" value="{{ $courses->coursename }}">
                        </div>

                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>

                    </div>
                </form>
            </div>

            </div>
        </div>
    </div>

@endsection
