@extends('layouts.shop')
@section('content')
   
   @if($shopsProfile->id==null)
        
        @include('shop.ShopProfile.create')
   @else
   
   @include('shop.ShopProfile.edit')
    
    
   @endif    
    
    
</div>
  

@endsection