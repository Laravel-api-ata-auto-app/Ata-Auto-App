@extends('layouts.admin')
@section('content')
    <div class="card">
            <div class="card-header">
                <h2>Subscribe Plan List
                <a href="{{ url('/admin/plans/create') }}" class="btn btn-primary btn-sm float-end">
                    Add New Plan
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
                                <!-- <th>#</th> -->
                                <th>Type</th>
                                <th>Name</th>
                                <th>Cost</th>
                                <th>Detail</th>
                                <th>Duriantion(Days)</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach($Plans as $plan)
                            <tr>
                                <td>{{ $plan->type_id }}</td>
                                <td>{{ $plan->Name }}</td>
                                
                                <td>{{ $plan->Cost }}</td>
                                <td>{{ $plan->Detail }}</td>
                                <td>{{ $plan->Duration }}</td>
                                <td>
                                    
                                    <a href="{{ url('/admin/plans/' . $plan->Name . '/edit') }}" title="Edit Brand"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                    <form method="POST" action="{{ url('/admin/plans/' . $plan->Name) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                                </tbody>
  
                        
                    </table>
                   <!-- <div>
                   {{$Plans->links()}}
                   </div> -->
                    
                    
            </div>
        </div>
    @endsection
