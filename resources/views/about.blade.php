@extends('layouts.app')

@section('title', 'About')

@section('content')
<h1>About Our Team</h1>
<ul>
    @foreach($team as $member)
        <li><strong>{{ $member['name'] }}</strong> - {{ $member['role'] }}</li>
    @endforeach
</ul>
@endsection