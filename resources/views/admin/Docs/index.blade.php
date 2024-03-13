@extends('layouts.admin')
@section('content')
     
<div class="card-header">
                <h2>Mainternace Documentation
                    
                <!-- <a href="{{ url('/admin/Docs/create') }}" class="btn btn-primary btn-sm float-end">
                    Add New Document
                </a> -->
                
                </h2>
</div>
<div class="card-header">
                
                <div class="card-body">
            
            <div class="row gx-3 mb-3">
                <div class="col-md-6">
                    <div>
                    <label><h2>{{__('Maker')}}</h2></label>
                    </div>
                </div>
                
            </div>
            @csrf
            @foreach($brands as $brand)
            <a href="{{ url('/admin/Docs/' . $brand->Name .'/')}}" >
            <div class="row gx-3 mb-3">
                <div class="col-md-3">
                    <div>
                    <label><h4>{{__($brand->Name)}}</h4></label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                    <img src="{{asset('uploads/Brand/'.$brand->Logo)}}" width="100px" height="100px" alt="{{__($brand->Name)}}"/>
                    </div>
                </div>
                
            </div>
            </a>
            @endforeach

</div>

   

    
    
 

@endsection