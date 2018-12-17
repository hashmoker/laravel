@extends('admin.layout')

@section('content')

<table class="table table-striped table-bordered table-hover">
    <tr>
        <th>Name</th>
        <th>Mail</th>
        <th>pass</th>

    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->password }}</td>

      
    </tr>
    @endforeach
</table>
@endsection
