@extends('GeneratesPDF.master')
@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Address</th>
            <th>City</th>
            <th>Zip Code</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->full_name}}</td>
                <td>{{$user->street_address}}</td>
                <td>{{$user->city}}</td>
                <td>{{$user->zip_code}}</td>
                <td><a href="{{action('GeneratePDF\UserDetailController@downloadPDF', $user->id)}}">PDF</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
