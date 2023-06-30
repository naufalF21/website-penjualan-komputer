@extends('layouts.main')
@section('container')
    <div>
        <h1>Hello Dashboard</h1>
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="btn btn-primary">Logout</button>
        </form>
    </div>
@endsection
