@extends('layout')

@section('content')
 <div class="row" style="width:60vw;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right">
                {{-- <a class="btn btn-success" href="{{ route('payment.create') }}"></a> --}}
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
            <th>Course</th>
            <th >Payment</th>

        </tr>
     
        @foreach ($paymentsData as $index => $data) 
         <tr>
            <td>{{  $index + 1}}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->coursename }}</td>
            <td>
               <form action="{{ route('payments.destroy',$data->enrollID) }}" method="POST"> 
   
         @if($data->payment == 0 )
            <a class="btn btn-danger" href="{{ route('payments.show',$data->enrollID) }}">Pay</a>
   
            @else 
             <a class="btn btn-success" style="pointer-events: none" 
             href="{{ route('payments.show',$data->enrollID) }}">Paid</a>
          @endif
            
                </form> 
            </td>
        </tr> 
       @endforeach
    </table>

@endsection