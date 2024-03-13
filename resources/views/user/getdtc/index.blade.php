@extends('layouts.enduser')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>DTC</h2>
        <p>
            Diagnostic Trouble Code (DTCs) -- Trouble codes are how OBDII identifies and communicates to technicians where and what on-board problems exist.
            If you are have a problem with your car , find a DTC for detail. 
        </p>
    </div>
    <div class="card-body">
        <form action="{{  url('user/getdtc/search') }}" method="get" enctype="multipart/form-info">
        @csrf
        
        <div class="row mb-3">
            <label for="DTC_Code" class="col-md-4 col-form-label text-md-end">{{ __('DTC') }}</label>

            <div class="col-md-6">
                <input id="DTC_Code" type="DTC_Code" class="form-control @error('DTC_Code') is-invalid @enderror" name="DTC_Code" value="{{ old('DTC_Code') }}" required autocomplete="DTC_Code" autofocus placeholder="Input DTC">

                @error('DTC_Code')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Search') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection