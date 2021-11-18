@extends('backendtemplate')
@section('title','Skill')
@section('content')
    <div class="row py-3 px-2">
        <div class="col-10">
            <h3>Skill</h3>
        </div>
        <div class="col-2">
            <a href="{{ url('admin/skills') }}" class="btn btn-primary"><i class="fas fa-angle-double-left"></i> Back</a>
        </div>
    </div>
    <div class="row px-2">
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <div class="row">
                    <div class="col-8 offset-2">
                        <form action="{{ url('admin/skills') }}" method="POST">
                            @csrf
                            <div class="form-group py-2">
                                <label for="">Name:</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter skill name" value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group py-2">
                                <label for="">Percent:</label>
                                <input type="text" name="percent" class="form-control @error('percent') is-invalid @enderror" placeholder="Enter skill percentage" value="{{ old('percent') }}">
                                @error('percent')
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