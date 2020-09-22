@extends('layout.main')

@section('content')
    <div class="container mt-5">
        <div class="p-0 col-md-6">
            <nav>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('app/index')}}">Main</a></li>
                    <li class="breadcrumb-item">Edit {{$armoire->title}}</li>
                </ul>
            </nav>
            {!! Form::open(['route' => ['armoire.update',$armoire->id],'method'=>'PUT']) !!}
            @include('errors')
            <div class="form-group">
                <div class="mt-3 mb-1">
                    <label for="armoire_title">Title</label>
                    <input type="text" class="form-control" id="armoire_title" name="title" placeholder="" value="{{$armoire->title}}">
                </div>

                <button class="btn btn-dark mt-3">Edit</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
