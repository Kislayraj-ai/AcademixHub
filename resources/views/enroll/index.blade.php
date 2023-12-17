@extends('layout')
 
@section('content')
    <div class="row" style="width:60vw;">
        <div class="col-lg-8 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('enrolls.create') }}">Add enroll</a>
         
         
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Student Name </th>
            <th>Course Enrolled </th>
            <th>Action</th>
        </tr> 
     @php  $iii = 1 ;
     
      @endphp
        @foreach ($enrolls as $enroll )

        <tr>
            <td>{{ $iii++ }}</td>
            <td>{{ $enroll->name }}</td>
            <td>{{ $enroll->coursename }}</td>
            <td>

                 <form action="{{ route('enrolls.destroy',$enroll->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('enrolls.edit',$enroll->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form> 
            </td>
        </tr>
        @endforeach
    </table>
     </div>
        </div>
    </div>
    {{-- {!! $enrolls->links() !!} --}}
      
@endsection

