@extends('layout')
 
@section('content')
    <div class="row" style="width:60vw;">
        <div class="col-lg-8 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="createTeacher">Add Teacher</a>
          
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Age</th>
            <th>Course</th>
            <th>Email</th>
            <th>Action</th>
        </tr> 
     @php  $iii = 1 ; @endphp
        @foreach ($Teachers as $Teacher )

        <tr>
            <td>{{ $iii++ }}</td>
            <td>{{ $Teacher->teachername }}</td>
            <td>{{ $Teacher->teacherage }}</td>
            <td>{{ $Teacher->selectedCourse }}</td>
            <td>{{ $Teacher->teacheremail }}</td>
            <td>

              <a class="btn btn-info" href="{{ route('showSingleTeacher', $Teacher->id) }}">View</a>
              <a class="btn btn-primary" href="{{ route('editSingle.teacher',$Teacher->id) }}">Edit</a>
             <a class="btn btn-danger" href="{{ route('delete.teacher',$Teacher->id) }}">Delete</a>
              {{-- <a class="btn btn-primary" href="{{ route('Teachers.edit',$Teacher->id) }}">Edit</a> --}}
                {{-- <form action="{{ route('Teachers.destroy',$Teacher->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('Teachers.show',$Teacher->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('Teachers.edit',$Teacher->id) }}">Edit</a>
   
                    @csrf
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form> --}}
            </td>
        </tr>
        @endforeach
    </table>
    </div>
        </div>
    </div>
    {{-- {!! $Teachers->links() !!} --}}
      
@endsection

