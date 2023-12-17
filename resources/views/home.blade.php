<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    </head>
    <body class="antialiased">
@extends('layout')
 
@section('content')
    <div class="row" style="width:60vw;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right">
                {{-- <a class="btn btn-success" href="{{ route('data.create') }}"> Create New Product</a> --}}
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>TeacherName</th>
            <th>Course</th>
  
        </tr>
        @foreach ($data as $index => $data)
        <tr>
            <td>{{  $index + 1}}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->teachername ? $data->teachername : "N/A"  }}</td>
            <td>{{ $data->coursename  ?  $data->coursename  : "N/A" }}</td>
          {{--  <td>
                 <form action="{{ route('data.destroy',$data->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('data.show',$data->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('data.edit',$data->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td> --}}
        </tr>
        @endforeach
    </table>
  
    {{-- {!! $data->links() !!} --}}
      
@endsection

<script>
  let homePayout = localStorage.setItem('layout' ,'home');
  

</script>

    </body>
</html>
