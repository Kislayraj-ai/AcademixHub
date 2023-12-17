@extends('layout')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Teacher Management</h3>

        <div class="row" style="width:60vw;">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
      {{-- " --}}
                <form method="POST" action="{{ route('updateSingle.teacher' , $teacher[0]->id ) }} ">
               @csrf
                       @foreach($teacher as $teacher )
                
          
                    <div class="row" >
                        <div class="col-md-6">
                            <label>Teacher Name</label>
                            <input type="text" class="form-control" name="teachername" value="{{ $teacher->teachername }}">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label></label>
                            <input type="number" class="form-control" name="teacherage" value="{{ $teacher->teacherage }}">
                        </div>

                    </div>
                    
                  <div class="row">
                        <div class="col-md-12">
                            <label>CourseName</label>
                         <select name="courseName" id="selectionCourse" class="form-control">
                           </select>
                        </div>

                    </div>



                        <div class="row">
                        <div class="col-md-12">
                            <label>Teacher Email</label>
                            <input type="text" class="form-control" name="teacheremail" 
                             value="{{ $teacher->teacheremail }}">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>

                    </div>
                      @endforeach
                </form>
            </div>

            </div>
        </div>
    </div>

<script>

//append couse in option box

const appendCourses = ()=> {


let courseSelection = document.querySelector("#selectionCourse");

 let courseList   =  @json($teacher);
 let presentCourse = courseList.courseName

let allCourses   = @json($courses) ;

 allCourses.forEach(course =>{
   
  var option= document.createElement("option");

if(parseInt(course.id) === parseInt(presentCourse) ){
  option.setAttribute('selected','selected');

}
  option.value = `${course.id}`;
  option.text= `${course.coursename}`;
  courseSelection.add(option);
  
 })
}

appendCourses();
</script>
@endsection
