@extends('layouts.shop')
@section('content')
   
<div class="card">
            <div class="card-header">
                <h2>Products List of {{$shopsProfile->Name}}
                <a href="{{ url('/shop/Products/create') }}" class="btn btn-primary btn-sm float-end">
                    Add New Product
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
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Made_IN</th>
                                <th>Condiction</th>
                                <th>Price</th>
                                <th>Warranty</th>
                                <th>Picture</th>
                                <th>Posted at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php
                        $i=0;
                        @endphp
                        @foreach($Products as $Product)
                        <tr>
                                <td>{{ $Product->id }}</td>
                                <td>{{ $Product->Name }}</td>
                                <td>{{ $Product->Made_IN }}</td>
                                <td>{{ $Product->Condiction }}</td>
                                <td>{{ $Product->Price }}</td>
                                <td>{{ $Product->Warranty }}</td>
                                <td>
                                <img src="{{asset('uploads/Products/'.$shopsProfile->Name.'/'.$Product->Picture)}}" width="100px" height="100px"/>
                                    

                                </td>
                                <td>{{ $Product->Posted }}</td>
                               
                                
                                
                                <td>
                                    
                                    <a href="{{ url('/shop/Products/'.$Product->id.'/edit') }}" title="Edit Brand"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                    <form method="POST" action="{{ url('/shop/Products/'.$Product->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                


@endsection