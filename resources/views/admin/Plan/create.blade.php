@extends('layouts.admin')
@section('content')
    
    <div class="card" style="margin:20px;">
  <div class="card-header">
    <h2>Create New Plan
      <a href="{{ url('/admin/plans') }}" class="btn btn-primary btn-sm text-white float-end">
        BACK
      </a>
    </h2>
  </div>
  <div class="card-body">
       
      <form action="{{  url('admin/plans') }}" method="post" enctype="multipart/form-data">
        <!-- {!! csrf_field() !!} -->
        @csrf
        <div>
        <label>{{__('Type')}}</label>
        <select name="type" id="type_id">
            <option value="2">User</option>
            <option value="3">Shop</option>
            <option value="4">Garage</option>
            <option value="5">Trainer</option>
        </select>
      </br></br>
        </div>
        <div>
        <label>{{__('Name')}}</label></br>
        <input type="text" name="Name" id="Name" class="form-control"></br>
        @error('Name')<small class="text-danger">{{$message}}</small>@enderror
        </div>
        <div>
        <label>{{__('Cost')}}</label></br>
        <input type="text" name="Cost" id="Cost" class="form-control"></br>
        @error('Cost')<small class="text-danger">{{$message}}</small>@enderror
        </div>
        
        
        
        <div>
        <label>{{__('Detail')}}</label></br>
        <textarea name="Detail" id="Detail" class="form-control">
        </textarea>
        </br>
        @error('Detail')<small class="text-danger">{{$message}}</small>@enderror
        </div>

        <label>{{__('Duration (days)')}}</label></br>
        <input type="text" name="Duration" id="Duration" class="form-control"></br>
        @error('Duration')<small class="text-danger">{{$message}}</small>@enderror
        </div>
        <div>
    
        
        
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  

@endsection