@extends('layouts.admin')
@section('content')
     
<div class="card-header">
                <h2>Mainternace Documentation           
                </h2>
</div>
<div class="table-responsive">
    <table class="table table-border table-hover">
        <thead>
            <tr>
                <th><h2>Maker</h2></th>
                <th><h2>Model</h2></th>
                <th><h2>Documents</h2></th>
                <th><h2>Action</h2></th>
                
                
            </tr>
        </thead>
        @csrf
        @foreach($repairdocs as $repairdoc)
        <tbody>
            <tr>
                <td><h4>{{__($repairdoc->Brand)}}</h4></td>
                <td><h4>{{__($repairdoc->ModelName)}}</h4></td>
                <td>
                    
                        @if ($repairdoc->Docs_Path !='Null')
                            <h4>{{__($repairdoc->Docs_Path)}}</h4>
                            
                        @else
                            <h4>NA</h4>
                            
                        @endif
                   
                </td>
                <td><a>
                <a href="{{ url('/admin/Docs/'.$repairdoc->Brand.'/'.$repairdoc->ModelName.'/edit') }}" class="btn btn-outline-danger ">
                    Add New/Update Document
                </a>
                </a></td>
                
            </tr>
        </tbody>
        @endforeach
    </table>
</div>



   

    
    
 

@endsection