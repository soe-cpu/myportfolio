@extends('backendtemplate')
@section('title','Edit User')
@section('content')
    <div class="row py-3 px-2">
        <div class="col-10">
            <h3>Edit User</h3>
        </div>
        <div class="col-2">
        </div>
    </div>
    <div class="row px-2">
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <div class="row">
                    <div class="col-8 offset-2">
                        <form action="{{ url('admin/users/update/'.$user->id) }}" method="POST">
                            @csrf
                            <div class="form-group py-2">
                                <label for="">Name:</label>
                                <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                            </div>
                            <div class="form-group py-2">
                                <label for="">Email:</label>
                                <input type="email" name="email" value="{{ $user->email }}" class="form-control">
                            </div>
                            <div class="form-group py-2">
                                <label for="">Status:</label>
                                <select name="status" id="" class="form-control">
                                    <option value="admin"
                                    @if($user->status == 'admin') selected @endif
                                    >Admin</option>
                                    <option value="user"
                                    @if($user->status == 'user') selected @endif
                                    >User</option>
                                </select>
                            </div>
                            <button class="btn btn-primary my-2">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection