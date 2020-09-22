@extends('layout.main')

@section('content')
    <div class="container mt-5">
        <div class="p-0 col-md-6">
            <h3>Create armoire</h3>
            {!! Form::open(['route' => ['armoire.store']]) !!}
            @include('errors')
            <div class="form-group">
                <div class="mt-3 mb-1">
                    <label for="armoire_title">Title</label>
                    <input type="text" class="form-control" id="armoire_title" name="title" placeholder="">
                </div>
                <button class="btn btn-dark mt-3">Create</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
