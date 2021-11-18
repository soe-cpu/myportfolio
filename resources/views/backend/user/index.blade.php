@extends('backendtemplate')
@section('title','User')
@section('content')
    <div class="row py-3 px-2">
        <div class="col-10">
            <h3>User</h3>
        </div>
        <div class="col-2">
        </div>
    </div>
    @if (Session('successMsg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ Session('successMsg') }}</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>   
    @endif
    @if (Session('deleteSuccessMsg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ Session('deleteSuccessMsg') }}</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>   
    @endif
    <div class="row px-2">
        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php
                        $i=1;
                        @endphp
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->status }}</td>
                            <td>  
                                <form action="{{ url('admin/users/delete/'.$user->id)}}" method="POST">
                                    @csrf
                                    <a href="{{ url('admin/users/edit/'.$user->id)}}" class="btn btn-success btn-sm"><i class="far fa-edit"></i> Edit</a>
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="confirm('Are you sure Delete?')"><i class="far fa-trash-alt"></i> Delete</button>
                                </form>    
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection