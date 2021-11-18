@extends('backendtemplate')
@section('title','Project Create')
@section('content')
    <div class="row py-3 px-2">
        <div class="col-10">
            <h3>Project Create</h3>
        </div>
        <div class="col-2">
            <a href="{{ url('admin/projects') }}" class="btn btn-primary"><i class="fas fa-angle-double-left"></i> Back</a>
        </div>
    </div>
    <div class="row px-2">
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <div class="row">
                    <div class="col-8 offset-2">
                        <form action="{{ url('admin/projects') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group py-2">
                                <label for="">Name:</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter project name" value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group py-2">
                                <label for="">Url:</label>
                                <input type="text" name="url" class="form-control @error('url') is-invalid @enderror" placeholder="Enter project url" value="{{ old('url') }}">
                                @error('url')
                                   <small><span class="text-danger">{{ $message }}</span></small>
                                @enderror
                            </div>
                            <div class="form-group py-2">
                                <label for="">Photo:</label>
                                <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror" accept="image/*" value="{{old('photo')}}">
                                @error('photo')
                                   <small><span class="text-danger">{{ $message }}</span></small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary my-2">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection