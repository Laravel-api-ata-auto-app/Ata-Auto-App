@extends('layouts.admin')
@section('content')
   
    <div class="card" style="margin:20px;">
  <div class="card-header">
    <h2>Create New Car Model
      <a href="{{ url('/admin/Carmodel') }}" class="btn btn-primary btn-sm text-white float-end">
        BACK
      </a>
    </h2>
  </div>
  <div class="card-body">
       
      <form action="{{  url('admin/Carmodel') }}" method="post" enctype="multipart/form-data">
        <!-- {!! csrf_field() !!} -->
        @csrf
        <div>
        <label>{{__('Brand')}}</label>
        <select name="Brand" id="Brand_id">
          @foreach($Brandslist as $Brandslist)
            <option value="{{$Brandslist->Name}}">{{$Brandslist->Name}}</option>
          @endforeach 
        </select>
        <br/><br/>
        </div>
        <div>
        <label>{{__('Name')}}</label></br>
        <input type="text" name="Name" id="Name" class="form-control"></br>
        @error('Name')<small class="text-danger">{{$message}}</small>@enderror
        </div>
                        
        <div>
        <label>Year</label></br>
        <input type="text" name="Year" id="Year" class="form-control"></br>
        @error('Year')<small class="text-danger">{{$message}}</small>@enderror
        </div>
    
        
        <div>
        <label>Use by</label></br>
        <input type="text" name="use" id="use" class="form-control"></br>
        @error('use')<small class="text-danger">{{$message}}</small>@enderror
        </div>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  

@endsection