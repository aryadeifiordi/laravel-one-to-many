@extends('layouts.admin')

@section('content')
    <h1>Admin Dashboard</h1>
    <ul>
        <li><a href="{{ route('admin.projects.index') }}">Projects</a></li>

    </ul>
@endsection
