@extends('layouts.enduser')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>DTC - {{$result->DTC_Code}}</h2>
        <h3>ភាសាខ្មែរ </h3>
        <P>{{$result->Khdtc}}</P>
        
        <h3>English </h3>
        <p>-{{$result->Endtc}}</p>

        <a href="{{ url('/user/getdtc/') }}" class="btn btn-primary btn-sm text-white float-end">
        BACK
      </a>
    </div>
    
    </div>
</div>
@endsection