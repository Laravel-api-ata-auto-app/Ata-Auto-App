@extends('layouts.admin')
@section('content')
   
    <div class="card" style="margin:20px;">
  <div class="card-header">
    <h2>Create New category
      <a href="{{ url('/admin/category') }}" class="btn btn-primary btn-sm text-white float-end">
        BACK
      </a>
    </h2>
  </div>
  <div class="card-body">
       
      <form action="{{  url('/admin/category') }}" method="post" enctype="multipart/form-data">
        <!-- {!! csrf_field() !!} -->
        @csrf
        
        <div>
        <label>{{__('category Name')}}</label></br>
        <input type="text" name="category_Name" id="category_Name" class="form-control"></br>
        @error('category_Name')<small class="text-danger">{{$message}}</small>@enderror
        </div>
                        
        
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  

@endsection