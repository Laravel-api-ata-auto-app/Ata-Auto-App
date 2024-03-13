@extends('layouts.shop')
@section('content')
   
@csrf
<div class="card" style="margin:20px;">
  <div class="card-header">
    <h2>Product Info Detail of 
      @php 
      $shopID=$shopsProfile->id;
      $shopName=$shopsProfile->Name;
      @endphp
      {{$shopName}}</h2>
  </div>
  <div class="card-body">
       
      <form action="{{url('shop/Products') }}" method="post" enctype="multipart/form-data">
        <!-- {!! csrf_field() !!} -->
        @csrf
        <input type="text" name="ShopID" value="{{$shopID}}" style="visibility: hidden;">
        <input type="text" name="ShopName" value="{{$shopName}}" style="visibility: hidden;">
        <div class="row">
            <div class="col-xl-8">
            <div class="row gx-3 mb-3">
                <div class="col-md-6">
                <div>
                <label>{{__('Product Name')}}</label></br>
                <input type="text" name="ProductName" id="ProductName" class="form-control" ></br>
                @error('ProductName')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                </div>
                <div class="col-md-6">
                <div>
                <label>{{__('Product Category')}}</label></br>
                <select name="ProductCate" id="ProductCate" class="form-control">
                  @foreach($category as $cate)
                    <option value="{{$cate->id}}" >{{$cate->Name}}</option>
                  @endforeach
                </select>
                @error('ProductCate')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                </div>
            </div>
            <div class="row gx-3 mb-3">    
                <div class="col-md-6">        
                <div>
                <label>{{__('Make in')}}</label></br>
                <input type="text" name="ProductMakeIN" id="ProductMakeIN" class="form-control" >
                @error('ProductMakeIN')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                </div>
                <div class="col-md-6">        
                <div>
                <label>{{__('Condiction')}}</label></br>
                <input type="text" name="ProductCondiction" id="ProductCondiction" class="form-control" >
                @error('ProductCondiction')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                </div>
            </div>    
            <div class="row gx-3 mb-3">    
                <div class="col-md-6">        
                <div>
                <label>{{__('Price')}}</label></br>
                <input type="text" name="ProductPrice" id="ProductPrice" class="form-control" >
                @error('ProductPrice')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                </div>
                <div class="col-md-6">        
                <div>
                <label>{{__('Warranty (Months)')}}</label></br>
                <input type="text" name="Warranty" id="Warranty" class="form-control" >
                @error('Warranty')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                </div>
            </div>
            

            
        </div>
            <div class="col-xl-4">
            <div class="card-body text-center">
                    <!-- Product picture image-->
                    <input type='file' name="ProductPicture" onchange="readURL(this);" />
                    <br>
                    <img class="img-account-profile " id="blah" src="" width="300px" height="300px" alt="">
                    <!-- Product picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    
                    
      <script>
           function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
      </script>
    </div>
            </div>
        </div>
        
                        
        <input type="submit" value="Post Product" class="btn btn-success"></br>
    </form>
    
  </div>
</div>

@endsection