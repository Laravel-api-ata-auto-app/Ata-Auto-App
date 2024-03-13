@extends('layouts.admin')
@section('content')
   
    <form action="{{'/admin/Docs/upload/'.$brandsName.'/'.$modelName.'/'}}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div>
        <label>{{__('Brand Name')}}</label></br>
        <input type="text" name="brandsName" id="brandsName" class="form-control" value="{{$brandsName}}"></br>
        @error('brandsName')<small class="text-danger">{{$message}}</small>@enderror
    </div>
    <div>
    <label>{{__('Model Name')}}</label></br>
    <input type="text" name="modelName" id="modelName" class="form-control" value="{{$modelName}}"></br>
    @error('modelName')<small class="text-danger">{{$message}}</small>@enderror
    </div>
    <div>
    <label>{{__('Mainternace Documents')}}</label></br>
    <input type="file" name="zip_file">
    @error('zip_file')<small class="text-danger">{{$message}}</small>@enderror
    <br>
    
    </div>
    <button type="submit" >Upload</button>
</form>

@endsection