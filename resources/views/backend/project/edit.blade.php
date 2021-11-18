@extends('backendtemplate')
@section('title','Edit Project')
@section('content')
    <div class="row py-3 px-2">
        <div class="col-10">
            <h3>Edit Project</h3>
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
                        <form action="{{ url('admin/projects/'.$project->id) }}" method="POST">  
                            @csrf
                            @method('PUT')
                            <div class="form-group py-2">
                                <label for="">Name:</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter project name" value="{{ $project->name ?? old('name') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group py-2">
                                <label for="">Percent:</label>
                                <input type="text" name="url" class="form-control @error('url') is-invalid @enderror" placeholder="Enter project url" value="{{ $project->url ?? old('url') }}">
                                @error('url')
                                   <small><span class="text-danger">{{ $message }}</span></small>
                                @enderror
                            </div>
                            <div class="form-group py-2">
                                <label for="">Photo:</label>
                                <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror" accept="image/*" value="{{ $project->photo ?? old('photo')}}">
                                <img src="{{asset($project->photo)}}" width="150" height="150" class="my-1">
                                @error('photo')
                                   <small><span class="text-danger">{{ $message }}</span></small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary my-2">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection