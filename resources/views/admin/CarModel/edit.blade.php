@extends('layouts.admin')
@section('content')
    
    <div class="card" style="margin:20px;">
  <div class="card-header">
    <h2>Edit Car Model - {{ $CarModel->id }}
      <a href="{{ url('/admin/Carmodel') }}" class="btn btn-primary btn-sm text-white float-end">
        BACK
      </a>
    </h2>
  </div>
  <div class="card-body">
       
      <form action="{{  url('admin/Carmodel/'.$CarModel->id) }}" method="post" enctype="multipart/form-data">
        <!-- {!! csrf_field() !!} -->
        @csrf
        @method("PATCH")
        <div>
        <div>
        <label>{{__('Name')}}</label></br>
        <input type="text" name="Name" id="Name" class="form-control" value="{{ $CarModel->Name }}"></br>
        @error('Name')<small class="text-danger">{{$message}}</small>@enderror
        </div>
                        
        <div>
        <label>Year</label></br>
        <input type="text" name="Year" id="Year" class="form-control" value="{{ $CarModel->Year }}"></br>
        @error('Year')<small class="text-danger">{{$message}}</small>@enderror
        </div>
    
        
        <div>
        <label>Use by</label></br>
        <input type="text" name="use" id="use" class="form-control" value="{{ $CarModel->use }}"></br>
        @error('use')<small class="text-danger">{{$message}}</small>@enderror
        </div>
        
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  

@endsection