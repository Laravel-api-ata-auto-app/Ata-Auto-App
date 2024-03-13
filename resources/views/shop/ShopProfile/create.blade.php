
 <div class="card" style="margin:20px;">
  <div class="card-header">
    <h2>Shop Profile Detail </h2>
  </div>
  <div class="card-body">
       
      <form action="{{  url('shop/Profile') }}" method="post" enctype="multipart/form-data">
        <!-- {!! csrf_field() !!} -->
        @csrf
        <div class="row">
            <div class="col-xl-8">
            <div class="row gx-3 mb-3">
                <div class="col-md-6">
                <div>
                <label>{{__('User Name')}}</label></br>
                <input type="text" name="UserName" id="UserName" class="form-control" value="{{ Auth::user()->name }}"></br>
                @error('UserName')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                </div>
            </div>
            <div class="row gx-3 mb-3">    
                <div class="col-md-6">        
                <div>
                <label>{{__('Shop Name')}}</label></br>
                <input type="text" name="ShopName" id="ShopName" class="form-control" >
                @error('ShopName')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                </div>
                <div class="col-md-6">        
                <div>
                <label>{{__('Contact Name')}}</label></br>
                <input type="text" name="ContactName" id="ContactName" class="form-control" >
                @error('ContactName')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                </div>
            </div>    
            <div class="row gx-3 mb-3">    
                <div class="col-md-6">        
                <div>
                <label>{{__('Contact Number')}}</label></br>
                <input type="text" name="ContactNumber" id="ContactNumber" class="form-control" >
                @error('ContactNumber')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                </div>
                <div class="col-md-6">        
                <div>
                <label>{{__('FaceBook')}}</label></br>
                <input type="text" name="FaceBook" id="FaceBook" class="form-control" >
                @error('FaceBook')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                </div>
            </div>
            <div class="row gx-3 mb-3">    
                <div class="col-md-6">        
                <div>
                <label>{{__('Telegram')}}</label></br>
                <input type="text" name="Telegram" id="Telegram" class="form-control" >
                @error('Telegram')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                </div>
                <div class="col-md-6">        
                <div>
                <label>{{__('Web Site')}}</label></br>
                <input type="text" name="Website" id="Website" class="form-control" >
                @error('Website')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                </div>
            </div>

            <div class="row gx-3 mb-3">   
            <h4>Address:</h4> 
                <div class="col-md-4">        
                <div>
                <label>{{__('Province/Capital')}}</label></br>
                <input type="text" name="Province" id="Province" class="form-control" ></br>
                <!-- <select name="Province" id="Province">
                @for($i=1;$i<=25;$i++)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor 
                </select> -->
                @error('Province')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                </div>
                <div class="col-md-4">        
                <div>
                <label>{{__('District/Khan')}}</label></br>
                <input type="text" name="District" id="District" class="form-control" ></br>
                @error('District')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                </div>
                <div class="col-md-4">        
                <div>
                <label>{{__('Commune/Sangkat')}}</label></br>
                <input type="text" name="Commune" id="Commune" class="form-control" ></br>
                @error('Commune')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                </div>
            </div>
        </div>
            <div class="col-xl-4">
            <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <input type='file' name="ProfilePicture" onchange="readURL(this);" />
                    <br>
                    <img class="img-account-profile rounded-circle" id="blah" src="http://bootdey.com/img/Content/avatar/avatar1.png" width="300px" height="300px" alt="">
                    <!-- Profile picture help block-->
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
        
                        
        <input type="submit" value="Save/Change" class="btn btn-success"></br>
    </form>
    
  </div>
</div>