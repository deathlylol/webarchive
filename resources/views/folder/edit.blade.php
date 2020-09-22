@extends('layout.main')
@section('content')
    <div class="container mt-5">
        <div class="p-0 col-md-6">
            <nav>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('app/index')}}">Main</a></li>
                    <li class="breadcrumb-item"><a href="{{route('armoire.view',$folder->cell->id)}}">{{$folder->cell->title}}</a></li>
                    <li class="breadcrumb-item active"><b>Edit {{$folder->title}}</b></li>
                </ul>
            </nav>
            {!! Form::open(['route' => ['folder.update',$folder->id],'method' => 'PUT']) !!}
            @include('errors')
            <div class="form-group">
                <div class="mt-3 mb-1">
                    <label for="armoire_title">Title</label>
                    <input type="text" class="form-control" id="cell_title" value="{{$folder->title}}" name="title" placeholder="">
                </div>
                <div class="mt-3 mb-1">
                    <label for="armoire_title">Choose a cell</label>
                    <select class="form-control" id="armoire_id" name="cell_id">
                        @foreach($cells as $cell)
                            <option value="{{$cell->id}}" {{$cell->id == $folder->cell_id ? 'selected':''}}>{{$cell->title}} ~ {{$cell->armoire->title}}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-dark mt-3">Edit</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
