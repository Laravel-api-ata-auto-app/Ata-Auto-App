@extends('layouts.admin')
@section('content')
    
    <div class="card" style="margin:20px;">
  <div class="card-header">
    <h2>Edit Car Brand - {{$Brand->id}}
      <a href="{{ url('/admin/brand') }}" class="btn btn-primary btn-sm text-white float-end">
        BACK
      </a>
    </h2>
  </div>
  <div class="card-body">
       
      <form action="{{  url('admin/brand/'.$Brand->id) }}" method="post" enctype="multipart/form-data">
        <!-- {!! csrf_field() !!} -->
        @csrf
        @method("PATCH")
        <div>
        <label>{{__('Name')}}</label></br>
        <input type="text" name="Name" id="Name" class="form-control" value="{{$Brand->Name}}"></br>
        @error('Name')<small class="text-danger">{{$message}}</small>@enderror
        </div>
        
        <div>
        <label>Logo</label></br>
        <input type="file" name="Logo" id="Logo" class="form-control"></br>
        <img src="{{asset('uploads/Brand/'.$Brand->Logo)}}" width="100px" height="100px"/>
        @error('Logo')<small class="text-danger">{{$message}}</small>@enderror
        </div>
        
        <div>
        <label>Made</label></br>
        <input type="text" name="Made" id="Made" class="form-control" value="{{$Brand->Made}}"></br>
        @error('Made')<small class="text-danger">{{$message}}</small>@enderror
        </div>
    
        
        <div>
        <label>Regiong</label></br>
        <input type="text" name="Region" id="Region" class="form-control" value="{{$Brand->Region}}"></br>
        @error('Region')<small class="text-danger">{{$message}}</small>@enderror
        </div>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  

@endsection