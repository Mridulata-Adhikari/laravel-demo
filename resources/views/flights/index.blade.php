@extends('flights.layout')

@section('content1')
 <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Eloquent</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href=""> Add new flight</a>
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
            <th>Airlines</th>
            <th width="280px">Action</th>
        </tr>
  
    </table>
  
      
@endsection