@extends('backendtemplate')
@section('title','Project')
@section('content')
    <div class="row pt-3 px-2">
        <div class="col-10">
            <h3>Project</h3>
        </div>
        <div class="col-2">
            <a href="{{ url('admin/projects/create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add</a>
        </div>
    </div>
    <hr>
    
    @if (Session('createSuccessMsg'))
    <div class="alert bg-success alert-dismissible fade show" role="alert">
        <strong class="text-white">{{ Session('createSuccessMsg') }}</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>   
    @endif
    @if (Session('successMsg'))
    <div class="alert bg-success alert-dismissible fade show" role="alert">
        <strong class="text-white">{{ Session('successMsg') }}</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>   
    @endif
    @if (Session('deleteSuccessMsg'))
    <div class="alert bg-success alert-dismissible fade show" role="alert">
        <strong class="text-white">{{ Session('deleteSuccessMsg') }}</strong> 
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
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Url</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Url</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php
                        $i=1;
                        @endphp
                        @foreach ($projects as $project)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td><img src="{{asset($project->photo)}}" class="img-thumbnail" width="100px" height="100px" alt="project item"></td>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->url }}</td>
                            <td>  
                                <form action="{{ url('admin/projects/'.$project->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ url('admin/projects/'.$project->id.'/edit')}}" class="btn btn-success btn-sm"><i class="far fa-edit"></i> Edit</a>
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