@extends('layout.main')
@section('content')
    <div class="container mt-5">
        <div class="p-0 col-md-6">

            <nav>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('app/index')}}">Main</a></li>
                    <li class="breadcrumb-item"><a href="{{route('armoire.view',$cell->armoire->id)}}">{{$cell->armoire->title}}</a></li>
                    <li class="breadcrumb-item active"><b>Edit {{$cell->title}}</b></li>
                </ul>
            </nav>

            {!! Form::open(['route' => ['cell.update',$cell->id],'method'=>'PUT']) !!}
            @include('errors')
            <div class="form-group">
                <div class="mt-3 mb-1">
                    <label for="armoire_title">Title</label>
                    <input type="text" class="form-control" id="cell_title" name="title" placeholder="" value="{{$cell->title}}">
                </div>
                <div class="mt-3 mb-1">
                    <label for="armoire_title">Bookcase</label>
                    <select class="form-control" id="armoire_id" name="armoire_id">
                        @foreach($bookcases as $bookcase)
                            <option value="{{$bookcase->id}}" {{$bookcase->id == $cell->armoire_id ? 'selected':''}}>{{$bookcase->title}}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-dark mt-3">Update</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
