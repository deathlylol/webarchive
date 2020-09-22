@extends('layout.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mt-5">
            <div class="d-flex align-items-center justify-content-between">
                <div class="form-group">
                    <a href="{{route('armoire.create')}}" class="btn btn-dark">Create bookcase</a>
                    <a href="{{route('cell.create')}}" class="btn btn-dark">Create cell</a>
                    <a href="{{route('folder.create')}}" class="btn btn-dark">Create folder</a>
                    <a href="{{route('file.create')}}" class="btn btn-dark">Create file</a>
                </div>
                <div>
                    {!! Form::open(['route' => ['folder.search'],'method' => 'GET']) !!}
                    @include('errors')
                    <div class="form-group d-flex">
                        <input type="search" class="form-control mr-3" id="file_search" name="folder" placeholder="search a folder...">
                        <button type="submit" class="btn btn-outline-dark">Send</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col" style="text-align: center">Bookcase</th>
                    <th scope="col" style="text-align: right" class="pr-5">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($armoires as $armoire)
                <tr>
                    <th scope="row"><a href="{{route('armoire.view', $armoire->id)}}">{{$armoire->id}}</a></th>
                    <td style="text-align: center"><a href="{{route('armoire.view', $armoire->id)}}">{{$armoire->title}}</a></td>
                    <td style="text-align: right" class="pr-5">
                        <a href="{{route('armoire.view', $armoire->id)}}" style="color: #000"><i class="fa fa-eye"></i></a>
                        <a href="{{route('armoire.edit', $armoire->id)}}" style="color: #000"><i class="fa fa-pencil"></i></a>
                        {!! Form::open(['method' => 'DELETE','route' => ['armoire.destroy', $armoire->id],'style' => 'display:inline']) !!}
                        <button onclick="return confirm('Are you sure?')" style="background: transparent; border: 0;padding: 0"><i style="color: red" class="fa fa-times-circle"></i></button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
