@extends('layout.main')

@section('content')
    <?php
//    echo '<pre>';
//    var_dump($files);
//    echo '</pre>';
    ?>
    <div class="container mt-5">

        <div class="col-md-10 p-0">
            <h3>Search by word: <b>{{$search}}</b></h3>
            <table class="table mt-5">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Folder</th>
                    <th scope="col">Cell</th>
                    <th scope="col">Bookcase</th>
                </tr>
                </thead>
                <tbody>
                @foreach($files as $file)
                    <tr>
                        <th scope="row"><a href="{{route('folder.view', $file->folder_id)}}">{{$file->folder_title}}</a></th>
                        <th scope="row"><a href="{{route('cell.view', $file->cell_id)}}">{{$file->cell_title}}</a></th>
                        <td ><a href="{{route('armoire.view', $file->armoire_id)}}">{{$file->armoire_title}}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
