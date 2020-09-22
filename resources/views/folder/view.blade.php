@extends('layout.main')

@section('content')
    <div class="container mt-5">
        <div class="p-0 col-md-6">
            <nav>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('app/index')}}">Main</a></li>
                    <li class="breadcrumb-item"><a href="{{route('cell.view',$folder->cell->id)}}">{{$folder->cell->title}}</a></li>
                    <li class="breadcrumb-item active"><b>{{$folder->title}}</b></li>
                </ul>
            </nav>
        </div>
        <div class="col-md-10 p-0">
            <table class="table mt-3">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col" style="text-align: center"><i class="fa fa-file-o" aria-hidden="true"></i> Files</th>
                    <th scope="col" style="text-align: right" class="pr-5">Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($folder->file as $file)
                    <tr>
                        <th scope="row">{{$file->id}}</a></th>
                        <td style="text-align: center"><a target="_blank" href="{{Storage::url('uploads/'.$file->file_name)}}">{{$file->title}}</a></td>
                        <td style="text-align: right" class="pr-5">
                            <a href="{{route('file.edit', $file->id)}}" style="color: #000"><i class="fa fa-pencil"></i></a>
                            {!! Form::open(['method' => 'DELETE','route' => ['file.destroy', $file->id],'style' => 'display:inline']) !!}
                            <button onclick="return confirm('Are you sure?')" style="background: transparent; border: 0;padding: 0"><i style="color: red" class="fa fa-times-circle"></i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @empty
                    <div class="alert alert-warning mt-5" role="alert">
                        <h4>Files is empty</h4>
                    </div>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
