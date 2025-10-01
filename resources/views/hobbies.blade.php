@extends('layouts.app')

@section('title', 'Hobbies')

@section('content')
<h1>My Hobbies</h1>
<ul>
    @foreach($hobbies as $hobby)
        <li>{{ $hobby }}</li>
    @endforeach
</ul>
@endsection