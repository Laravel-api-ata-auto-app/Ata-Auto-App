@extends('layouts.admin')
@section('content')
     
<div class="card-header">
                <h2>Categories
                    
                <a href="{{ url('/admin/category/create') }}" class="btn btn-primary btn-sm float-end">
                    Add New Category
                </a>
                
                </h2>
            </div>

   <br />
   <div class="panel panel-default">
    
    <div class="panel-body">
     <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead>
       <tr>
        <th>No</th>
        <th>Name</th>
        <th>Action</th>
       </tr>
       </thead>
       <tbody>
       @foreach($categories as $category)
       <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->Name }}</td>
            
            <td>
                                    
                <a href="{{ url('/admin/category/' . $category->id . '/edit') }}" title="Edit Brand"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                <form method="POST" action="{{ url('/admin/category/' . $category->id) }}" accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Category" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                </form>
            </td>
       </tr>
       @endforeach
       </tbody>
      </table>
     </div>
    </div>

    
    
 

@endsection