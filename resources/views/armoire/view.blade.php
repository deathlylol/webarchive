@extends('layout.main')

@section('content')
    <div class="container mt-5">
        <div class="p-0 col-md-6">
            <nav>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('app/index')}}">Main</a></li>
                    <li class="breadcrumb-item active"><b>{{$armoire->title}}</b></li>
                </ul>
            </nav>
        </div>
        <div class="col-md-10 p-0">
            <table class="table mt-3">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col" style="text-align: center"><i class="fa fa-table" aria-hidden="true"></i> Cell</th>
                    <th scope="col" style="text-align: right" class="pr-5">Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($armoire->cell as $cell)
                    <tr>
                        <th scope="row"><a href="{{route('cell.view', $cell->id)}}">{{$cell->id}}</a></th>
                        <td style="text-align: center"><a href="{{route('cell.view', $cell->id)}}">{{$cell->title}}</a></td>
                        <td style="text-align: right" class="pr-5">
                            <a href="{{route('cell.view', $cell->id)}}" style="color: #000"><i class="fa fa-eye"></i></a>
                            <a href="{{route('cell.edit', $cell->id)}}" style="color: #000"><i class="fa fa-pencil"></i></a>
                            {!! Form::open(['method' => 'DELETE','route' => ['cell.destroy', $cell->id],'style' => 'display:inline']) !!}
                            <button onclick="return confirm('Are you sure?')" style="background: transparent; border: 0;padding: 0"><i style="color: red" class="fa fa-times-circle"></i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @empty
                    <div class="alert alert-warning mt-5" role="alert">
                        <h4>Cells is empty</h4>
                    </div>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
