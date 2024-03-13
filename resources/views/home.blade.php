@extends('layouts.app')

@section('content')

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="container">
   @php
    $role= Auth::user()->role;
    @endphp
<section>
    <div class="container py-2">
            <header class="text-center mb-5 text-info">
            <div class="row">
            <div class="col-lg-12 mx-auto">
                <h1>ATA plans Subscription</h1>
                <h1>PRICING 
                    @switch($role)
                        @case('2')
                            {{' Users '}}
                            @break
                        @case('3')
                            {{' Shops '}}
                            @break
                        @case('4')
                            {{' Garages '}}
                            @break
                        @case('5')
                            {{' Trainers '}}
                            @break
                    @endswitch
                </h1>
            </div>
            </div>
        </header>
        <div class="row text-center align-items-end">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="bg-white p-5 rounded-lg shadow">
                <h1 class="h6 text-uppercase font-weight-bold mb-4">FREE</h1>
                <h2 class="h1 font-weight-bold">$0<span class="text-small font-weight-normal ml-2">/ free</span></h2>
                <a href="{{url('/payment')}}" class="btn btn-primary btn-block shadow rounded-pill">Subscript Now</a>
                </div>
            </div>
        @forelse($myplan as $plans)
            @if(($plans->type_id) == $role)
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="bg-white p-5 rounded-lg shadow">
                    <h1 class="h6 text-uppercase font-weight-bold mb-4">{{$plans->Name}}</h1>
                    <h2 class="h1 font-weight-bold">{{$plans->Cost}}$ <span class="text-small font-weight-normal ml-2">for {{$plans->Duration}} days</span></h2>
                        <p>{{$plans->Detail}}</p>
                    <a href="{{url('/payment')}}" class="btn btn-primary btn-block shadow rounded-pill">Subscript Now</a>
                </div>
            </div>

            @endif

        @empty
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <h1>{{' No any plans. '}}</h1>
            </div>
        </div>
        @endforelse
        </div>
    </div>
</section> 

</div>

@endsection
