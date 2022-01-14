@extends('layouts.app')

@section('content')
<div class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title float-left">Employees</h4>
                    <div class="text-right">
                        <a href="{{ route('create.employee') }}" class="btn btn-primary p-2">Add New Employee</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0 table-striped border-0 data-table" id="datatable">
                            <thead class="thead-light">
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Cell 1 #</th>
                                <th>CEll 2 #</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @if(isset($employees))
                                @foreach($employees as $employee)
                                <tr>
                                    <td>{{$sn++}}</td>
                                    <td>{{$employee->first_name}}</td>
                                    <td>{{$employee->last_name}}</td>
                                    <td>{{$employee->email}}</td>
                                    <td>{{$employee->cell_1}}</td>
                                    <td>{{$employee->cell_2 ?? ""}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('edit.employee', $employee->id) }}" class="btn btn-sm p-2" title="Edit"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('view.employee', $employee->id) }}" class="btn btn-sm p-2" title="View"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        @if(isset($users))
                        {!! $users->links("pagination::bootstrap-4") !!}
                        @endif
                    </div>
                    <!-- @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }} -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection