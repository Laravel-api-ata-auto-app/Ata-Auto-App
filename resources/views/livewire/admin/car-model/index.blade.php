<div class="card">
            <div class="card-header">
                <h2>Car Models List
                <a href="{{ url('/admin/Carmodel/create') }}" class="btn btn-primary btn-sm float-end">
                    Add New Car Model
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
                                <th>Name</th>
                                <th>Year</th>
                                <th>Brand</th>
                                <th>use</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        @foreach($CarModels as $model)
                            <tr>
                                <td>{{ $model->id }}</td>
                                <td>{{ $model->Name }}</td>
                                
                                <td>{{ $model->Year }}</td>
                                <td>{{ $model->Brand }}</td>
                                <td>{{ $model->use }}</td>
                                <td>
                                    
                                    <a href="{{ url('/admin/Carmodel/' . $model->id . '/edit') }}" title="Edit Brand"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                    <form method="POST" action="{{ url('/admin/Carmodel/' . $model->id) }}" accept-charset="UTF-8" style="display:inline">
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
                    {{$CarModels->links()}}
                </div>
                    
                    
            </div>
        </div>