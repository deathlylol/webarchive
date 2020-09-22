@extends('layout.main')
@section('content')
    <div class="container mt-5">
        <div class="p-0 col-md-6">
            <h3>Download file</h3>
            {!! Form::open(['route' => ['file.update',$file->id],'method'=>'PUT','enctype'=>"multipart/form-data"]) !!}
            @include('errors')
            <div class="form-group">
                <div class="mt-3 mb-1">
                    <label for="file_title">Title</label>
                    <input type="text" class="form-control" id="file_title" name="title" placeholder="" value="{{$file->title}}">
                </div>
                <div class="mt-3 mb-1">
                    <label for="folder_id">Choose a folder</label>
                    <select class="form-control" id="folder_id" name="folder_id">
                        @foreach($folders as $folder)
                            <option value="{{$folder->id}}" {{$folder->id == $file->folder_id ? 'selected':''}}>{{$folder->title}} ~ {{$folder->cell->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-3 mb-1">
                    <label for="fileName">File input</label>
                    <input type="file" class="form-control-file" id="fileName" name="file_name">
                </div>
                <button class="btn btn-dark mt-3">Edit</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
