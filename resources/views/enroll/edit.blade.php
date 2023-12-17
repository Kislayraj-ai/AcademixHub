@extends('layout')

@section('content')

 <div class="container">

        <h3 align="center" class="mt-5">Enrollement</h3>
{{-- @php  print_r($enroll);die; @endphp --}}
        <div class="row" style="width:60vw;">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
            <form method="POST" action="{{ url('enrolls/'. $enroll[0]->id) }}">
               @csrf
                  @method("PATCH")

                <lable class="form-label">Student</lable>
                <input  type="hidden"  name="student"  value=" {{  $enroll[0]->student }}" />
                <input class="form-control"   readonly  value=" {{  $enroll[0]->name }}" />
                
               <div class="row">
                        <div class="col-md-12">
                            <label>CourseName</label>
                         <select name="course" id="selectionCourse" class="form-control">
                           </select>
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

    <script>
    const appendCourses = ()=> {


let courseSelection = document.querySelector("#selectionCourse");

 let courseList   =  @json($enroll);
 let presentCourse = courseList[0].course
console.log(presentCourse)
let allCourses   = @json($courses) ;


//!-----------------------------------
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