@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                <a href="{{ route('disneyplus.create') }}" class="btn btn-sm btn-dark mb-3">New</a>
                    <div>
                        <form method="post" class="d-inline-block" enctype="multipart/form-data" action="{{ url('/import_excel/import') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="file" name="select_file" />
                                <input type="submit" name="upload" class="btn btn-sm btn-primary" value="Upload">
                            </div>
                        </form>

                        <a href="{{action('DisneyplusController@export')}}" class="btn btn-sm btn-dark">Export</a>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Show Name</th>
                        <th>Series</th>
                        <th>Lead Actor</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($shows as $show)
                        <tr>
                            <td>{{$show->id}}</td>
                            <td>{{$show->show_name}}</td>
                            <td>{{$show->series}}</td>
                            <td>{{$show->lead_actor}}</td>
                            <td></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
