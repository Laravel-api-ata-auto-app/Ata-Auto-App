@extends('layouts.admin')
@section('content')
    
    <div class="card" style="margin:20px;">
  <div class="card-header">
    <h2>Create New Car Brand
      <a href="{{ url('/admin/brand') }}" class="btn btn-primary btn-sm text-white float-end">
        BACK
      </a>
    </h2>
  </div>
  <div class="card-body">
       
      <form action="{{  url('admin/brand') }}" method="post" enctype="multipart/form-data">
        <!-- {!! csrf_field() !!} -->
        @csrf
        <div>
        <label>{{__('Name')}}</label></br>
        <input type="text" name="Name" id="Name" class="form-control"></br>
        @error('Name')<small class="text-danger">{{$message}}</small>@enderror
        </div>
        
        <div>
        <label>Logo</label></br>
        <input type="file" name="Logo" id="Logo" class="form-control"></br>
        @error('Logo')<small class="text-danger">{{$message}}</small>@enderror
        </div>
        
        <div>
        <label>Made</label></br>
        <input type="text" name="Made" id="Made" class="form-control"></br>
        @error('Made')<small class="text-danger">{{$message}}</small>@enderror
        </div>
    
        
        <div>
        <label>Regiong</label></br>
        <input type="text" name="Region" id="Region" class="form-control"></br>
        @error('Region')<small class="text-danger">{{$message}}</small>@enderror
        </div>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  

@endsection