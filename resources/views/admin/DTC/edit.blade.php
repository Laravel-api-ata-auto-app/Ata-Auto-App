@extends('layouts.admin')
@section('content')
    
<div class="card" style="margin:20px;">
  <div class="card-header">
    <h2>Create New DTC
      <a href="{{ url('/admin/DTC') }}" class="btn btn-primary btn-sm text-white float-end">
        BACK
      </a>
    </h2>
  </div>
  <div class="card-body">
       
      <form action="{{  url('/admin/DTC/'.$dtc->DTC_Code) }}" method="post" enctype="multipart/form-data">
        <!-- {!! csrf_field() !!} -->
        @csrf
        @method("PATCH")
        <div>
        <label>{{__('DTC Code')}}</label></br>
        <input type="text" name="dtc_code" id="dtc_code" class="form-control" value="{{$dtc->DTC_Code}}"></br>
        @error('dtc_code')<small class="text-danger">{{$message}}</small>@enderror
        </div>
                        
        <div>
        <label>Kh Script</label></br>
        <textarea name="kh_script" id="kh_script" class="form-control">
          {{$dtc->Khdtc}}
        </textarea>
        @error('kh_script')<small class="text-danger">{{$message}}</small>@enderror
        </div>  
        <div>
        <label>English Script</label></br>
        
        <textarea name="en_script" id="en_script" class="form-control">
        {{$dtc->Endtc}}
        </textarea>
        @error('en_script')<small class="text-danger">{{$message}}</small>@enderror
        </div>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  

@endsection