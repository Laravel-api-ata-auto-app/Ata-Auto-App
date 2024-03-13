@extends('layouts.app')

@section('content')


<div class="container">
   @php
    $role= Auth::user()->role;
    @endphp
<section>
    <div class="container py-2">
            <header class="text-center mb-5 text-info">
            <div class="row">
            <div class="col-lg-12 mx-auto">
                <h1>Payment Method</h1>
                
                
            </div>
            </div>
        </header>
        
    </div>
</section> 

</div>

@endsection
