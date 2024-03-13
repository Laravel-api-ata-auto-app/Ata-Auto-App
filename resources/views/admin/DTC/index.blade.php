@extends('layouts.admin')
@section('content')
     
<div class="card-header">
                <h2>DTC Data
                    
                <a href="{{ url('/admin/DTC/create') }}" class="btn btn-primary btn-sm">
                    Add New DTC
                </a>
                <a href="{{ url('/admin/excelimport') }}" class="btn btn-info btn-sm float-end">
                    Import from Ms.Exel(xls,elsx)
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
        <th>Code</th>
        <th>​ភាសាខ្មែរ</th>
        <th>English</th>
        <th>Action</th>
       </tr>
       </thead>
       <tbody>
       @foreach($dtcs as $dtc)
       <tr>
            <td>{{ $dtc->DTC_Code }}</td>
            <td>{{ $dtc->Khdtc }}</td>
            <td>{{ $dtc->Endtc }}</td>
            <td>
                                    
                <a href="{{ url('/admin/DTC/' . $dtc->DTC_Code . '/edit') }}" title="Edit Brand"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                <form method="POST" action="{{ url('/admin/DTC/' . $dtc->DTC_Code) }}" accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                </form>
            </td>
       </tr>
       @endforeach
       </tbody>
      </table>
     </div>
    </div>

    
    
 

@endsection