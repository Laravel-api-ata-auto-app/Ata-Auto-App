<div class="card">
        <div class="card-header">
            <h2>Car Brand List
            <a href="{{ url('/admin/brand/create') }}" class="btn btn-primary btn-sm float-end">
                Add New Brand
            </a>
            <!-- <br/>
            <br/> -->
            </h2>
        </div>
        <div class="card-body">
            
            <div class="table-responsive">
                <table class="table table-border table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Brand Name</th>
                            <th>Brand Logo</th>
                            <th>Made</th>
                            
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Brands as $Brand)
                            <tr>
                                <td>{{ $Brand->id }}</td>
                                <td>{{ $Brand->Name }}</td>
                                <td>
                                    <img src="{{asset('uploads/Brand/'.$Brand->Logo)}}" width="100px" height="100px"/>
                                    
                                </td>
                                <td>{{ $Brand->Made }}</td>
                                
                                <td>
                                    <!-- <a href="{{ url('/admin/brand/' . $Brand->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> -->
                                    <a href="{{ url('/admin/brand/' . $Brand->id . '/edit') }}" title="Edit Brand"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                    <form method="POST" action="{{ url('/admin/brand/' . $Brand->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                                </tbody>
  
                </table>
                <div>
                    {{$Brands->links()}}
                </div>
        </div>
    </div>
