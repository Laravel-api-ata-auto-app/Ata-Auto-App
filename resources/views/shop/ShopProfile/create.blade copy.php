<div class="row">
    <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Shop Info Details</div>
                <div class="card-body">
                    <form action="{{  url('shop/Profile/') }}" method="post" enctype="multipart/form-data">
                        <!-- Form Group (username)-->
                        @csrf
                       
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                            <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="{{ Auth::user()->name }}">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (Shop name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">Shop Name</label>
                                <input class="form-control" id="shopName" name="shopName" type="text" placeholder="Shop Name"  >
                            </div>
                            <!-- Form Group (Contact name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="Contact_Name">Contact name</label>
                                <input class="form-control" id="Contact_Name" name="Contact_Name" type="text" placeholder="Contact name" >
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (Contact_Number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="Contact_Number">Contact Number</label>
                                <input class="form-control" id="Contact_Number" name="Contact_Number" type="tel" placeholder="Contact_Number" >
                            </div>
                            <!-- Form Group (Address)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="Address">Address</label>
                                <input class="form-control" id="Address" name="Address" type="text" placeholder="Address" >
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="Email">Email address</label>
                            <input class="form-control" id="Email" id="Email" type="email" placeholder="Enter your email address" >
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (Facebook)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Facebook</label>
                                <input class="form-control" id="facebook" Name="facebook" type="text" placeholder="Enter your facebook link" >
                            </div>
                            <!-- Form Group (Telegram)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">Telegram</label>
                                <input class="form-control" id="Telegram" id="Telegram" type="text" name="Telegram" placeholder="Enter your " >
                            </div>
                        </div>
                        <!-- Save changes button-->
                       
                        <input type="submit" value="Update & Save" class="btn btn-primary">
                    </form>
                    </div>
            </div>
        </div>
    
    
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <input type='file' name="ProfilePicture" onchange="readURL(this);" />
                    <br>
                   
                    <img class="img-account-profile rounded-circle" id="blah" src="http://bootdey.com/img/Content/avatar/avatar1.png" width="300px" height="300px" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#uploadpictureModal">Upload new image</button>
                    
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

<!-- <div class="row">

    <div class="col-xl-6">
         <!-- <div class="card mb-4"> -->
         <div class="card-header">Shop Info Details</div>
                <div class="card-body">
                </div>
            </div>
        <!-- </div>  -->
    </div>
    <div class="col-xl-4">
        <!-- <div class="card mb-4 mb-xl-0"> -->
            <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                </div>
            </div>
        <!-- </div> -->
    </div>

</div> -->