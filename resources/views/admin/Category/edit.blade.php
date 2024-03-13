@extends('layouts.admin')
@section('content')
    
<div class="card" style="margin:20px;">
  <div class="card-header">
    <h2>Update category
      <a href="{{ url('/admin/category') }}" class="btn btn-primary btn-sm text-white float-end">
        BACK
      </a>
    </h2>
  </div>
  <div class="card-body">
       
      <form action="{{  url('/admin/category/'.$category->id) }}" method="post" enctype="multipart/form-data">
        <!-- {!! csrf_field() !!} -->
        @csrf
        @method("PATCH")
        <div>
        <label>{{__('category Name')}}</label></br>
        <input type="text" name="category_Name" id="category_Name" class="form-control" value="{{$category->Name}}"></br>
        @error('category_Name')<small class="text-danger">{{$message}}</small>@enderror
        </div>
                        
        
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  

@endsection