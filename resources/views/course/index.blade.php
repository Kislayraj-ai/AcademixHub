@extends('layout')
 
@section('content')
    <div class="row" style="width:60vw;">
        <div class="col-lg-6 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('courses.create') }}">Add course</a>
         
        
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Action</th>
        </tr> 
     @php  $iii = 1 ; @endphp
        @foreach ($courses as $course )

        <tr>
            <td>{{ $iii++ }}</td>
            <td>{{ $course->coursename }}</td>
            <td>

                 <form action="{{ route('courses.destroy',$course->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('courses.show',$course->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('courses.edit',$course->id) }}">Edit</a>
   
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
    {{-- {!! $courses->links() !!} --}}
      
@endsection

