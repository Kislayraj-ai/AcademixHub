@extends('layout')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Student Management</h3>

        <div class="row" style="width:60vw;">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ url('students/'. $students->id) }}">
               @csrf
                  @method("PATCH")
                    <div class="row" >
                        <div class="col-md-6">
                            <label>Student Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $students->name }}">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" value="{{ $students->address }}">
                        </div>

                    </div>
                    
                  <div class="row">
                        <div class="col-md-12">
                            <label>Mobile</label>
                            <input type="text" class="form-control" name="mobile" 
                             value="{{ $students->mobile }}">
                        </div>

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

{{-- 
@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
            background-color:#b3e5fc;
        }

        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }

        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush --}}