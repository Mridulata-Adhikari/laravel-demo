@extends('products.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
     <div class="col-md-6">
            <div class="form-group">
                <strong>Product Category:</strong>
               <select name="category_id" id="category_id" class="form-control">
               <option disabled selected >Select Category</option>
                @foreach($productCategories as $pc)
                    <option value="{{$pc->id}}">{{$pc->category_name}}</option>
                    @endforeach
               </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Name">
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" >
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>Number:</strong>
                <input type="number" name="number" class="form-control" placeholder="Number">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
            </div>
        </div>
        
        <div class="col-md-6 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection